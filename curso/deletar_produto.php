<?php

include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container" style="width: 400px">
<center>
      <h3>Deletado com sucesso</h3>
      <div style="margin-top: 10px">
      <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</center>




    </div>