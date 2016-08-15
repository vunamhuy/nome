<?php

class ControllerModuleTmVideoBG extends Controller
{
    public function index($setting)
    {
        $this->document->addStyle('catalog/view/javascript/tmvideobg/tm_video_bg.css');

        $data['heading_title'] = $this->language->get('heading_title');

        $data['type'] = $setting['type'];
        if ($setting['type'] == 1) {
            $this->document->addScript('catalog/view/javascript/tmvideobg/jquery.rd-youtube-bg.js');
            if (isset($setting['youtube_url'])) {
                parse_str(parse_url($setting['youtube_url'], PHP_URL_QUERY), $my_array_of_vars);
                $data['youtube_url'] = $my_array_of_vars['v'];
            }
            $data['muted'] = $setting['muted'];
            $data['mobile'] = $setting['mobile'];
            $data['start'] = $setting['start'];
            if ($setting['mobile']){
                $width = $setting['youtube_image_width'];
                $height = $setting['youtube_image_height'];
                if (is_file(DIR_IMAGE .  $setting['youtube_image'])){
                    $data['youtube_image'] = $this->model_tool_image->resize($setting['youtube_image'], $width, $height);
                }
            }
        }else{
            $this->document->addScript('catalog/view/javascript/tmvideobg/jquery.vide.js');
            if (is_file(DIR_IMAGE .  $setting['local_image'])){
                $data['local_path'] = preg_replace('/\\.[^.\\s]{3,4}$/', '', $setting['local_image']);
            }
            $data['muted'] = $setting['local_muted'];
        }

        if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
            $data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');
        }

        $data['name'] = $setting['name'];


        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_videobg.tpl')) {
            return $this->load->view($this->config->get('config_template') . '/template/module/tm_videobg.tpl', $data);
        } else {
            return $this->load->view('default/template/module/tm_videobg.tpl', $data);
        }
    }
}