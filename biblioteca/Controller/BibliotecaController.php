<?php
namespace Controller;

include_once '../Model/BiBlioteca.php';
include_once '../Repository/BiBliotecaRepository.php';
require_once '../db/Database.php';

use Model\Biblioteca;
use Repository\BibliotecaRepository;
use db\Database;


class BibliotecaController {

    

    private $repository;

    public function __construct(){
        $this->repository = new BibliotecaRepository();
    }

    public function cadastrarBiblioteca($nome, $endereco, $telefone){
        $biblioteca = new Biblioteca(null, $nome, $endereco, $telefone);
        $this->repository->save($biblioteca);
    }
    public function editarBiblioteca($id, $nome, $endereco, $telefone){
        $biblioteca = $this->repository->findById($id);
        if($biblioteca){
            $biblioteca->setNome($nome);
            $biblioteca->setEndereco($endereco);
            $biblioteca->setTelefone($telefone);
            $this->repository->save($biblioteca);
        }
    }
    public function excluirBiblioteca($id){
        return $this->repository->delete($id);
    }

    public function getBibliotecaById($id){
        return $this->repository->findById($id);
    }

    public function listarBibliotecas($id){
        return $this->repository->findAll($id);
    }


    
}
?>
