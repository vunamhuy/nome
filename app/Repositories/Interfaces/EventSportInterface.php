<?php
namespace App\Repositories\Interfaces;
interface EventSportInterface
{
    public function all($columns = array('*'));
    public function paginate($perPage = 2, $columns = array('*'));
    public function findById($id, $columns = array('*'));
    public function importCsvEventSport($data = array());
    public function create($data);
    public function update($data, $id);
    public function destroy($id);
}