<?php
class funcionario {
private $id, $login, $senha;

function __construct($login='', $senha='') {
   if(!empty($login) && !empty($senha)){
       $query = "SELECT * FROM funcionario WHERE login = '".$login."' and senha = '".md5($senha). "';";

           $funcionario = $GLOBALS['bd']->query($query);
           $funcionario = mysql_fetch_assoc($funcionario);
           $this->id = $funcionario['id'];
           $this->login = $funcionario['login'];
           $this->senha = $funcionario['senha'];
               
   }else {
    $this->login = $login;
    $this->senha = $senha;
}
}

public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getlogin() {
    return $this->login;
}

public function setlogin($login) {
    $this->login = $login;
}

public function getSenha() {
    return $this->senha;
}

public function setSenha($senha) {
    $this->senha = $senha;
}

 

}
?>