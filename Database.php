<?php

namespace app;

use mysqli;

class Database{

	private $host = "localhost";
	private $dbUser = "root";
	private $dbPassword = "";
	private $dbName = "oddzialy";

	public $db = null;

    public function __construct(){
		$this->db_connect();
    }
	
	public function __destruct(){
		if ($this->db->connect_errno === null) {
			$this->db->close();
		}
	}

	protected function db_connect() : object {
		$this->db = @new mysqli($this->host, $this->dbUser, $this->dbPassword, $this->dbName);
		if($this->db->connect_errno){
			die('Błąd połączenia: '.$this->db->connect_errno.' Skontaktuj się z administratorem by wyjaśnić błąd...');
		}
		return $this->db;
	}

	public function getData(string $sql) : array {
		$result = $this->db->query($sql);
		$data = $result -> fetch_all(MYSQLI_ASSOC);
		$result->free_result();
		return $data;
	}
}
