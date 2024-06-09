<?php
  require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="icon" href="../../voyageAirways/imagem/site/logoBlack.png"> <a class="nav-link text-white"href="index.php">
  <title>Passagens</title>
</head>
<body>

  <header id="navbar-passagens">

  <?php 
      require_once '../componentes/header-user.php'
  ?>

  </header> 

  <div class="container m-auto">

      <h1 class="text-center m-4">Passagens</h1>


  

  
  <!-- MODAL ALEMANHA  -->
  <div class="container mb-3">
    <h2 class="mr-4">Europa</h2>
     <div class="row row-cols-4">
       <div class="col-3">
        <div class="card" style="width: 18rem;">
         <img src="../../voyageAirways/imagem/site/modalAlemanha.svg" class="card-img-top h-100" alt="...">
         <div class="card-body">
           <h5 class="card-title fs-3">Alemanha</h5>
           <p class="card-text fs-5 fst-italic">Berlim, Alemanha</p>
           <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Berlim</p>
           <hr>
           <div class="d-flex justify-content-around align-items-center ">
            <p class="fs-3 fw-semibold">R$ 13.070,67</p>
           <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-alemanha" id="btn-comprar">
             Comprar
           </button>
          </div>
         </div>
       </div><!-- Button ALEMANHA modal -->
         
         <div class="modal fade" id="modal-alemanha" tabindex="-1" aria-labelledby="modal-alemanha" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-alemanha">Ofertas de Passagens para <span class="fw-bold">Berlim</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 13.070,67</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
  
               
               </div>
             </div>
           </div>
         </div></div>
          <!-- MODAL ESPANHA-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalEspanha.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Espanha</h5>
          <p class="card-text fs-5 fst-italic">Madrid, Espanha</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Madrid</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 7.867,52</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-espanha" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button ESPANHA modal -->
         
         <div class="modal fade" id="modal-espanha" tabindex="-1" aria-labelledby="modal-espanha" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-espanha">Ofertas de Passagens para <span class="fw-bold">Madrid</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 7.867,52</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
  
              
               </div>
             </div>
           </div>
         </div></div>
           <!-- MODAL FRANÇA -->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalFranca.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">França</h5>
          <p class="card-text fs-5 fst-italic">Paris, França</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> França</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 7.452,00</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-franca" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button FRANÇA modal -->
         
         <div class="modal fade" id="modal-franca" tabindex="-1" aria-labelledby="modal-franca" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-franca">Ofertas de Passagens para <span class="fw-bold">Paris</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 7.452,00</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
  
               </div>
             </div>
           </div>
         </div></div>
         <!-- MODAL GRÉCIA-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalGrecia.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Grécia</h5>
          <p class="card-text fs-5 fst-italic">Zakynthos, Grécia</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Zakynthos</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 8.618,31</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-grecia" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button GRÉCIA modal -->
     
         <div class="modal fade" id="modal-grecia" tabindex="-1" aria-labelledby="modal-grecia" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-grecia">Ofertas de Passagens para <span class="fw-bold">Zakynthos</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 8.618,31</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
               </div>
             </div>
           </div>
         </div></div>
     </div>
   </div>
   
   
   <!-- 2° LINHA-->

    <!-- MODAL ITÁLIA -->
   <div class="container text-center mb-3">
     <div class="row row-cols-4">
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalItalia.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Italia</h5>
          <p class="card-text fs-5 fst-italic">Roma, Itália</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Roma</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 11.000,82</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-italia" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button ITÁLIA modal -->
         
         <div class="modal fade" id="modal-italia" tabindex="-1" aria-labelledby="Modal-italia" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-italia">Ofertas de Passagens para <span class="fw-bold">Roma</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 11.000,82</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
                
               </div>
             </div>
           </div>
         </div></div>
         <!-- MODAL NORUEGA-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalNoruega.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Noruega</h5>
          <p class="card-text fs-5 fst-italic">Oslo, Noruega</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Oslo</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 11.502,69</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-noruega" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button NORUEGA modal -->
         
         <div class="modal fade" id="modal-noruega" tabindex="-1" aria-labelledby="modal-noruega" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-noruega">Ofertas de Passagens para <span class="fw-bold">Oslo</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 11.502,69</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
               
               </div>
             </div>
           </div>
         </div></div>
          <!-- MODAL REINO UNIDO-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalUk.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Reino Unido</h5>
          <p class="card-text fs-5 fst-italic">Londres, Reino Unido</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Londres</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 10.740,54</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-uk" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button REINO UNIDO modal -->
         
         <div class="modal fade" id="modal-uk" tabindex="-1" aria-labelledby="modal-uk" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-uk">Ofertas de Passagens para <span class="fw-bold">Londres</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 10.740,54</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
                
               </div>
             </div>
           </div>
         </div></div>
         <!-- MODAL RUSSIA-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalRussia.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Russia</h5>
          <p class="card-text fs-5 fst-italic">Moscow, Russia</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Moscow</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">Cancelado</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-russia" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button RUSSIA modal -->
         
         <div class="modal fade" id="modal-russia" tabindex="-1" aria-labelledby="modal-russia" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-russia">Ofertas de Passagens para <span class="fw-bold">Moscow</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Sem voos previstos</p>
                <p class="text-break">Devido a recente guerra envolvendo a Russia os voos foram cancelados por tempo indeterminado.</p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               </div>
             </div>
           </div>
         </div></div>
     </div>
   </div>
  
   
     <!--3° LINHA-->
  
   
  
    <!-- MODAL ARGENTINA -->
   <div class="container mb-3">
    <h2 class="mr-4">Américas</h2> 
     <div class="row row-cols-4">
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalArgentina.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Argentina</h5>
          <p class="card-text fs-5 fst-italic">Buenos Aires, Argentina</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Buenos Aires</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 3.209,19</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-argentina" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button ARGENTINA modal -->
         
         <div class="modal fade" id="modal-argentina" tabindex="-1" aria-labelledby="modal-argentina" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-argentina">Ofertas de Passagens para <span class="fw-bold">Buenos Aires</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 3.209,19</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
                
              
               </div>
             </div>
           </div>
         </div></div>
          <!-- MODAL BRASIL-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalBrazil.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Brasil</h5>
          <p class="card-text fs-5 fst-italic">Rio de Janeiro, Brasil</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Rio de Janeiro</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 1.317,27</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-brasil" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button BRASIL modal -->
       
         <div class="modal fade" id="modal-brasil" tabindex="-1" aria-labelledby="modal-brasil" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-brasil">Ofertas de Passagens para <span class="fw-bold">Rio de Janeiro</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 1.317,27</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
                
               </div>
             </div>
           </div>
         </div></div>
         <!-- MODAL CANADÁ-->
       <div class="col-3"><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalCanada.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Canadá</h5>
          <p class="card-text fs-5 fst-italic">Ottawa, Canadá</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Ottawa</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 10.236,03</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-canada" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button CANADÁ modal -->
        
         <div class="modal fade" id="modal-canada" tabindex="-1" aria-labelledby="modal-canada" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-canada">Ofertas de Passagens para <span class="fw-bold">Ottawa</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 10.236,03</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
               </div>
             </div>
           </div>
         </div></div>
  
          <!--MODAL ESTADOS UNIDOS-->
       <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalEua.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Estados Unidos</h5>
            <p class="card-text fs-5 fst-italic">Washington, Estados Unidos</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Washington</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 12.194,52</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-eua" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button ESTADOS UNIDOS modal -->
         
         <div class="modal fade" id="modal-eua" tabindex="-1" aria-labelledby="modal-eua" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-eua">Ofertas de Passagens para <span class="fw-bold">Washington</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 12.194,52</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   

   <!--4° LINHA-->
   
  
  
   <!-- MODAL DUBAI-->
   <div class="container mb-3">
    <h2 class="mr-4">Oriente Médio</h2>
     <div class="row row-cols-4">
       <div class="col-3 "><div class="card" style="width: 18rem;">
        <img src="../../voyageAirways/imagem/site/modalDubai.svg" class="card-img-top h-100" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-3">Emi. Árabes Unidos</h5>
          <p class="card-text fs-5 fst-italic">Dubái, Emi. Árabes Unidos</p>
          <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Dubái</p>
          <hr>
          <div class="d-flex justify-content-around align-items-center ">
           <p class="fs-3 fw-semibold">R$ 6.281,64</p>
          <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-dubai" id="btn-comprar">
            Comprar
          </button>
         </div>
        </div>
      </div><!-- Button DUBAI modal -->
         
         <div class="modal fade" id="modal-dubai" tabindex="-1" aria-labelledby="modal-dubai" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-dubai">Ofertas de Passagens para <span class="fw-bold">Dubái</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 6.281,64</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               </div>
             </div>
           </div>
         </div>
       </div>
  
        <!-- MODAL ISRAEL-->
       <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalIsrael.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Israel</h5>
            <p class="card-text fs-5 fst-italic">Jerusalém, Israel</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Jerusalém</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 8.801,12</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-israel" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button ISRAEL modal -->
         
         <div class="modal fade" id="modal-israel" tabindex="-1" aria-labelledby="modal-israel" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-israel">Ofertas de Passagens para <span class="fw-bold">Jerusalém</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 8.801,12</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               </div>
             </div>
           </div>
         </div>
       </div>
         
        <!-- MODAL QATAR-->
       <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalQatar.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Qatar</h5>
            <p class="card-text fs-5 fst-italic">Doha, Qatar</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Doha</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 11.542,45</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-qatar" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button QATAR modal -->
         
         <div class="modal fade" id="modal-qatar" tabindex="-1" aria-labelledby="modal-qatar" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-qatar">Ofertas de Passagens para <span class="fw-bold">Doha</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 11.542,45</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
               </a>
               
               </div>
             </div>
           </div>
         </div>
       </div>
  
        <!-- MODAL TURQUIA-->
       <div class="col-3">
         
        <div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalTurquia.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Turquia</h5>
            <p class="card-text fs-5 fst-italic">Ankara, Turquia</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Ankara</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 8.432,19</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-turquia" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button TURQUIA modal -->
         
         <div class="modal fade" id="modal-turquia" tabindex="-1" aria-labelledby="modal-turquia" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
             <div class="modal-content">
               <div class="modal-header">
                <h1 class="modal-title fs-4 fw-light" id="modal-turquia">Ofertas de Passagens para <span class="fw-bold">Ankara</span></h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                <p class="text-break">viagem de 10 dias (ida e volta)</p>
                <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 8.432,19</span></p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <a href="login.html">
                   <button type="button" class="btn btn-primary">Comprar</button>
                 </a>
               </div>
             </div>
           </div>
         </div> 
       </div>
     </div>
   </div>
 
  <!-- 5° LINHA-->
  
  
  
      <!-- MODAL CHINA-->
     <div class="container mb-3">
      <h2 class="mr-4">Ásia e Oceania</h2>
       <div class="row row-cols-4">
         <div class="col-3"><div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalChina.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">China</h5>
            <p class="card-text fs-5 fst-italic">Pequim, China</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Pequim</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 10.043,43</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-china" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button CHINA modal -->
         
           <div class="modal fade" id="modal-china" tabindex="-1" aria-labelledby="modal-china" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
               <div class="modal-content">
                 <div class="modal-header">
                  <h1 class="modal-title fs-4 fw-light" id="modal-china">Ofertas de Passagens para <span class="fw-bold">Pequim</span></h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                  <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                  <p class="text-break">viagem de 10 dias (ida e volta)</p>
                  <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 10.043,43</span></p>
                 </div>
                
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                   <a href="login.html">
                     <button type="button" class="btn btn-primary">Comprar</button>
                 </a>
                 
                 </div>
               
               </div>
             </div>
           </div></div>
  
            <!-- MODAL JAPAO-->
         <div class="col-3"><div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalJapao.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Japão</h5>
            <p class="card-text fs-5 fst-italic">Tóquio, Japão</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Tóquio</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 31.731,05</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-japao" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button JAPAO modal -->
           
           <div class="modal fade" id="modal-japao" tabindex="-1" aria-labelledby="modal-japao" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
               <div class="modal-content">
                 <div class="modal-header">
                  <h1 class="modal-title fs-4 fw-light" id="modal-japao">Ofertas de Passagens para <span class="fw-bold">Tóquio</span></h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                  <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                  <p class="text-break">viagem de 10 dias (ida e volta)</p>
                  <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 31.731,05</span></p>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                   <a href="login.html">
                     <button type="button" class="btn btn-primary">Comprar</button>
                 </a>
                 
                 
                 </div>
               </div>
             </div>
           </div></div>
            <!-- MODAL NOVA ZELÂNDIA-->
         <div class="col-3"><div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalNovaZelandia.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Nova Zelândia</h5>
            <p class="card-text fs-5 fst-italic">Wellington, Nova Zelândia</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Wellington</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 8.971,69</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-zelandia" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button NOVA ZELÂNDIA modal -->
           
           <div class="modal fade" id="modal-zelandia" tabindex="-1" aria-labelledby="modal-zelandia" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
               <div class="modal-content">
                 <div class="modal-header">
                  <h1 class="modal-title fs-4 fw-light" id="modal-zelandia">Ofertas de Passagens para <span class="fw-bold">Wellington</span></h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                  <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                  <p class="text-break">viagem de 10 dias (ida e volta)</p>
                  <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 8.971,69</span></p>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                   <a href="login.html">
                     <button type="button" class="btn btn-primary">Comprar</button>
                 </a>
                 
                
                 </div>
               </div>
             </div>
           </div></div>
             <!-- MODAL SINGAPURA-->
         <div class="col-3"><div class="card" style="width: 18rem;">
          <img src="../../voyageAirways/imagem/site/modalSingapura.svg" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title fs-3">Singapura</h5>
            <p class="card-text fs-5 fst-italic">Marina Bay, Singapura</p>
            <p class="card-text fs-5 fst-italic">São Paulo <img src="../../voyageAirways/imagem/site/seta.png"> Singapura</p>
            <hr>
            <div class="d-flex justify-content-around align-items-center ">
             <p class="fs-3 fw-semibold">R$ 9.693,65</p>
            <button type="button" class="btn btn fw-bold text-white rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-singapura" id="btn-comprar">
              Comprar
            </button>
           </div>
          </div>
        </div><!-- Button SINGAPURA modal -->
           
           <div class="modal fade" id="modal-singapura" tabindex="-1" aria-labelledby="modal-singapura" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog d-flex align-items-center" style="height: 100vh; margin-top: -50px;">
               <div class="modal-content">
                 <div class="modal-header">
                  <h1 class="modal-title fs-4 fw-light" id="modal-singapura">Ofertas de Passagens para <span class="fw-bold">Marina Bay</span></h1>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                  <p class="text-break fs-4 fw-medium">Maio de 2024</p>
                  <p class="text-break">viagem de 10 dias (ida e volta)</p>
                  <p class="text-break">a partir de <span class="fs-4 fw-bold">R$ 9.693,65</span></p>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                   <a href="login.html">
                     <button type="button" class="btn btn-primary">Comprar</button>
                 </a>
                 
                 </div>
               </div>
             </div>
           </div>
          </div>
       </div>
     </div>
     
    
    </div>
  
   <!-- FIM DOS MODAL--> 


   <?php 
    require_once '../componentes/footer-user.php'
   ?>
</body>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

</html>