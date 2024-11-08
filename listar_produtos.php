<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/12f09155be.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container" style="margin-top: 40px" >

<div style="text-align: right">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

<h3>Lista de produtos</h3>
<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">fornecedor</th>
      <th scope="col"> Ação</th>

    </tr>
  </thead>
  
    
        <?php
             include 'conexao.php';
             $sql = "SELECT * FROM `estoque`";
             $busca = mysqli_query($conexao,$sql);
             while ($array = mysqli_fetch_array($busca)) {

                  $id_estoque = $array['id_estoque'];
                  $nroproduto = $array['nroproduto'];
                  $nomeproduto = $array['nomeproduto'];
                  $categoria = $array['categoria'];
                  $quantidade = $array['quantidade'];
                  $fornecedor = $array['fornecedor'];
                ?>  
      <tr>
             

      <td><?php echo $nroproduto ?></td>
      <td><?php echo $nomeproduto ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $fornecedor ?></td>
            <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a></td>
            <td><a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash-can"></i></i>&nbsp;Excluir</a></td>

      </tr>

      <?php } ?>


    </tr>

</table>

    

</div>




     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>