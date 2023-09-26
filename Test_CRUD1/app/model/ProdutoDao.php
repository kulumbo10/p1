<?php
// ESTA CLASS SERVE PARA 
//VAI RECEBER OS DADOS DA CLASS /FICHEIRO "PRODUTO.PHP"
//E nest classe que vamos aplicar os 4 metodos de uma CRUD E VAI RECEBER PRODUTO COMO PARAMETRO
//Esses metodos vao receber a class Produto $p, como parametro

namespace App\Model;
class ProdutoDao{
    public function Create(Produto $p){
        // CRIANDO O BANCO DE DADOS E PREPARANDO ELE USANDO A CLASSE CONECTION / CONEXAO
        $sql = 'INSERT INTO produtos(nome, descricao) VALUES (?,?)'; //VAMOS USAR BIND VALUES (? ==NOME, ? == DESCRICAO)
        $stmt = conection::getConn() ->prepare($sql); // prepare e um metodo (conection::getconn e uma instancia do PDO)
        $stmt ->bindValue(1, $p->getNome()); //$p e um objeto da classe produto / usamos getNome, para retornar o nome do produto.
        $stmt ->bindValue(2, $p->getDescricao());

        $stmt ->execute();
        //o execute vai executar
        //Agora precisamos testar as conexoes pra saber se funciona VAMOS NA 'INDEX'
    }
    public function Read(){

    }    
    public function Update(Produto $p){

    }    
    public function Delete($id){

    }
}