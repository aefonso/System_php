<?php 

function conectar(){
  $servidor = "localhost";
  $banco = "aluno";
  $usuario = "aluno";
  $senha = "20141134Futsal/";

  $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

  if(!$conn){
    die("Erro:". mysqli_connect_error());
  }else{
    return $conn;
  }
}

function desconectar($conn){
  mysqli_close($conn);
}
?>