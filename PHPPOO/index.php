<?php

require_once './vendor/autoload.php';

use classes\Classe;

Classe::metodo_estatico("Hellow World Denovo");
Classe::metodo_estatico2();

$classe = new Classe();

$classe->metodo("Hellow World Denovo");

$classe->metodo_abstrato();

$classe->get_variavel_herdada();
$classe->set_variavel_herdada("novo valor para a variavel herdada");
$classe->get_variavel_herdada();

echo "END";
