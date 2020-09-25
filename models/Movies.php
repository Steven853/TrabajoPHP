 <?php

/**
 * Modelo de Usuario
 */
class Movies
{
	private $id;
	private $name;
	private $descripcion;
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
			$strSql = "SELECT m.*, s.name as status, u.name as user FROM movies m INNER JOIN  statuses s ON s.Id=m.status_id INNER JOIN users u ON u.id=m.user_id order by m.Id";
			$query = $this->pdo->select($strSql);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function newMovie($data)
	{
		try {
			$this->pdo->insert('movies', $data);
			return true;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getById($id)
	{
		try {
			$strsql="SELECT * FROM movies WHERE Id= :Id";
			$array =['Id'=>$id];
			$query=$this->pdo->select($strsql,$array);
			return $query;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function editMovie($data)
	{
		try {
			$strWhere = 'Id=' . $data['id'];
			$this->pdo->update('movies', $data, $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function deleteMovie($data)
	{
		try {
			$strWhere = 'Id = ' . $data['Id'];
			$this->pdo->delete('movies', $strWhere);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(Id) as Id FROM movies";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
	}
	
	public function saveCategoryMovie($arrayCategories, $lastIdMovie)
    {
        try {
            foreach ($arrayCategories as $category) {
                $data = [
                    'movie_id'      =>  $lastIdMovie,
                    'category_id'   =>  $category["Id"]
                ];

                $this->pdo->insert('category_movie', $data);
            } 

            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }
}
