<?php

namespace App;
use PDO;

class Controller {

	protected $pdo;

	public function __construct() {
		$this->pdo = new PDO('mysql:host=localhost;dbname=mvc_db', 'root', 'root');
	}
	
	protected function view($filename = "", $data = []) {
		extract($data);
		require_once "../view/".$filename.".php";
	}
}