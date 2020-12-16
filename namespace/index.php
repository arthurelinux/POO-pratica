<?php
require_once("config.php");
use Cliente\Cadastro;


$meu = new Cadastro();
$meu->setNome("Arthur");
$meu->setEmail("arthur@teste.com");
$meu->setSenha("123456");
//$meu->registrarVenda();
echo $meu;