<?php

/**
 * Modelo de Usuario
 */
class Rental
{
	private $id;
	private $start_date;
	private $end_date;
    private $total;    
	private $user_id;
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
			$strSql = "SELECT r.*, s.name as status, u.name as user FROM rentals r INNER JOIN  statuses s ON s.Id=r.status_id INNER JOIN users u ON u.id=r.user_id ORDER BY r.id ASC";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newRental($data)
	{
		try {
			$this->pdo->insert('rentals', $data);
			return true;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	public function editRental($data)
	{
		try {
			$strWhere = 'id=' . $data['id'];
			$this->pdo->update('rentals', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function deleteRental($data)
	{
		try {
			$strWhere = 'id = ' . $data['id'];
			$this->pdo->delete('rentals', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function getById($id)
	{
		try {
			$strsql="SELECT * FROM rentals WHERE id= :id";
			$array =['id'=>$id];
			$query=$this->pdo->select($strsql,$array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(id) as id FROM rentals";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
	}
	
	public function saveMovieRental($arrayMovies, $lastIdRental)
    {
        try {
            foreach ($arrayMovies as $movie) {
                $data = [
                    'rental_id'  =>  $lastIdRental,
                    'movie_id'   =>  $movie["Id"]
                ];

                $this->pdo->insert('movie_rental', $data);
            } 
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }
}
