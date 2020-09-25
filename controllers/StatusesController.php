<?php

/**
 * Class StatusesController
 */

 require 'models/Statuses.php';
 require 'models/TypeStatus.php';

 class StatusesController
 {
    private $statusesModel;
    private $typeStatusModel;

    public function __construct()
    {
        $this->statusesModel = new Statuses;
        $this->typeStatusModel = new TypeStatus;
    }

    public function index()
    {
    	$statuses = $this->statusesModel->getAll();
    	require 'views/layout.php';
    	require 'views/statuses/list.php';
    }

    public function new()
    {
        $types = $this->typeStatusModel->getAll();
        require 'views/layout.php';
        require 'views/statuses/new.php';
    }

    public function save()
    {
        $this->statusesModel->newStatuses($_REQUEST);
        header('Location: ?controller=statuses');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $data = $this->statusesModel->getById($id);
            $typeStatuses = $this->typeStatusModel->getAll();
            require 'views/layout.php';
            require 'views/statuses/edit.php';
        } else {
            echo 'Error, se realizo';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->statusesModel->editStatuses($_POST);
            header('Location: ?controller=statuses');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->statusesModel->deleteStatuses($_REQUEST);
        header('Location: ?controller=statuses');
    }
 }