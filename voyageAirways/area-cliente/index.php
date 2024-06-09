<?php 
  session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="icon" href="../../voyageAirways/imagem/site/logoBlack.png">
    <title>Voyage Airways</title>
   
  </head>
  <body>
 

    <header class="header-phone">
      <img src="../img/menu-icon.png" alt="" class="m-3">
      <div class="poscionar d-flex flex-column justify-content-center">
      <h1 class="text-white fs-2 fw-bold">Para encontros inesquecíveis</h1>
      <p class="text-white fst-italic fw-semibold fs-5">Faça parte de tudo isso.</p>
      <button type="button" class="btn btn-outline-light w-50">Conhecer</button>
    </div>
    </header>

    <header id="header1">

    

     <?php 
      require_once '../componentes/header-user.php'
     ?>
  
      
  </div>
    </header>

    <main class="galeria-img">
      <h3 class="text-center m-5">Destinos mais procurados</h3>



     
      <div class="grade d-flex justify-content-center align-items-center flex-column">
        <div class="container text-center">
          <div class="row">
            <div class="col-6 borda modalGrecia position-relative d-flex align-items-center justify-content-center flex-column">
              <div class="overlay">
                <div class="cabecalho">
             
               
                  <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">Grécia</p>
                  <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 7.090,33*</p>
                  <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>
                  
            </div>
            <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
              Comprar agora
          </a>
              </div>
              <div class="content">
                  <h4 class="desaparecer fw-bold text-light fs-2">Grécia</h4>
                  <p class="desaparecer fw-bold text-light fs-3">Ilha de Zakynthos</p>
              </div>
          </div>
          
            <div class="col-3 borda modalEspanha position-relative d-flex align-items-center justify-content-center flex-column">
              <div class="overlay"><div class="d-flex flex-column"> <div class="cabecalho">
             
               
                <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">Espanha</p>
              <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 6.646,73*</p>
              <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>

              </div>
                </div>
                <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
                  Comprar agora
              </a>
              </div>
              <div class="content">
                <h4 class="desaparecer fw-bold text-light fs-2">Espanha</h4>
                <p class="desaparecer fw-bold text-light fs-3">Plaza de España</p>
              </div>
              
              
            </div>
            <div class="col-3 borda modalFranca position-relative">
             
              <div class="overlay"> 
                <div class="cabecalho">
             
                  <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">França</p>
                  <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 4.742,69*</p>
                  <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>
    
            </div>
            <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
              Comprar agora
          </a>
            </div>
              
              <div class="content">
                <h4 class="desaparecer fw-bold text-light fs-2">França</h4>
                <p class="desaparecer fw-bold text-light fs-3">Torre Eiffel</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-3 borda modalAlemanha position-relative">
              <div class="overlay"> <div class="cabecalho">
                <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">Alemanha</p>
                <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 9.714,14*</p>
                <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>
  
              </div>
              <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
                Comprar agora
            </a>
            </div>
              <div class="content">
                <h4 class="desaparecer fw-bold text-light fs-2">Alemanha</h4>
                <p class="desaparecer fw-bold text-light fs-3">Neuschwanstein</p>
              </div>
              
            </div>
            <div class="col-3 borda modalTurquia position-relative">
              <div class="overlay"><div class="cabecalho">
             
                <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">Turquia</p>
              <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 7.532,93*</p>
              <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>

              </div>
              <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
                Comprar agora
            </a>
              </div>
              <div class="content">
                <h4 class="desaparecer fw-bold text-light fs-2">Turquia</h4>
                <p class="desaparecer fw-bold text-light fs-3">Mesquita Yeni</p>
              </div>
              
          
            </div>
            <div class="col-6 borda modalItalia position-relative">
              <div class="overlay">
                <div class="cabecalho">
                  <p class="p-3 animate__animated animate__fadeInBottomRight fs-3 fw-bold">Italia</p>
                  <p class="animate__animated animate__zoomIn fs-4">Ida a partir de 6.805,40*</p>
                  <p class="animate__animated animate__zoomIn fs-6">*Taxa de embarque inclusa</p>
    
            </div>
            <a href="passagens.html" class="btn btn-danger btn-lg btn-block btnAdicionar hide animate__animated animate__slideInUp">
              Comprar agora
          </a>
              </div>
              <div class="content">
                <h4 class="desaparecer fw-bold text-light fs-2">Italia</h4>
                <p class="desaparecer fw-bold text-light fs-3">Coliseu de Roma</p>
              </div>
              
           
            </div>
          </div>
        </div>
      </div>
      


    </main>

    <section class="cards-info-phone">
    <div class="d-flex flex-column justify-content-around align-items-center mb-3">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card card-4" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="cards-info-tablet">
    <div class="d-flex flex-row justify-content-around mb-3 m-0 p-0">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="d-flex flex-row justify-content-around cards-info">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </section>



    <h3 class="text-center m-5">Curiosidades</h3>


    <section class="d-flex justify-content-center align-items-center">
     
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../voyageAirways/imagem/site/carrosselChina.svg" class="d-block w-100 h-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
             
              </div>
            </div>
            <div class="carousel-item">
              <img src="../../voyageAirways/imagem/site/carrosselEverest.svg" class="d-block w-100 h-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="../../voyageAirways/imagem/site/carrosselAmazonas.svg" class="d-block w-100 h-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
               
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      



        
    </section>  

    <div class="container d-flex justify-content-center">
    <hr class="w-100">
  </div>


  


    <section class="container  d-flex justify-content-center flex-column align-items-center" id="sobre-nos">
      
      <h3 class="text-center m-5 text-with-shadow">Voyage Airways - Quem somos nós?</h3>

      <div class="d-flex flex-column">
        <p class="fs-5 text-justify about-us">
          Bem-vindo à Voyage Airways, onde o céu não é apenas o limite, é o nosso ponto de partida. Fundada em 2024 com a visão ousada de redefinir a experiência de viagem aérea, a Voyage Airways emergiu como uma companhia aérea de prestígio, comprometida em proporcionar jornadas excepcionais aos nossos passageiros. 
          
      </p>
      
      <p class="fs-5 text-justify about-us">
          Na Voyage Airways, nossa missão é mais do que simplesmente transportar passageiros de um destino a outro. Somos impulsionados pela paixão por conectar pessoas, culturas e experiências, criando memórias inesquecíveis em cada voo. Com uma frota de última geração e uma equipe dedicada de profissionais da aviação, estamos comprometidos em garantir segurança, conforto e conveniência em cada etapa da jornada de nossos passageiros. 
          
      </p>
      
      <p class="fs-5 text-justify about-us">
           Nossa empresa é guiada por valores fundamentais de excelência, inovação e responsabilidade. Estamos constantemente buscando maneiras de aprimorar nossos serviços, investindo em tecnologias de vanguarda e práticas sustentáveis para minimizar nosso impacto ambiental. Acreditamos que voar não deve ser apenas uma experiência, mas sim uma aventura que eleva os sentidos e enriquece a vida. 
      </p>
      
      <p class="fs-5 text-justify about-us">
          Na Voyage Airways, nossa equipe é o nosso maior ativo. Cada membro da nossa equipe compartilha um compromisso inabalável com a excelência e a hospitalidade, garantindo que cada interação com nossos passageiros seja marcada pela cortesia, profissionalismo e atenção aos detalhes. 
          
      </p>
      
      <p class="fs-5 text-justify about-us">
          Estamos comprometidos em estabelecer novos padrões de excelência na indústria da aviação, liderando o caminho para um futuro onde viajar é mais do que uma necessidade, é uma paixão. Junte-se a nós enquanto embarcamos nessa emocionante jornada pelo céu, onde cada voo é uma promessa de novas descobertas e experiências inesquecíveis. 
          
      </p>
      
      <p class="fs-5 text-justify about-us">
          Bem-vindo a Voyage Airways - Onde cada viagem é uma aventura.
      </p>
      

      
      <p class="fs-5 text-justify">Explore nosso <a class="destaque-texto" href="index.html">site</a>. Compre <a class="destaque-texto" href="passagens.html">passagens aéreas </a> com a qualidade que só a Voyage Airways pode oferecer.</p>
    </div>

    

     


    </section>
    



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