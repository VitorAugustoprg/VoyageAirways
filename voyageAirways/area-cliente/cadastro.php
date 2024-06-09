<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="icon" href="../img/logoBlack.png">
  <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro | Voyage Airways</title>
</head>
<body>   
<header>
  <nav class="navbar"  style="background-color: #163359;">
    <div class="container ">
      <a class="navbar-brand d-flex flex-row align-items-center" href="index.php">
        <img src="../img/logoBranco.png" alt="Logo" width="30">
        <p class="text-white text-center d-flex fw-bold m-0 p-2">Voyage Airways</p>
      </a>  

      <a type="button" class="btn text-white botao-login rounded-pill fw-bold" href="../area-cliente/login.html">Login</a>
    </div>
  </nav>
</header>

<div class="container">
  <div class="container d-flex align-items-center justify-content-center mx-auto">
      <form action="" class="mx-auto">
        <h2 class="fw-light pb-3 pt-5 fs-1">Criar conta</h2>
        <p class="fs-5">Se você já possui login no site da VoyageAirways basta <a href="">entrar</a> com seus dados </br> já  cadastrados</p>

        <h2 class="fs-1 fw-normal pb-3 pt-3">Dados Pessoais</h2>

        <p class="fs-5">Insira seus dados <span class="fw-bold"> exatamente como aparecem em seu CPF e RG.</span> Eles serão<br>  usados quando você comprar suas passagens.</p>
         
      <fieldset>
      
        <select class="p-0 m-0 mb-3 d-flex justify-content-center">
          <option>Escolha o País</option>
          <option id="afeganistao" value="Afeganistão">Afeganistão</option>
          <option id="africa_do_sul" value="África do Sul">África do Sul</option>
          <option id="albania" value="Albânia">Albânia</option>
          <option id="alemanha" value="Alemanha">Alemanha</option>
          <option id="andorra" value="Andorra">Andorra</option>
          <option id="angola" value="Angola">Angola</option>
          <option id="antigua_e_barbuda" value="Antígua e Barbuda">Antígua e Barbuda</option>
          <option id="arabia_saudita" value="Arábia Saudita">Arábia Saudita</option>
          <option id="argelia" value="Argélia">Argélia</option>
          <option id="argentina" value="Argentina">Argentina</option>
          <option id="armenia" value="Armênia">Armênia</option>
          <option id="australia" value="Austrália">Austrália</option>
          <option id="austria" value="Áustria">Áustria</option>
          <option id="azerbaijao" value="Azerbaijão">Azerbaijão</option>
          <option id="bahamas" value="Bahamas">Bahamas</option>
          <option id="bangladesh" value="Bangladesh">Bangladesh</option>
          <option id="barbados" value="Barbados">Barbados</option>
          <option id="bareine" value="Bareine">Bareine</option>
          <option id="belarus" value="Belarus">Belarus</option>
          <option id="belgica" value="Bélgica">Bélgica</option>
          <option id="belize" value="Belize">Belize</option>
          <option id="benin" value="Benin">Benin</option>
          <option id="birmania" value="Birmânia">Birmânia</option>
          <option id="bolivia" value="Bolívia">Bolívia</option>
          <option id="bosnia_e_herzegovina" value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
          <option id="botsuana" value="Botsuana">Botsuana</option>
          <option id="brasil" value="Brasil">Brasil</option>
          <option id="brunei" value="Brunei">Brunei</option>
          <option id="bulgaria" value="Bulgária">Bulgária</option>
          <option id="burkina_faso" value="Burkina Faso">Burkina Faso</option>
          <option id="burundi" value="Burundi">Burundi</option>
          <option id="butao" value="Butão">Butão</option>
          <option id="cabo_verde" value="Cabo Verde">Cabo Verde</option>
          <option id="camaroes" value="Camarões">Camarões</option>
          <option id="camboja" value="Camboja">Camboja</option>
          <option id="canada" value="Canadá">Canadá</option>
          <option id="catar" value="Catar">Catar</option>
          <option id="cazaquistao" value="Cazaquistão">Cazaquistão</option>
          <option id="chade" value="Chade">Chade</option>
          <option id="chile" value="Chile">Chile</option>
          <option id="china" value="China">China</option>
          <option id="chipre" value="Chipre">Chipre</option>
          <option id="colombia" value="Colômbia">Colômbia</option>
          <option id="comores" value="Comores">Comores</option>
          <option id="congo_brazzaville" value="Congo-Brazzaville">Congo-Brazzaville</option>
          <option id="congo_kinshasa" value="Congo-Kinshasa">Congo-Kinshasa</option>
          <option id="coreia_do_norte" value="Coreia do Norte">Coreia do Norte</option>
          <option id="coreia_do_sul" value="Coreia do Sul">Coreia do Sul</option>
          <option id="costa_do_marfim" value="Costa do Marfim">Costa do Marfim</option>
          <option id="costa_rica" value="Costa Rica">Costa Rica</option>
          <option id="croacia" value="Croácia">Croácia</option>
          <option id="cuaite" value="Cuaite">Cuaite</option>
          <option id="cuba" value="Cuba">Cuba</option>
          <option id="dinamarca" value="Dinamarca">Dinamarca</option>
          <option id="dominica" value="Dominica">Dominica</option>
          <option id="egito" value="Egito">Egito</option>
          <option id="emirados_arabes_unidos" value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
          <option id="equador" value="Equador">Equador</option>
          <option id="eritreia" value="Eritreia">Eritreia</option>
          <option id="eslovaquia" value="Eslováquia">Eslováquia</option>
          <option id="eslovenia" value="Eslovênia">Eslovênia</option>
          <option id="espanha" value="Espanha">Espanha</option>
          <option id="estados_unidos" value="Estados Unidos">Estados Unidos</option>
          <option id="estonia" value="Estônia">Estônia</option>
          <option id="eswatini" value="Eswatini">Eswatini</option>
          <option id="etiopia" value="Etiópia">Etiópia</option>
          <option id="fiji" value="Fiji">Fiji</option>
          <option id="filipinas" value="Filipinas">Filipinas</option>
          <option id="finlandia" value="Finlândia">Finlândia</option>
          <option id="franca" value="França">França</option>
          <option id="gabao" value="Gabão">Gabão</option>
          <option id="gambia" value="Gâmbia">Gâmbia</option>
          <option id="gana" value="Gana">Gana</option>
          <option id="georgia" value="Geórgia">Geórgia</option>
          <option id="granada" value="Granada">Granada</option>
          <option id="grecia" value="Grécia">Grécia</option>
          <option id="guatemala" value="Guatemala">Guatemala</option>
          <option id="guiana" value="Guiana">Guiana</option>
          <option id="guine" value="Guiné">Guiné</option>
          <option id="guine_equatorial" value="Guiné Equatorial">Guiné Equatorial</option>
          <option id="guine_bissau" value="Guiné-Bissau">Guiné-Bissau</option>
          <option id="haiti" value="Haiti">Haiti</option>
          <option id="holanda" value="Holanda">Holanda</option>
          <option id="honduras" value="Honduras">Honduras</option>
          <option id="hungria" value="Hungria">Hungria</option>
          <option id="iemen" value="Iêmen">Iêmen</option>
          <option id="india" value="Índia">Índia</option>
          <option id="indonesia" value="Indonésia">Indonésia</option>
          <option id="iraque" value="Iraque">Iraque</option>
          <option id="irlanda" value="Irlanda">Irlanda</option>
          <option id="ira" value="Irã">Irã</option>
          <option id="islandia" value="Islândia">Islândia</option>
          <option id="israel" value="Israel">Israel</option>
          <option id="italia" value="Itália">Itália</option>
          <option id="jamaica" value="Jamaica">Jamaica</option>
          <option id="japao" value="Japão">Japão</option>
          <option id="jordania" value="Jordânia">Jordânia</option>
          <option id="kiribati" value="Kiribati">Kiribati</option>
          <option id="kosovo" value="Kosovo">Kosovo</option>
          <option id="kuwait" value="Kuwait">Kuwait</option>
          <option id="laos" value="Laos">Laos</option>
          <option id="lesoto" value="Lesoto">Lesoto</option>
          <option id="letonia" value="Letônia">Letônia</option>
          <option id="libano" value="Líbano">Líbano</option>
          <option id="liberia" value="Libéria">Libéria</option>
          <option id="libia" value="Líbia">Líbia</option>
          <option id="liechtenstein" value="Liechtenstein">Liechtenstein</option>
          <option id="lituania" value="Lituânia">Lituânia</option>
          <option id="luxemburgo" value="Luxemburgo">Luxemburgo</option>
          <option id="macedonia_do_norte" value="Macedônia do Norte">Macedônia do Norte</option>
          <option id="madagascar" value="Madagascar">Madagascar</option>
          <option id="malasia" value="Malásia">Malásia</option>
          <option id="malawi" value="Malawi">Malawi</option>
          <option id="maldivas" value="Maldivas">Maldivas</option>
          <option id="mali" value="Mali">Mali</option>
          <option id="malta" value="Malta">Malta</option>
          <option id="marrocos" value="Marrocos">Marrocos</option>
          <option id="mauricia" value="Maurícia">Maurícia</option>
          <option id="mauritania" value="Mauritânia">Mauritânia</option>
          <option id="mexico" value="México">México</option>
          <option id="micronesia" value="Micronésia">Micronésia</option>
          <option id="mocambique" value="Moçambique">Moçambique</option>
          <option id="moldavia" value="Moldávia">Moldávia</option>
          <option id="monaco" value="Mônaco">Mônaco</option>
          <option id="mongolia" value="Mongólia">Mongólia</option>
          <option id="montenegro" value="Montenegro">Montenegro</option>
          <option id="namibia" value="Namíbia">Namíbia</option>
          <option id="nauru" value="Nauru">Nauru</option>
          <option id="nepal" value="Nepal">Nepal</option>
          <option id="nicaragua" value="Nicarágua">Nicarágua</option>
          <option id="niger" value="Níger">Níger</option>
          <option id="nigeria" value="Nigéria">Nigéria</option>
          <option id="niue" value="Niue">Niue</option>
          <option id="noruega" value="Noruega">Noruega</option>
          <option id="nova_zelandia" value="Nova Zelândia">Nova Zelândia</option>
          <option id="oma" value="Omã">Omã</option>
          <option id="palau" value="Palau">Palau</option>
          <option id="palestina" value="Palestina">Palestina</option>
          <option id="panama" value="Panamá">Panamá</option>
          <option id="papua_nova_guine" value="Papua-Nova Guiné">Papua-Nova Guiné</option>
          <option id="paquistao" value="Paquistão">Paquistão</option>
          <option id="paraguai" value="Paraguai">Paraguai</option>
          <option id="peru" value="Peru">Peru</option>
          <option id="polonia" value="Polônia">Polônia</option>
          <option id="portugal" value="Portugal">Portugal</option>
          <option id="quenia" value="Quênia">Quênia</option>
          <option id="quirguistao" value="Quirguistão">Quirguistão</option>
          <option id="reino_unido" value="Reino Unido">Reino Unido</option>
          <option id="republica_centro_africana" value="República Centro-Africana">República Centro-Africana</option>
          <option id="republica_checa" value="República Checa">República Checa</option>
          <option id="republica_dominicana" value="República Dominicana">República Dominicana</option>
          <option id="romenia" value="Romênia">Romênia</option>
          <option id="ruanda" value="Ruanda">Ruanda</option>
          <option id="russia" value="Rússia">Rússia</option>
          <option id="salomao" value="Salomão">Salomão</option>
          <option id="samoa" value="Samoa">Samoa</option>
          <option id="santa_lucia" value="Santa Lúcia">Santa Lúcia</option>
          <option id="sao_cristovao_e_nevis" value="São Cristóvão e Névis">São Cristóvão e Névis</option>
          <option id="sao_marinho" value="São Marinho">São Marinho</option>
          <option id="sao_tome_e_principe" value="São Tomé e Príncipe">São Tomé e Príncipe</option>
          <option id="sao_vicente_e_granadinas" value="São Vicente e Granadinas">São Vicente e Granadinas</option>
          <option id="seicheles" value="Seicheles">Seicheles</option>
          <option id="senegal" value="Senegal">Senegal</option>
          <option id="serra_leoa" value="Serra Leoa">Serra Leoa</option>
          <option id="servia" value="Sérvia">Sérvia</option>
          <option id="singapura" value="Singapura">Singapura</option>
          <option id="siria" value="Síria">Síria</option>
          <option id="somalia" value="Somália">Somália</option>
          <option id="sri_lanka" value="Sri Lanka">Sri Lanka</option>
          <option id="suazilandia" value="Suazilândia">Suazilândia</option>
          <option id="sudao" value="Sudão">Sudão</option>
          <option id="sudao_do_sul" value="Sudão do Sul">Sudão do Sul</option>
          <option id="suecia" value="Suécia">Suécia</option>
          <option id="suica" value="Suíça">Suíça</option>
          <option id="suriname" value="Suriname">Suriname</option>
          <option id="tailandia" value="Tailândia">Tailândia</option>
          <option id="taiwan" value="Taiwan">Taiwan</option>
          <option id="tajiquistao" value="Tajiquistão">Tajiquistão</option>
          <option id="tanzania" value="Tanzânia">Tanzânia</option>
          <option id="timor_leste" value="Timor-Leste">Timor-Leste</option>
          <option id="togo" value="Togo">Togo</option>
          <option id="tonga" value="Tonga">Tonga</option>
          <option id="trindade_e_tobago" value="Trindade e Tobago">Trindade e Tobago</option>
          <option id="tunisia" value="Tunísia">Tunísia</option>
          <option id="turcomenistao" value="Turcomenistão">Turcomenistão</option>
          <option id="turquia" value="Turquia">Turquia</option>
          <option id="tuvalu" value="Tuvalu">Tuvalu</option>
          <option id="ucrania" value="Ucrânia">Ucrânia</option>
          <option id="uganda" value="Uganda">Uganda</option>
          <option id="uruguai" value="Uruguai">Uruguai</option>
          <option id="uzbequistao" value="Uzbequistão">Uzbequistão</option>
          <option id="vanuatu" value="Vanuatu">Vanuatu</option>
          <option id="vaticano" value="Vaticano">Vaticano</option>
          <option id="venezuela" value="Venezuela">Venezuela</option>
          <option id="vietna" value="Vietnã">Vietnã</option>
          <option id="zambia" value="Zâmbia">Zâmbia</option>
          <option id="zimbabue" value="Zimbábue">Zimbábue</option>
      </select>
      
      </fieldset>

      <fieldset>
        <fieldset class="d-flex flex-column justify-content-center">
          <div class="d-flex flex-column p-1">
        <input type="text" name="" id="cpf" placeholder="Número de CPF" class="input p-3 mb-0" required> 
        <p class="">Apenas números, exemplo: 111123466</p>
      </div>

        <input type="text" name="" id="" placeholder="Nome" class="input p-3 mb-4" required>
        
        <input type="text" placeholder="Sobrenome" class="input p-3 mb-4" required>

        
      </fieldset>

        <fieldset class="d-flex justify-content-center flex-column">
          <legend>Data de nascimento</legend>
          <input type="date" name="" id="" class="input p-3 mb-4" required placeholder="dd/mm/aaaa">
        </fieldset>


        <fieldset class="d-flex flex-row text-center ">
          <select name="postal" id="postal" class="fs-5 text-center" required>
            <optgroup class="text-center">
              <option value="55" class="text-center">+55 Brasil</option>
              <option value="55" class="text-center">+54 Argentina</option>
            </optgroup>
          </select>
          <input type="tel" name="" id="" placeholder="(11) 99999-9999" class="input p-3 mb-4 w-50">
        </fieldset>
        

        <fieldset class="d-flex flex-column justify-content-center mb-3 mt-3">
          <h2 class="">Sexo</h2>
          <div class="box-masc">
            <input type="radio" name="sexo" id="masculino" class="sexo" required>
            <label for="masculino" class="m-0 p-0  fs-4">Masculino</label>
          </div>
        
          <div class="box-fem">
            <input type="radio" name="sexo" id="feminino" class="sexo">
            <label for="feminino" class="m-0 p-0 fs-4">Feminino</label>
          </div>
        
          <div class="box-outro ">
            <input type="radio" name="sexo" id="prefiro-nao-dizer" class="sexo">
            <label for="prefiro-nao-dizer" class="m-0 p-0 fs-4">Prefiro não dizer</label>
          </div>
        </fieldset>
        


        <fieldset class="d-flex flex-column justify-content-center">
          <h2 class="fs-2 fw-normal pb-3 pt-3 mt-5">Dados de login</h2>
          <p class="fs-5">Certifique-se de utilizar seu melhor e-mail para realizar o cadastro.</p>
            <input type="email" name="" id="" placeholder="E-mail" class="input p-2 mb-4" required>
            <input type="password" name="" id="" placeholder="Senha" class="input p-2 mt-4" required>
        </fieldset>

       
       

        <div class="d-flex mt-3 m-3 w-100 justify-content-center">
        <input type="checkbox" name="" id="termos" class="m-0 p-0 check" required> 
        <p class="p-0 m-1 fs-5">Eu li e aceito os termos de serviço da Voyage Airways</p>
      </div>

      <div class="d-grid gap-2 col-10 mx-auto">
        <button class="btn btn-primary rounded fs-5 botao fw-semibold" type="submit">Criar conta</button>
      </div>
      </fieldset>
     
    </form>
      
  </div>
</div>

</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</html>