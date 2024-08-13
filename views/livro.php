<?php

class Livro {

    private $conn; // Conexão com o banco de dados
    private $table_name = 'Livros'; // Nome da tabela

    public $id; // Identificador do livro
    public $titulo; // Título do livro
    public $autor; // Autor do livro
    public $genero; // Gênero do livro

    public function __construct($db) {
        $this->conn = $db; // Atribui a conexão ao objeto
    }

    // Cria um novo livro
    public function create() {
        // Prepara a consulta SQL
        $query = "INSERT INTO " . $this->table_name . " SET titulo=:titulo, autor=:autor, genero=:genero";

        // Limpa os dados de entrada
        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->autor = htmlspecialchars(strip_tags($this->autor));
        $this->genero = htmlspecialchars(strip_tags($this->genero));

        // Vincula os parâmetros à consulta
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero', $this->genero);

        // Executa a consulta
        if ($stmt->execute()) {
            return true; // Retorna verdadeiro se a inserção for bem-sucedida
        }

        return false; // Retorna falso se ocorrer algum erro
    }

    // Lê todos os livros ou um livro específico
    public function read($id = null) {
        if ($id) {
            // Lê um livro específico
            $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id);
        } else {
            // Lê todos os livros
            $query = "SELECT * FROM " . $this->table_name;
            $stmt = $this->conn->prepare($query);
        }

        $stmt->execute();
        return $stmt; // Retorna o resultado da consulta
    }

    // Atualiza um livro existente
    public function update() {
        // Prepara a consulta SQL
        $query = "UPDATE " . $this->table_name . " SET titulo=:titulo, autor=:autor, genero=:genero WHERE id=:id";

        // Limpa os dados de entrada
        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->autor = htmlspecialchars(strip_tags($this->autor));
        $this->genero = htmlspecialchars(strip_tags($this->genero));

        // Vincula os parâmetros à consulta
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':genero', $this->genero);
        $stmt->bindParam(':id', $this->id);

        // Executa a consulta
        if ($stmt->execute()) {
            return true; // Retorna verdadeiro se a atualização for bem-sucedida
        }

        return false; // Retorna falso se ocorrer algum erro
    }

    // Deleta um livro
    public function delete() {
        // Prepara a consulta SQL
        $query = "DELETE FROM " . $this->table_name . " WHERE id=:id";

        // Vincula o parâmetro à consulta
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $this->id);

        // Executa a consulta
        if ($stmt->execute()) {
            return true; // Retorna verdadeiro se a deleção for bem-sucedida
        }

        return false; // Retorna falso se ocorrer algum erro
    }
}
?>