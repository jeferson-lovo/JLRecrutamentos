<?php
session_start();

# base de dados 
include 'nome da pagina';

#Conteudo da pagina 
if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    } else{
        $pagina = 'oportunidades';
    }
} else{
    $pagina = 'home.blade.php'
};

switch($pagina){
    case 'oportunidades'        :include 'view/oportunidades.blade.php'
}
#<!DOCTYPE html>
#<html lang="pt-br">
#<head>
#    <meta charset="UTF-8">
#    <meta name="viewport" content="width=device-width, initial-scale=1.0">
#    <title>JL Recrutamentos</title>
#</head>
#<body>
#    <h1>JL Recrutamentos</h1>
#</body>
#</html>