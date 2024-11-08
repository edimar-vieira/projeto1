<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

       <style type="text/css">
          
             #tamanhoContainer {
                width: 500px;
             }

             #botao {

                background-color: #FF1168;
                color: #ffffff;

             }

       </style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">

         <div style="text-align: right">
      <a href="index.html" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

<h4>Formulário de Cadastro</h4>
<form action="_inserir_produto.php" method="post" style="margin-top: 20px">
    <div class="form-group">
        <label >Nro Produto</label>
       <input type="number" class="form-control" id="nroproduto" name="nroproduto" placeholder="Insira o numero do produto">
    
    </div>
    <div class="form-group">
      
        <label >Nome Produto</label>
         <input type="text" class="form-control" id="nomeproduto" name="nomeproduto" placeholder="Insira o nome do produto">
    </div>

     <div class="form-group">
       <label>Categoria</label>
       <select class="form-control" id="categoria"name="categoria">
         
         <?php
         include 'conexao.php';
         $sql = "SELECT * FROM categoria order by nome_categoria ASC";
         $buscar = mysqli_query($conexao,$sql);

         while ($array = mysqli_fetch_array($buscar)) {
              $id_categoria = $array['id_categoria'];
              $nome_categoria = $array['nome_categoria'];

         
         
         ?>
         <option><?php echo $nome_categoria ?></option>
      
         <?php } ?> 
         </select>
      </div>

      <div class="form-group">
         
        <label >Quantidade</label>
       <input type="number" class="form-control" id="quantidade"name="quantidade" placeholder="Insira a quantidade do produto">
       
     </div>

  

   <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" id="fornecedor"name="fornecedor">

      <?php
       include 'conexao.php';
       $sql2  = "SELECT * FROM fornecedor";
       $buscar2 = mysqli_query($conexao,$sql2);

       while ($array2 = mysqli_fetch_array($buscar2)) {
         $id_forn = $array2['id_forn'];
         $nome_forn = $array2['nome_forn'];
          ?>

     <option value="<?php echo $id_forn; ?>"><?php echo $nome_forn; ?></option>
        <?php } ?>
      
      
      
    </select>
    </div>
    <div style="text-align: right;">
       
       <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
    </div>
    
</form>
</div>






     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>