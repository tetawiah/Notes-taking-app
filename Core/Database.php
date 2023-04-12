<?php

namespace Core;
use PDO;

class Database {
    public $connection;
    public $statement;
    function __construct($config,$username='root',$password='',){

        $dsn =("mysql:" . http_build_query($config,'', ';'));

        // $dsn = "mysql:host={$config['host']};port ={$config['port']};dbname={$config['dbname']};charset ={$config['charset']};";
		$this->connection = new PDO($dsn, $username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($askdb,$params=[]) {
	// connect to mysql database
		$this->statement = $this->connection->prepare($askdb);
		$this->statement->execute($params);

        return $this;

    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function fetch(){
        return $this->statement->fetch();
    }
    
    public function findorAbort(){
        $result = $this->fetch();
        if (!$result) {
            abort();
        } 
        return $result;
    }
}



