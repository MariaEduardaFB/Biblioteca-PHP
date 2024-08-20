<?php
namespace Model;

use db\Database;

class Biblioteca {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function emprestarLivro(Livro $livro, Estudante $estudante): bool{

        $sql = "INSERT INTO emprestimos (livro_id, estudante_id, data_emprestimo) VALUES (?,?, NOW())";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("ii", $livro->getId(), $estudante->getMatricula());
        $stmt-> execute();

        return true;
    }

    public function devolverLivro(Livro $livro, Estudante $estudante): bool {

        $sql = "DELETE FROM emprestimos WHERE livro_id = ? AND esudante_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("ii", $livro->getId(), $estudante->getMatricula());
        $stmt-> execute();

        return true;
    }

    public function livrosEmprestados(Estudante $estudante): bool {
        $sql = "SELECT 1.8 FROM livros 1 INNER JOIN emprestimos e ON 1.id = e.livro_id
                WHERE e.estudante_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("ii", $livro->getId(), $estudante->getMatricula());
        $stmt-> execute();

        $result = $stmt->get_result();
        $livros = [];
        while ($row = $result->fetch_assoc()) {
            $livro = new Livro($row['id'], $row['titulo'], $row['autor']);
        }

        return $livros

    }
}



?>
