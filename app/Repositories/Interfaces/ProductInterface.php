<?php
namespace App\Repositories\Interfaces;
interface ProductInterface
{
    public function all($columns = array('*'));
    public function paginate($perPage = 5, $columns = array('*'), $relationWith = array());
    public function paginateByUser($perPage = 5, $columns = array('*'), $relationWith = array(), $user_id);
    // public function findById($id, $columns = array('*'));
    // public function importCsv($data = array());
    // public function create($data);
    // public function update($data, $id);
    // public function destroy($id);
}