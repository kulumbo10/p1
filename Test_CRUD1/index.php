<?php

// forma longa:Para podermos usar algumas das classes precisarmos dar:  o require/model/conexao produtoDao
//A melhor forma: Para fazermos um carregamento automatico e melhor, vamos usar o metodo AUTO-LOAD
// USANDO O PADRAO PSR-4 VER "PHP FIG.ORG" CARREGAMENTOS AUTOMATICOS DE CLASSES

// Vamos fazer um carregamento automatico com AutoLoad
//a seguir vamos testar os nossos metodos e ver se funciona corretamente 
require_once 'vendor/autoload.php'; // nao precisamos fazer require para todas as classes, apenas o 'require_once no vendor/autoload

$produto = new \App\Model\Produto(); // instanciando a Classe Produto, usando o caminho
$produto ->setNome('Notebook Dell');
$produto -> setDescricao('i5, 4gb');

// ATE AQUI, USE O VAR_DUMP PARA TESTAR

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao ->create($produto);

// --> a seguir, vamos na "classe produtoDao" e criar um insert ou o SQL




// a class ProdutoDao, vai ser o responsavel em fazer o nosso CRUD (no metodo Create, recebe como parametro a classe produto)