<?php
require_once "validador_acesso.php";

?>
<?php


if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO') {
  require_once "../componentes/header-cont-nologado.php";
} else {
  require_once "../componentes/header-cont-logado.php";
}
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Contato</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título (motivo do contato)</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Documento</option>
                        <option>Passagem</option>
                        <option>Viagem</option>
                        <option>Data</option>
                        <option>Aeroporto</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3" placeholder="Forneça uma descrição exata do seu contato."></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg border btn-warning btn-block text-white" href="index.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg  text-white btn-block" type="submit"style="background-color: #5984a4">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>