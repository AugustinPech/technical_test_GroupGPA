<?php
namespace App\Controllers;
echo 'homecontroller.php <br>';

use App\Models\Category;
class Homecontroller
{
    private $category;
    public function index()
    {
        $this->category = new Category();
        $listCategories =  $this->category->listCategories();
        include __DIR__ . '/../Views/home.tpl.php';
    }
}
