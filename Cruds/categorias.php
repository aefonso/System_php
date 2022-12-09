<?php 
session_start();
if(isset($_SESSION["apelido"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Categorias</h1>
  <h3><a href="">Adicionar</a></h3>

  <?php

    include '../conexao_bd.php';

    $conn = conectar();

    $sql = "SELECT * FROM Categorias order by nome";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result));
        echo $row["nome"];
        echo "</br>";

    }else{
      echo"Nenhuma categoria cadastrada";
    }


  ?>

</body>
</html>
<?php

}else{
  header('Location: login.php');
}
?>