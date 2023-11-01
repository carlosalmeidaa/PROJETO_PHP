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
    <title>Aula PHP - Revisão</title>
    </head>
<body>
 <main>  
<div class="container py-5 h-50">
<div class="row d-flex align-items-center justify-content-center h-50 ">
  
<div class="col">
    <h5>Recursos Humanos - Cálculo de Folha de Pagamento</h5>
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">Como se calcula uma folha de Pagamento</h5>
            <ol class="card-text">
                <li> Inserimos o valor do Salario Bruto.
                <li> Calculamos os valores dos Descontos.
                <li> Calculamos os valores dos Adicionais.
                <li> Calculamos o valor TOTAL A RECEBER.
                <li> Na linguagem mais tecnica são os Proventos - descontos.
            </ol>          
  
</div> <!-- Fim do card-body--> 

</div><!--Fim do card-->
</div><!--Fim da 1 coluna-->

<div class="col">
    <h5>Faça seu Login para calcular a Folha</h5>
    <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">Use o login : Aluno e a senha : 123456 para logar no Sistema de Folha</h5>
            <!--Inicio do form--> 
            <form class="row d-flex align-items-bottom justify-content-center" 
            action="valida.php" method="POST">
              <!--Inicio da imagem-->
            <div class="col-md-4 ">
            <img src="assets/rh.svg" alt="logo" width="200" height="200" style="vertical-align:middle" class="img-fluid" >
            </div> <!--Fim da imagem-->
            <div class="col-auto">
              <label for="#">Login</label>
              <input type="text" class="form-control" name="login"><br>
              <label for="#">Senha</label>
              <input type="password" class="form-control" name="senha"><br>
              <button type="submit" class="btn btn-primary mb-3">Logar</button>
              </div>
              </div><!--Fim do card-body--> 
            </form><!--Final do form-->
            
</div><!--Fim do card-body-->    
</div><!--Fim do card--> 
</div><!--Fim da 2 coluna-->
</div><!--Fim da row-->
</div><!--Fim do container-->


 </main>
</body>
</html>