<?php

/**
 * class TypeStatus
 */

 require 'models/TypeStatus.php';

class TypeStatusController
{
    private $typeStatusModel;

    public function __construct()
    {
        $this->typeStatusModel = new TypeStatus;
    }

    public function index()
    {
        $typeStatuses = $this->typeStatusModel->getAll();
        require 'views/layout.php';
        require 'views/typeStatus/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/typeStatus/new.php';
    }

    public function save()
    {
        $this->typeStatusModel->newTypeStatus($_REQUEST);
        header('Location: ?controller=typeStatus');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $typeStatus = $this->typeStatusModel->getById($id);
            require 'views/layout.php';
            require 'views/typeStatus/edit.php';
        } else {
            echo 'Error, Se requiere el id del tipo estado';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->typeStatusModel->editTypeStatus($_POST);
            header('Location: ?controller=typeStatus');
        } else {
            echo 'Error intentando actualizar un tipo estado';            
        }
    }

    public function delete()
    {
        $this->typeStatusModel->deleteTypeStatus($_REQUEST);
        header('Location: ?controller=typeStatus');
    }
}