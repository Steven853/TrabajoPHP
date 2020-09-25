<?php

/**
 * Modelo de Role
 */
class Roles
{
	private $id;
	private $name;
	private $status_id;
	private $pdo;

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
			$strSql = "SELECT r.*, s.name as status FROM roles r INNER JOIN  statuses s  ON s.Id=r.status_id ORDER BY r.id ASC";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	public function getById($id)
	{
		try {
			$strsql="SELECT * FROM roles WHERE id= :id";
			$array =['id'=>$id];
			$query=$this->pdo->select($strsql,$array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newRole($data)
	{
		try {
			$this->pdo->insert('roles', $data);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	public function editRole($data)
	{
		try {
			$strWhere = 'id=' . $data['id'];
			$this->pdo->update('roles', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function deleteRole($data)
	{
		try {
			$strWhere = 'id = ' . $data['id'];
			$this->pdo->delete('roles', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
