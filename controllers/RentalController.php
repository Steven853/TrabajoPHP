<?php

require 'models/User.php';
require 'models/Statuses.php';
require 'models/Rental.php';
require 'models/Movies.php';
/**
 * 
 */
class RentalController
{

	private $userModel;
	private $statusesModel;
	private $rental;
	private $movieModel;

	public function __construct()
	{
		try{
			$this->userModel = new User;
			$this->statusesModel = new Statuses;
			$this->rental = new Rental;
			$this->movieModel = new Movies;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function index()
	{
		require 'views/layout.php';
		$rentals = $this->rental->getAll();
		$statuses = $this->statusesModel->getAll();
		$users = $this->userModel->getAll();
		$movies = $this->movieModel->getAll();
		require 'views/rental/list.php';
	}

	public function save()
	{
		$dataRental = [
            'start_date'    => $_POST['start_date'],
			'end_date'   	=> $_POST['end_date'],
			'total' 		=> $_POST['total'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => 1
		];
		
		$arrayMovies = isset($_POST['movies']) ? $_POST['movies'] : [];        

		if(!empty($arrayMovies)) {
           
            $respRental = $this->rental->newRental($dataRental);

            
			$lastIdRental = $this->rental->getLastId();
			
            $respMovieRental = $this->rental->saveMovieRental($arrayMovies, $lastIdRental[0]->id);

        } else {
            $respRental         = false;
            $respMovieRental  	= false;            
		}
		
		$arrayResp = [];
		
		if($respRental == true && $respMovieRental == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Renta Creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando la Renta"  
            ];
		}
		echo json_encode($arrayResp);
        return; 
    }
    
	public function update()
	{
		if (isset($_POST)) {
			$this->rental->editRental($_POST);
			header('Location: ?controller=rental');
		} else {
			echo "Error, no se realizo";
		}
	}
	
	public function delete()
	{
		$this->rental->deleteRental($_REQUEST);
		header('Location: ?controller=rental');
	}

	
}
