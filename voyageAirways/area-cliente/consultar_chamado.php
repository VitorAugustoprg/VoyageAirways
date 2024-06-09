
<html>
  <head>
    <meta charset="utf-8" />
    <title>Chamados</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <header>
        <nav class="navbar"  style="background-color: #163359;">
          <div class="container ">
            <a class="navbar-brand d-flex flex-row align-items-center" href="#">
              <img src="../img/logoBranco.png" alt="Logo" width="30">
              <p class="text-white text-center d-flex fw-bold m-0 p-2">Voyage Airways</p>
            </a>  
      
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-white fw-light" href="logoff.php">SAIR</a>
                </li>
              </ul>
          </div>
        </nav>
      </header>


    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>

            
      <div class="card-body">
              
              <?php foreach($chamados as $chamado){ ?>

              <?php  
               $chamado_dados = explode('#', $chamado);

              if(count($chamado_dados) < 3){
                continue;
              }

            ?>
            
            <div class="card-body">
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6>
                  <p class="card-text"><?= $chamado_dados[2]?></p>

                </div>
              </div>

              <?php } ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>