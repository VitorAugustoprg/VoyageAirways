<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="icon" href="../img/logoBlack.png">
    <title>Login</title>
</head>
<body class="container mt-5">
 
<section class="container">
<div class="d-flex align-items-center justify-content-center"> 
  
    <div class="row">
      <div class="d-flex justify-content-center align-items-center">
      <div class="col-6">
        <img src="../img/airplane-undraw.svg" alt="">
      </div>

      <div class="col-6 container d-flex justify-content-center align-items-center m-5 border-start border-2 ">
        <form method="post" action="valida_login.php" >
          <div class="d-flex justify-content-center align-items-center flex-column">
          <h1 class="text-center fs-2 fst-italic p-2">Voyage Airways</h1>
          <img src="../img/logoBlack.png" alt="" style="width: 7%; height: 7%;">
        </div>

          <div class="d-flex flex-column p-3">
          <input type="email" name="email" id="email" class="border border-0 border-bottom  p-3 m-2" placeholder="* Email" required>

          <input type="password" name="senha" id="senha" class="border border-0 border-bottom  p-3 m-2 mb-2" placeholder="* Senha" required>

          <?php 
            if(isset($_GET['login']) && $_GET['login'] == 'erro'){
          ?>
          <p class="text-danger m-2">Email ou senha incorreto</p>
          <?php 
          }
          ?>
          <?php 
            if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
          ?>
          <p class="text-danger m-2">Você não tem permissão para acessar o site, faça login!</p>
          <p>
           <?php 
            }
            ?> 
          
          <a href="../area-cliente/cadastro.php" class="text-black m-2 link-underline-dark">Cadastre-se.</a></p>
          <p><a href="#" class="text-black m-2 link-underline-dark">Esqueceu a senha?</a></p>
        </div>

          <div class="d-flex justify-content-center align-items-center">
          <input type="submit" value="Enviar" class="botao  rounded-pill  fs-5 fw-semibold text-white">
        </div>
        </form>
      </div>
    </div>
    </div> 
 
</div>
</section>



</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>