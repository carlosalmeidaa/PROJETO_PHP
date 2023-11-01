<!DOCTYPE HTML>
<html lang="pt-br">   
    <head>   
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
    <title>Cadastro Colaborador</title>
    </head>
<body>
 <main>  
<div class="container py-5 h-50">
<div class="row d-flex align-items-center justify-content-center h-50 ">
  
<div class="col">
   <h5>Recursos Humanos - Cadastro de Colaborador</h5>
    <div class="card h-100 text-center">
        <div class="card-body">
            <h5 class="card-title" >Cadastrar um Colaborador</h5>
            <!-- Inicio do Form--> 
            <form class="row g-3" action="colaboradorView.php" method="POST">
            <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Id</label>
    <input type="text" class="form-control" name="id">
            </div>
  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  </br>
</form>
                   
  
</div> <!-- Fim do card-body--> 
</div><!--Fim do card-->
</div><!--Fim da 1 coluna-->

</div><!--Fim da row-->

</div><!--Fim do container-->


 </main>
</body>
</html>