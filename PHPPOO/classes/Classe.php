<?php
namespace classes;


class Classe extends ClassePai {

  function __construct() {
    parent::__construct();
    echo "Classe instanciada"."<br>";
  }

  public function metodo($var) {
    parent::metodo($var);
    echo "metodo implementado da CLASSE FILHA:".$var."<br>";
  }




}
