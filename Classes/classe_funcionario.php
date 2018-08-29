<?php

class funcionario {
    private $id, $nome, $login, $senha;
    
        function __construct($id='', $nome='', $login='', $senha='') {
        $this->id = $id;
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

     public function cadastrar() {
       $query = "INSERT INTO funcionario 
                   (nome, login, senha)
                 VALUES
                 ('" . addslashes($this->nome) .  "',
                 '" .  addslashes($this->login) .  "',    
                 '" .  addslashes(md5($this->senha)) .  "');   
                 ";
       
       $GLOBALS['bd']->query($query);
    }
}
