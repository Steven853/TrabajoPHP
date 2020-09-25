<?php

require 'models/Roles.php';
require 'models/Statuses.php';

class RoleController
{
	private $status;
	private $role;

	public function __construct()
	{
		$this->statusesModel = new Statuses;
		$this->role = new Roles;
    }
    
    public function index()
	{
		require 'views/layout.php';
		$statuses = $this->statusesModel->getAll();
		$roles = $this->role->getAll();
		require 'views/rol/list.php';
	}

    public function save()
	{
		$this->role->newRole($_REQUEST);
		header('Location: ?controller=role');
	}

    public function update()
	{
		if (isset($_POST)) {
			$this->role->editRole($_POST);
			header('Location: ?controller=role');
		} else {
			echo "Error, no se realizo";
		}
	}
	
	public function delete()
	{
		$this->role->deleteRole($_REQUEST);
		header('Location: ?controller=role');
	}

}