<?php

namespace App\Model;

//class responsael por estabelecer conexao com o banco de dados
class Conection{
    private static $instance;
    public static function getConn(){

        if(!isset(self::$instance)): // verifica se nao existe uma instancia da conection cria uma
            self::$instance = new \PDO('mysql: host = localhost dbname = pdo; charset = utf8', 'root', " ");
        endif;

        return self::$instance; //retorna a instancia

        // se nao usar o endif vai dar erro na declaracao do return
       

    }
    
    //no banco de dados vamos criar um arquivo com o nome pdo - tabela nome: produtos
  

}
