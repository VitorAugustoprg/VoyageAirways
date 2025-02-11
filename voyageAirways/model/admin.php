<?php 

    class Admin{
        public $id, $nome, $sobrenome, $cpf, $nasc, $email, $senha, $img, $token;

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
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
        public function getCpf(){
            return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getNasc(){
            return $this->nasc;
        }
        public function setNasc($nasc){
            $this->nasc = $nasc;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getImg(){
            return $this->img;
        }
        public function setImg($img){
            $this->img = $img;
        }
        public function setToken($token){
            $this->token = $token;
        }
        public function getToken(){
            return $this->token;
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
                $diretorio = "../../imagem/admin/";
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