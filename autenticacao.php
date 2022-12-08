<?php 
include "conexao_bd.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conn = conectar();

$sql = "SELECT * FROM Usuario WHERE usuario='$usuario' AND senha='$senha'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  header('Location: perfil.php');
}else{
  header('Location: login.php');
}


?>