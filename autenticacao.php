<?php 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


if($usuario=="aluno" && $senha=="123"){
  header('Location: perfil.php');
}else{
  header('Location: login.php');
}

?>