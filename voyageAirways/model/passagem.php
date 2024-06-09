<?php 

    class Passagem{
        public $id, $nome, $capital, $img, $preco, $origem, $destino; 

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
        public function getCapital(){
            return $this->capital;
        }
        public function setCapital($capital){
            $this->capital = $capital;
        }
        public function getImg(){
            return $this->img;
        }
        public function setImg($img){
            $this->img = $img;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getOrigem(){
            return $this->origem;
        }
        public function setOrigem($origem){
            $this->origem = $origem;
        }
        public function getdestino(){
            return $this->destino;
        }
        public function setdestino($destino){
            $this->destino = $destino;
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