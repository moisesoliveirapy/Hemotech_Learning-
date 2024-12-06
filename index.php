<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./config/MateriaisController.php";

switch ($rota) {
    case "/":
        require "views/login.php";
        break;
    case "/home":
        require "views/home.php";
        break;
    case "/cadastro":
        if($metodo == "GET") require "views/cadastro.php";
        if($metodo == "POST") {
            $controller = new MaterialController();
            $controller->save($_REQUEST);
        };
        break;
    case "/enfermagem":
        require "views/enfermagem.php";
        break;
    case "/faturamento":
        require "views/faturamento.php"; 
        break;
    case "/financeiro":
        require "views/financeiro.php"; 
        break;
    case "/sistema_de_informacao":
        require "views/sistema_de_informacao.php"; 
        break;
    case "/higienizacao":
        require "views/higienizacao.php"; 
        break;
    case "/reuso":
        require "views/reuso.php"; 
        break;
    case "/recepcao":
        require "views/recepcao.php";
        break;
    case "/medicina":
        require "views/medicina.php"; 
        break;
    case "/contabilidade":
        require "views/contabilidade.php"; 
        break;
    case "/administracao":
        require "views/administracao.php"; 
        break;
    case "/tasy":
        require "views/tasy.php"; 
        break;
    case "/qualiex":
        require "views/qualiex.php"; 
        break;
    case "/neovero":
        require "views/neovero.php";
        break;
    case "/weknow":
        require "views/weknow.php";
        break;
    default:
        require "views/404.php"; // Página 404 se nenhuma rota corresponder
        break;
}


?>