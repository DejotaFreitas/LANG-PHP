<?php
namespace interfaces;

interface Interfaci extends InterfacePai, InterfacePai2 {

  const CONSTANTE = "CONSTANTE DA INTERFACE";

  public function metodo($var);

  public static function metodo_estatico($var);

}
