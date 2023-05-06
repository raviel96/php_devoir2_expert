<?php 

namespace App\models;

use PDO;

class Database {
   
    public function __construct() {

    }

        /**
     * Connect to the database and create tables
     * @param $host
     * @param $user 
     * @param $password
     * @param $dbname
     * 
     * @return PDO
     */
    public static function connexion(string $host, string $user, string $password, string $dbname): PDO {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $pdo = new PDO($dsn, $user, $password, $options);

            return $pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}