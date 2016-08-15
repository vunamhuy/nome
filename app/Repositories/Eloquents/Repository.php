<?php
namespace App\Repositories\Eloquents;

class Repository {
    /**
    * Eloquent model
    */
    protected $model;
    /**
    * @param $model
    */
    function __construct($model)
    {
        $this->model = $model;
    }
    public function all($columns = array('*'))
    {
        return $this->model->all($columns);
    }
    public function findById($id, $columns = array('*'))
    {
        return $this->model->findOrFail($id, $columns);
    }
    public function create($data) 
    {
        return $this->model->create($data);
    }
    public function paginate($perPage = 5, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }
    public function update($data, $id) 
    {
        $obj = $this->model->findOrFail($id);
        return $obj->update($data);
    }
    public function destroy($id) 
    {
        $obj = $this->model->findOrFail($id);
        return $obj->delete();
    }
}
?>