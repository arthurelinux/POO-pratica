<?php
require_once("config.php");
//require_once("class/Cadastro.php");
//require_once("class/Cliente/Cadastro.php");
use Cliente\Cadastro;


$meu = new Cadastro();
$meu->setNome("Arthur");
$meu->setEmail("arthur@teste.com");
$meu->setSenha("123456");
$meu->registrarVenda();
echo $meu;