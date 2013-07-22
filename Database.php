<?php

class Database extends PDO{

	private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
   
    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'penilaian';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass ); 
    }
}

$config = array(
    'db_type' => 'mysql',
    'db_host' => 'localhost',
    'db_name' => 'penilaian',
    'db_username' => 'root',
    'db_password' => ''
);
 
$db = new Database();


