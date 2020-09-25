<?php

/**
 * Category Class
 */

 class Category
 {
    private $id;
	private $name;
	private $identification;
    private $pdo;
    private $status_id;
    
    public function __construct()
    {
    	try {
    		$this->pdo = new Database;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    }    
    }

    public function getAll()
    {
    	try {
    		$strSql = "SELECT c.*, s.name as status FROM categories c inner join statuses s on s.Id=c.status_id";
    		$query = $this->pdo->select($strSql);
    		return $query;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    } 
    }

    public function newCategory($data)
    {
        try {
            $this->pdo->insert('categories', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM categories WHERE Id = :Id";
            $arrayData = ['Id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editCategory($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('categories', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteCategory($data)
    {
        try {
            $strWhere = 'Id = ' . $data['id'];
            $this->pdo->delete('categories', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

 }