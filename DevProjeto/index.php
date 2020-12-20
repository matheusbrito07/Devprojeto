<?php include("conexao.php"); 
$consulta = "SELECT *FROM produtos";


    $con = $mysqli->query($consulta);

    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevProjeto</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg  navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DevProject</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mx-auto" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-item mx-auto nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      
    </div>
  </div>
</nav>

<h1> DATABASE & Tabelas MYPHPadmin </h1>

    <h1> Tabela de Produtos </h1>

        <div class=main-tabela-produto>
        <table class="tabela-produto">
            <tr>
                <td>Nome do produto</td>
                <td>Preco do produto</td>
                <td>Descricao do produto</td>
            </tr>
       <?php while($dadosproduto = $con->fetch_array()){ ?>
            
            <tr>
                <td><?php echo $dadosproduto["item_produto"];?></td>
                <td><?php echo $dadosproduto["preco_produto"];?>R$</td>
                <td><?php echo $dadosproduto["desc_produto"];?></td>
            </tr>
           
        <?php } ?>
          
        </table>
       </div>
        
        
        <div class="segundaTabela">
        <h1> Tabela de Cliente </h1>
       </div>

            <?php
                $cliente = "SELECT *FROM cliente";
                $con = $mysqli->query($cliente);
            ?>

        <div class=main-tabela-cliente>
        <table class="tabela-cliente">
        
            <tr>
                <td>Id do cliente</td>
                <td>Nome do cliente</td>
                <td>Sexo do cliente</td> 
            </tr>
            <?php while($dadoscliente = $con->fetch_array()){ ?>
                <tr>
                <td><?php echo $dadoscliente["id_cliente"];?></td>
                <td><?php echo $dadoscliente["nome_cliente"];?></td>
                <td><?php echo $dadoscliente["sexo_cliente"];?></td>
                </tr>      

            <?php } ?>
        </table>

        </div>

    <h1> Consulta VIEW </h1>

            <?php
                $view = "SELECT *FROM minhaview";
                $con = $mysqli->query($view);
            ?>

    <div class=main-tabela-view>
        <table class="tabela-view">
           
            <tr>
                <td>Id do cliente</td>
                <td>Nome do cliente</td>
                <td>Sexo do cliente</td>
                    
            </tr>
            <?php while($dadosDaview = $con->fetch_array()){ ?>
            <tr>
            <td><?php echo $dadosDaview["id_cliente"];?></td>
            <td><?php echo $dadosDaview["nome_cliente"];?></td>
            <td><?php echo $dadosDaview["sexo_cliente"];?></td>
            </tr>      
            <?php } ?>
        </table>
     

    </div>

    <footer class="bg-primary justify-content-center text-white text-center text-lg-start">
  
        <div class="container p-4">
    
         <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 justify-content-center mx-auto !important">
                <h5 class="text-uppercase"></h5>
                     <p>
                         Exibindo informações do banco de dados, das tabelas Cliente,Produto e view.
                    </p>
                </div>
            </div>  
        </div>
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href="https://www.recodepro.org.br/">Recodepro.org.br</a>
  </div>
  
</footer>

</body>
</html>