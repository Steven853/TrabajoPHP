<?php

require 'models/User.php';
require 'models/Statuses.php';
require 'models/Movies.php';
require 'models/Categories.php';

/**
 * 
 */
class MovieController
{

	private $userModel;
	private $statusesModel;
	private $movieModel;
	private $categoryModel;

	public function __construct()
	{
		try {
			$this->userModel = new User;
			$this->statusesModel = new Statuses;
			$this->movieModel = new Movies;
			$this->categoryModel = new Category;
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
	}

	public function index()
	{
		require 'views/layout.php';
		$movies = $this->movieModel->getAll();
		$users = $this->userModel->getAll();
		$statuses = $this->statusesModel->getAll();
		$categories = $this->categoryModel->getAll();
		require 'views/movie/list.php';
    }
    
    public function new()
    {
        $users = $this->userModel->getAll();
        $categories = $this->categoryModel->getAll();
        require 'views/layout.php';
        require 'views/movie/new.php';
    }

	public function save()
    {
        //Organizar en un array los datos de la tabla movie
        $dataMovie = [
            'name'          => $_POST['name'],
            'description'   => $_POST['description'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => 1
        ];

        //Array de categorias
        $arrayCategories = isset($_POST['categories']) ? $_POST['categories'] : [];        

        if(!empty($arrayCategories)) {
            //Inserción de la Tabla Movie
            $respMovie = $this->movieModel->newMovie($dataMovie);

            //Obtener el ultimo ID registrado
            $lastIdMovie = $this->movieModel->getLastId();
            //Inserción de la Tabla category_movie
            $respCategoryMovie = $this->movieModel->saveCategoryMovie($arrayCategories, $lastIdMovie[0]->Id);

        } else {
            $respMovie          = false;
            $respCategoryMovie  = false;            
        }

        $arrayResp = [];

        if($respMovie == true && $respCategoryMovie == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Pelicula Creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando la Pelicula"  
            ];
        }

        echo json_encode($arrayResp);
        return;

    }
	
	public function edit()
    {
        if(isset($_REQUEST['Id'])){
            $id=$_REQUEST['Id'];

            $data=$this->movieModel->getById($id);
            $users=$this->userModel->getAll();
            $statuses=$this->statusesModel->getAll();
            $categories = $this->categoryModel->getAll();            
            require 'views/layout.php';
            require 'views/movies/editModal.php';
        }else{
            echo "Error, no se realizo.";
        }
    }

	public function update()
	{
		if (isset($_POST)) {
			$this->movieModel->editMovie($_POST);
			header('Location: ?controller=movie');
		} else {
			echo "Error, no se realizo";
		}
    }
    
	public function delete()
	{
		$this->movieModel->deleteMovie($_REQUEST);
		header('Location: ?controller=movie');
	}

	
}

?>
