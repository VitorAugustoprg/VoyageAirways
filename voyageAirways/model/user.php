<?php 

    class User{
        public $id, $nome, $sobrenome, $cpf, $img, $senha, $email, $nasc, $nacionalidade, $genero, $fone;

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
        public function getImg(){
            return $this->img;
        }
        public function setImg($img){
            $this->img = $img;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getNasc(){
            return $this->nasc;
        }
        public function setNasc($nasc){
            $this->nasc = $nasc;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($genero){
            $this->genero = $genero;
        }
        public function getFone(){
            return $this->fone;
        }
        public function setFone($fone){
            $this->fone = $fone;
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