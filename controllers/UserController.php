<?php

/**
 * Class UserController
 */

require 'models/User.php';
require 'models/Statuses.php';
require 'models/Roles.php';

class UserController
{
    private $userModel;    
	private $statusModel;
	private $roleModel;

    public function __construct()
    {
        $this->userModel = new User;        
		$this->statusModel = new Statuses;
		$this->roleModel = new Roles;
    }

    public function index()
    {
    	$users = $this->userModel->getAll();
    	require 'views/layout.php';
    	require 'views/user/list.php';
    }

    public function new()
    {
        $roles = $this->roleModel->getAll();
        require 'views/layout.php';
        require 'views/user/new.php';
    }

    public function save()
    {
        $this->userModel->newUser($_REQUEST);
        header('Location: ?controller=user');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $data = $this->userModel->getById($id);
            $statuses = $this->statusModel->getCustomStatuses('usuario');
			$roles = $this->roleModel->getAll();
            require 'views/layout.php';
            require 'views/user/edit.php';
        } else {
            echo 'Error, no se realizó la actualización';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->userModel->editUser($_POST);
            header('Location: ?controller=user');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->userModel->deleteUser($_REQUEST);
        header('Location: ?controller=user');
    }
}