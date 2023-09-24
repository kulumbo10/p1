<?php

namespace App\Model;

//class responsael por estabelecer conexao com o banco de dados
class Conection{
    private static $instance;
    public static function getcon(){

        if(!isset(self::$instance)):
            self::$instance = new PDO/('mysql: host = localhost dbname = pdo; charset = utf8', 'root','');
        else:

        return self::$instance;
        // se nao usar o endif vai dar erro na declaracao do return
        endif;

    }
    
    //no banco de dados vamos criar um arquivo com o nome pdo - tabela nome: produtos
  

}
