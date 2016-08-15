<?php
namespace App\Repositories\Eloquents;
use App\Product;
use DB;
use App\Repositories\Interfaces\ProductInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as Files;

class ProductRepository extends Repository implements ProductInterface {
    /**
    * Eloquent model
    */
    protected $model;
    /**
    * @param Lesson $model
    */
    function __construct(Product $model)
    {
        $this->model = $model;
    }
    
    public function paginate($perPage = 5, $columns = array('*'), $relationWith = array('file')) {
        return $this->model->with($relationWith)->paginate($perPage, $columns);
    }
    public function paginateByUser($perPage = 5, $columns = array('*'), $relationWith = array('file'), $user_id) {
        return $this->model->with($relationWith)->where('user_id', $user_id)->paginate($perPage, $columns);
    }
    
}