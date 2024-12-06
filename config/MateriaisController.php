<?php

require_once "repository/materiaisRepositoryPDO.php";
require_once "material.php";

class MaterialController
{
    public function save($request)
    {
        $materiaisRepository = new MateriaisRepositoryPDO();
        $material = (object)$request;

        // Gerenciar upload de arquivos
        $upload = $this->saveFiles($_FILES);

        if (gettype($upload) == "string") {
            $material->arquivo = $upload; // Define o caminho do arquivo salvo
        } else {
            $_SESSION["msg"] = "Erro ao fazer upload do arquivo.";
            header("Location: /cadastro");
            exit;
        }

        // Salvar no repositório
        if ($materiaisRepository->salvar($material)) {
            $_SESSION["msg"] = "Material cadastrado com sucesso!";
        } else {
            $_SESSION["msg"] = "Erro ao cadastrar o material.";
        }

        header("Location: /cadastro");
    }

    private function saveFiles($file)
    {
        $filesDir = "pag/files/"; // Diretório para salvar arquivos
        if (!is_dir($filesDir)) {
            mkdir($filesDir, 0777, true); // Cria o diretório se não existir
        }

        $filePath = $filesDir . basename($file["files"]["name"]);
        $fileTmp = $file["files"]["tmp_name"];

        // Verifica e realiza o upload
        if (move_uploaded_file($fileTmp, $filePath)) {
            return $filePath; // Retorna o caminho do arquivo salvo
        } else {
            return false; // Retorna falso em caso de falha
        }
    }
}
