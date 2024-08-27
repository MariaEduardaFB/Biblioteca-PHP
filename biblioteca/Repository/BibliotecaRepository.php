<?php

namespace Repository;

require_once '../db/Database.php';
include_once '../Model/Biblioteca.php';
use Model\Biblioteca;
use db\Database;

class BibliotecaRepository {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function save(Biblioteca $biblioteca){
        $conn = $this -> db->getConnection();

        if ($biblioteca->getId()) {
            $sql = "UPDATE bibliotecas SET nome=?, endereco=?, telefone=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $biblioteca->getNome(), $biblioteca->getEndereco(), $biblioteca->getTelefone(), $biblioteca->getId());
        } else {
            $sql = "INSERT INTO bibliotecas (nome, endereco, telefone) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $biblioteca->getNome(), $biblioteca->getEndereco(), $biblioteca->getTelefone());
        }
    
        $stmt->execute();
        $stmt->close();

   
    }

    public function delete($id){
        $conn = $this -> db->getConnection();

        $sql = "DELETE FROM bibliotecas WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        
    }

    public function findById($id){
        $conn = $this -> db->getConnection();

        $sql = "SELECT id, nome, endereco, telefone FROM bibliotecas WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $endereco, $telefone);

        if ($stmt->fetch()) {
            $biblioteca = new Biblioteca($id, $nome, $endereco, $telefone);
            $stmt->close();
            return $biblioteca;
        }

        $stmt->close();
        return null;
        
    }

    public function findAll() {
        $conn = $this->db->getConnection();
    
        $sql = "SELECT id, nome, endereco, telefone FROM bibliotecas";
        $result = $conn->query($sql);
    
        $bibliotecas = [];
        while ($row = $result->fetch_assoc()) {
            $bibliotecas[] = new Biblioteca($row['id'], $row['nome'], $row['endereco'], $row['telefone']);
        }
    
        $result->free();
        return $bibliotecas;
    }

    public function __destruct(){
        $conn = $this -> db->closeConnection();
    
    }

}
?>
