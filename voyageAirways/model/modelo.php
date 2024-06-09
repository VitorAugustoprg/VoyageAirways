<?php

    class User{
        public $id, $nome, $cpf;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
          return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getCpf(){
          return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf= $cpf;
        }

        public function generateToken() {
          return bin2hex(random_bytes(16));
        }

        public function salvarImagem($novo_nome) {
          //a foto vem com a extenção $_FILES
          if(empty($_FILES['foto']['size']) != 1){
              //pegar as extensão do arquivo
              if ($novo_nome ==""){
                  //Ciando um nome novo
                  $novo_nome = md5(time()). ".jpg";
              }
              //definindo o diretorio
              $diretorio = "../img/client/";
              //juntando o nome com o diretorio
              $nomeCompleto = $diretorio.$novo_nome;
              //efetuando o upload
              move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
              return $novo_nome;
           }else{
            return $novo_nome;
           }
        }


    }
?>