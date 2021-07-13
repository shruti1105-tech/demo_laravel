<?php


namespace App\Repository;


interface ICategoryRepository
{
    public function getAllCategory();

    public function getCategoryById($id);

    public function createOrUpdate($id = null, $collection = []);

    public function deleteCategory($id);
}
