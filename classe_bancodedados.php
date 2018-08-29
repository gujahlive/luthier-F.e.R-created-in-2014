<?php
class bancodedados {
    private $servidor = 'localhost', 
            $usuario= 'root', 
            $senha = '', 
            $banco = 'sistema', 
            $conexao;
    
    public function conectar(){
        $this->conexao = mysql_connect($this->servidor, $this->usuario, $this->senha) or die(mysql_errno(). '' . mysql_error());
        mysql_select_db($this->banco, $this->conexao) or die(mysql_errno(). '' . mysql_error());
        mysql_set_charset('utf8');
   }
    public function query($query){
        $query = mysql_query($query);
        if ($query) {
            return $query;
        } else {
            die(mysql_errno(). '' . mysql_error());
        }
   }
    public function desconectar(){
        mysql_close($this->conexao);
   }
}
?>

