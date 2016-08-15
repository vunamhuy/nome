<?php
class ModelDesignTopmenu extends Model {
	public function getMenu() {

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		$this->load->model('catalog/category');
		$this->load->model('catalog/information');
		
		$top_cats = $this->model_catalog_category->getCategories(0);
		$information = $this->model_catalog_information->getInformations(0);
		//var_dump($categories);exit;
		$menu = array_merge($top_cats,$information);
		//var_dump($menu);exit;
		$category = "<ul class=\"menu\">\n";
		$category.="<li><a href=".$this->url->link('common/home').">Trang chủ</a></li>";
		foreach ($menu as $top_cat)	{
			if ( $top_cat['top'] && isset($top_cat['category_id']) ) {
				$name	=$top_cat['name'];
				$href	=$this->url->link('product/category', 'path=' . $top_cat['category_id']);
				$class	= in_array($top_cat['category_id'], $parts) ?  " class=\"active\"" : "";
				$category .= "<li>\n<a href=\"".$href."\"".$class.">".$name."</a>\n";
				$category .= $this->getCatTree($top_cat['category_id'])."\n</li>\n";
			}
			elseif($top_cat['top'] && isset($top_cat['information_id'])){
				$name	= $top_cat['title'];
				$href	= $this->url->link('information/information', 'information_id=' .  $top_cat['information_id']);
				$class	= in_array($top_cat['information_id'], $parts) ?  " class=\"active\"" : "";
				$category .= "<li>\n<a href=\"".$href."\"".$class.">".$name."</a>\n";
			}
		}
		
		return $category."\n</ul>\n";
	} 	

	function getCatTree ($category_id = 0)	{
		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		$this->load->model('catalog/category');
		$category_data = "";

		$categories = $this->model_catalog_category->getCategories((int)$category_id);

		foreach ($categories as $category) {
			$name = $category['name'] ;
			$href = $this->url->link('product/category', 'path=' . $category['category_id']);
			$class = in_array($category['category_id'], $parts) ?  " class=\"active\"" : "";
			$parent = $this->getCatTree($category['category_id']);
			if ($parent) {
				$class = $class	? " class=\"active\"" : " class=\"parent\"";
			}
			
				$category_data .= "<li>\n<a href=\"".$href."\"".$class.">".$name."</a>".$parent."\n</li>\n";
			

		}

		return strlen($category_data) ? "<ul>\n".$category_data."\n</ul>\n" : "";
	}
}

?>