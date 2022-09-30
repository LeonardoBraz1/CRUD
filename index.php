<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=cadastro">Cadastra cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=lista">Lista de clientes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
           <?php
           include("configuration/banco.php");
           switch(@$_REQUEST["page"]){
              case "cadastro";
                include("./views/cadastraCliente.php");
              break;
              case "lista";
                include("./views/listaDeClientes.php");
              break;
              case "salvar";
                include("./models/salvarClienteS.php");
              break;
              case "editar";
                include("./views/editarCliente.php");
              break;
              
              default;
               print "<h1>Bem vindo!</h1>";
            }
           ?>
        </div>
       </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
