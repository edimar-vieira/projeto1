<?php

include 'conexao.php'; //incluir a pasta da conexao.php


$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto']; //
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao,$sql);



?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container" style="width: 500px;margin-top: 20px">
<center>
<h4>Produto Adicionado com sucesso!</h4>
</center>
<div style="padding-top: 20px">
    <center>
<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
    </center>
</div>
</div>