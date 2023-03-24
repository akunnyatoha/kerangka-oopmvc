<?php

class Database 
{
    // private $DB_HOST = DB_HOST;
    // private $DB_USERNAME = DB_USERNAME;
    // private $DB_PASSWORD = DB_PASSWORD;
    // private $DB_NAME = DB_NAME;

    // private $dbh; //database handler
    // private $stmt; //statement

    // public function __construct()
    // {
    //     //connection db
    //     $dsn = 'mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME;

    //     $option = [
    //         PDO::ATTR_PERSISTENT => true,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     ];

    //     try {
    //         $this->dbh = new PDO($dsn, $this->DB_USERNAME, $this->DB_PASSWORD, $option);
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function query($query)
    // {
    //     $this->stmt = $this->dbh->prepare($query);
    // }

    // public function bind($param, $value, $type = null)
    // {
    //     if(is_null($type)) {
    //         switch(true) {
    //             case is_int($value) :
    //                 $type = PDO::PARAM_INT;
    //                 break;
    //             case is_bool($value) :
    //                 $type = PDO::PARAM_BOOL;
    //                 break;
    //             case is_null($value) :
    //                 $type = PDO::PARAM_NULL;
    //                 break;
    //             default :
    //                 $type = PDO::PARAM_STR;
    //         }
    //     }

    //     $this->stmt->bindValue($param, $value, $type);
    // }

    // public function execute()
    // {
    //     $this->stmt->execute();
    // }

    // public function resultSet()
    // {
    //     $this->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    // public function single()
    // {
    //     $this->execute();
    //     return $this->stmt->fetch(PDO::FETCH_ASSOC);
    // }

    // public function rowCount()
    // {
    //     return $this->stmt->rowCount();
    // }
}