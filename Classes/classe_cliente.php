<?php

class cliente {
    private $nome, $registro, $telefone;
    
        function __construct($nome='', $registro='', $telefone='') {
        $this->nome = $nome;
        $this->registro = $registro;
        $this->telefone = $telefone;
    }
    

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registro) {
        $this->registro = $registro;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

     public function cadastrar() {
       $query = "INSERT INTO cliente
                   (nome, registro, telefone)
                 VALUES
                 ('" . addslashes($this->nome) .  "',
                 '" .  addslashes($this->registro) .  "',    
                 '" .  addslashes($this->telefone) .  "');   
                 ";
       
       $GLOBALS['bd']->query($query);
    }
}

;?>