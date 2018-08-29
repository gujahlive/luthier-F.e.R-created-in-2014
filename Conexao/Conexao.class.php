<?php
 /*Constantes de parâmetros para configuração da conexão*/
 define('HOST', 'localhost');
 define('DBNAME', 'sistema');
 define('CHARSET', 'utf8');
 define('USER', 'root');
 define('PASSWORD', '');
 
 /*definição de conexão com servidor hospedado.
 define('HOST', 'localhost');
 define('DBNAME', 'id6625241_portfolioacqua');
 define('CHARSET', 'utf8');
 define('USER', 'id6625241_acquadeveloper');
 define('PASSWORD', 'Acquapescados');*/
 class Conexao {
  // Atributo estático para instância do PDO

  private static $pdo;
  // Escondendo o construtor da classe

  // Configurando uma conexão
  public static function getInstance() {
     if (!isset(self::$pdo)) {
        try {
            self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Erro: " . $e->getMessage();
        }
      }
      return self::$pdo;
    }
}
