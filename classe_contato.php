<?php

class contato {
    private $nome, $email, $dados;
    
        function __construct($nome='', $email='', $dados='') {
        $this->nome = $nome;
        $this->email = $email;
        $this->dados = $dados;
    }
 

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDados() {
        return $this->dados;
    }

    public function setDados($dados) {
        $this->dados = $dados;
    }

     public function cadastrar() {
       $query = "INSERT INTO contato 
                   (nome, email, dados)
                 VALUES
                 ('" . addslashes($this->nome) .  "',
                 '" .  addslashes($this->email) .  "',    
                 '" .  addslashes($this->dados) .  "');   
                 ";
       
       $GLOBALS['bd']->query($query);
    }
}

;?>
