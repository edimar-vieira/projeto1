<?php 

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

       <style type="text/css">
          
             #tamanhoContainer {
                width: 500px;
             }

             #botao {

                background-color: #FF1168;
                color: #ffffff;
                text-align: right;

             }

       </style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
<h4>Formulário de Edição</h4>
<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
<?php

$sql =  "SELECT * FROM `categoria` WHERE id_categoria = $id";
$buscar = mysqli_query($conexao,$sql);
while ($array = mysqli_fetch_array($buscar)) {

                  $id_categoria = $array['id_categoria'];
                  $nomecategoria = $array['nome_categoria'];
                

?>



    <div class="form-group">
        <label >Nome Categoria</label>
         <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>" >
         <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none">
    
    </div>

    

    
    <div style="text-align: right;">
       <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
    </div>
    <?php } ?>
</form>
</div>






     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>