<?php

//criando as variavéis

$nomecompleto=$_POST['nomecompleto_admin'];
$cidade_admin=$_POST['cidade_admin'];
$estado_admin=$_POST['estado_admin'];
$email_admin=$_POST['email_admin'];
$senha_admin=$_POST['senha_admin'];
$senhaconf_admin=$_POST['senhaconf_admin'];
$vinculo_admin=$_POST['vinculo_Fatec'];

//conectando com o banco 
include_once('conexao.php');




//fechando a conexão do banco de dados 
//mysqli_close($conn);







?>