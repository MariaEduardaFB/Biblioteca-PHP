<?php
namespace Controller;

include_once '../Model/BiBlioteca.php';
include_once '../Repository/BiBliotecaRepository.php';
require_once '../db/Database.php';

use Model\Biblioteca;
use Repository\BibliotecaRepository;
use db\Database;


class AutorController {
    private $repository;

    public function __construct() {
        $this->repository = new BibliotecaRepository();
    }

    public function cadastrarAutor($nome, $nacionalidade) {
        $autor = new Biblioteca(null, $nome, $nacionalidade);
        $this->repository->save($autor);
    }

    public function editarAutor($id, $nome, $nacionalidade) {
        $autor = $this->repository->findById($id);
        if ($autor) {
            $autor->setNome($nome);
            $autor->setNacionalidade($nacionalidade);
            $this->repository->save($autor);
        }
    }

    public function excluirAutor($id) {
        $this->repository->delete($id);
    }

    public function listarAutores() {
        return $this->repository->findAll();
    }

    public function getAutorById($id) {
        return $this->repository->findById($id);
    }
}
?>
