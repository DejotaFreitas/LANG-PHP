<?php
namespace classes;

use abstratas\Abstrata;

class ClassePai extends Abstrata {

  function __construct() {
    echo "constructor da Classe Pai"."<br>";
  }

  public function metodo($var) {    
    echo "metodo implementado na Classe Pai:".$var."<br>";
  }

  public function metodo_abstrato() {
    echo "metodo abstrato na Classe Pai"."<br>";
  }

  public static function metodo_estatico($var) {
    echo "metodo estatico implementado na Classe Pai:".$var."<br>";
  }

  public static function metodo_estatico2() {
    echo "metodo_estatico2 implementado na Classe Pai imprime constante da interface: ".self::CONSTANTE."<br>";
  }


}
