<?php
/**
 * Class CategoryController
 */

 require 'models/Categories.php';
 require 'models/Statuses.php';

 class CategoryController
 {
     private $categoryModel;

     public function __construct()
    {
        $this->categoryModel = new Category;
        $this->statusModel = new Statuses;
    }

    public function index()
    {
    	$categories = $this->categoryModel->getAll();
    	require 'views/layout.php';
    	require 'views/category/list.php';
    }

    public function new()
    {
        $statuses = $this->statusModel->getAll();
        require 'views/layout.php';
        require 'views/category/new.php';
    }

    public function save()
    {
        $this->categoryModel->newCategory($_REQUEST);
        header('Location: ?controller=category');
    }
    

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $data = $this->categoryModel->getById($id);
            $statuses = $this->statusModel->getCustomStatuses('usuario');
            require 'views/layout.php';
            require 'views/category/edit.php';
        } else {
            echo 'Error, Se requiere el id de la categoria';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->categoryModel->editCategory($_POST);
            header('Location: ?controller=category');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->categoryModel->deleteCategory($_REQUEST);
        header('Location: ?controller=category');
    }
 }