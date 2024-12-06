<?php

require_once "repository/conexao.php";

class MateriaisRepositoryPDO{


    private $conexao;

    public function __construct(){
        $this->conexao = conexao::criar();
    }
   


    public function listarTodos(string $categoria): array
    {
        $materiaisLista = array();
        // Consulta os materiais no banco de dados
        $sql = "SELECT * FROM materiais where categoria = '$categoria'";
        $materiais = $this->conexao->query($sql);
        while ($material = $materiais->fetchObject()) {
            array_push($materiaisLista, $material);
        }

        return $materiaisLista;
    }

    public function salvar($material): bool
    {
        $sql = "Insert Into materiais(titulo, tipo, categoria, arquivo) 
    Values(:titulo, :tipo, :categoria, :arquivo)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":titulo", $material->titulo, PDO::PARAM_STR);
        $stmt->bindValue(":tipo", $material->tipo, PDO::PARAM_STR);
        $stmt->bindValue(":categoria", $material->categoria, PDO::PARAM_STR);
        $stmt->bindValue(":arquivo", $material->arquivo, PDO::PARAM_STR);

        return $stmt->execute();
    }

    }