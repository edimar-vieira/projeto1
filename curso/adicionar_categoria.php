<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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

    <div class="container" style="margin-top:40px;width: 500px">
          <div style="text-align: right">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
          <h4>Cadastro de Categoria</h4>
          <form action="_inserir_categoria.php" method="post">
               <label>Categoria</label>
               <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria">
               </div>
               <div style="text-align: right">
               <button type="submit" id="botao" class="btn btn-primary bt-sm">Cadastrar</button>
               </div> 

          </form>
        </div>  




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
</body>
</html>