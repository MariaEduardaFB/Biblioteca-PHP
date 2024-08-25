namespace Model;

use db\Database;

class Biblioteca {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function emprestarLivro(Livro $livro, Estudante $estudante): bool {
        // Verificar se o livro já está emprestado (adicione sua lógica aqui)
        // ...

        $sql = "INSERT INTO emprestimos (livro_id, estudante_id, data_emprestimo) VALUES (?, ?, NOW())";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("ii", $livro->getId(), $estudante->getMatricula());

        try {
            $stmt->execute();
            return true;
        } catch (\PDOException $e) {
            echo "Erro ao emprestar livro: " . $e->getMessage();
            return false;
        }
    }

    public function devolverLivro(Livro $livro, Estudante $estudante): bool {
        // Verificar se o livro está emprestado para este estudante (adicione sua lógica aqui)
        // ...

        $sql = "DELETE FROM emprestimos WHERE livro_id = ? AND estudante_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("ii", $livro->getId(), $estudante->getMatricula());

        try {
            $stmt->execute();
            return true;
        } catch (\PDOException $e) {
            echo "Erro ao devolver livro: " . $e->getMessage();
            return false;
        }
    }

    public function livrosEmprestados(Estudante $estudante): array {
        $sql = "SELECT l.id, l.titulo, l.autor FROM livros l 
                INNER JOIN emprestimos e ON l.id = e.livro_id 
                WHERE e.estudante_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bind_param("i", $estudante->getMatricula());
        $stmt->execute();

        $result = $stmt->get_result();
        $livros = [];
        while ($row = $result->fetch_assoc()) {
            $livro = new Livro($row['id'], $row['titulo'], $row['autor']);
            $livros[] = $livro;
        }

        return $livros;
    }
}