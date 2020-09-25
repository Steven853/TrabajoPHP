<?php

/**
 * Statuses Class
 */

 class Statuses
 {
    private $id;
	private $name;
	private $identification;
    private $pdo;
    private $type_status_id;
    
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
    		$strSql = "SELECT s.*, ts.name as type FROM statuses s inner join type_statuses ts on ts.id=s.type_status_id order by s.Id";
    		$query = $this->pdo->select($strSql);
    		return $query;
	    } catch (PDOException $e) {
	    	die($e->getMessage());
	    } 
    }
    
    public function getCustomStatuses($type)
    {
    try {
            $type = ucwords($type);
            $strSql = "SELECT s.*, ts.name as type FROM statuses s INNER JOIN type_statuses ts ON ts.id = s.type_status_id WHERE ts.name = 'General' or ts.name = '$type' ";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }   
    }
	
	public function newStatuses($data)
    {
        try {
            $this->pdo->insert('statuses', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
	}
	
	public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM statuses WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
	
	public function editStatuses($data)
    {
        try {
            $strWhere = ' id = ' . $data['id'];
            $this->pdo->update('statuses', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteStatuses($data)
    {
        try {
            $strWhere = ' id = ' . $data['id'];
            $this->pdo->delete('statuses', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
 }
 