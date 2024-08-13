<?php
/*
class Database{

    private $host = 'localhost';
    private $db_name = 'Getting_books';
    private $username = 'root';
    private $password = '';
    public $conn;


    public function getConnection() {
        $this->conn = null;
        try{

            $this->conn = new PDO('mysql:host='. $this->host. ';dbname='. $this->db_name, $this->username, $this->password);


            $this->conn->exec('set names utf8');
        } catch(PDOException $exception) {
            echo 'Connection error:' .$exception->getMessage();
        }
        return $this->conn;
    }
}*/


class Database {
    private $host = 'localhost';
    private $dbName = 'Getting_books';
    private $username = 'root';
    private $password = '';

    public function getConnection() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $conn = new PDO($dsn, $this->username, $this->password, $options);
            $conn->exec('set names utf8');
            return $conn;
        } catch (PDOException $e) {
            // Trate a exceção aqui, por exemplo, registrando o erro ou lançando uma nova exceção
            throw new Exception("Erro de conexão com o banco de dados: " . $e->getMessage());
        }
    }
}

?>