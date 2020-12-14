<?php
class Pessoas{
    public $nome;

    public function falar()
    {

        return "Meu nome é".$this->nome;
    }
}

$glaucio = new Pessoas();
$glaucio->nome="Grlaucio";
echo $glaucio->falar();
