<?php

$menuCadastro =  ["Cliente", "Fornecedor", "Usuario", "Produtos", "Perfil de Acesso", "Produtos"];

$menuRelatorio =  ["Cliente", "Faturamento", "Produtos"];

require_once("DataRequest.php");

// Instância 
$objeto = new DataRequest();

$gerarAleatorio = rand(2, 9);

echo $gerarAleatorio;
