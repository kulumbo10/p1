<?php
//usaremos a classe PDO - Php Data Objet(classe nativa do php) cuja funcao e trabalhar com o Banco de Dados de forma segura
namespace App\Model;
class Produto {
    //essa classe tera como atributos os dados e campos da nossa base de dados

    private $id, $nome, $descricao;
    
    public function getId(){
        return $this->id;
        //getter e o responsavel por pegar e exibir os dados ou informacao e seter, seta ou atualiza
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
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    // usamos o getter e setter para obter e atualizar os dados
} 

?>