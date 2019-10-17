<?php
namespace abstratas;

use interfaces\Interfaci;

abstract class Abstrata implements Interfaci {

  protected $variavel_herdada = "variavel_herdada";

  public function get_variavel_herdada() {
    echo $this->variavel_herdada."<br>";
  }

  public function set_variavel_herdada($var) {
    $this->variavel_herdada = $var;
  }

  abstract function metodo_abstrato();

}
