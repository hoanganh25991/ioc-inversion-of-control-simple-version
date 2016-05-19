<?php
namespace App;
require_once "lib/Pimple.php";
class Car {
	protected $tire;
	protected $engine;
	public function __construct(Tire $tire, Engine $engine) {
		$this->tire = $tire;
		$this->engine = $engine;	
	}
}
 
class Tire {}
 
class Engine {}



use Pimple;
$container = new Pimple();
$container["tire"] = function(){
	return new Tire();
};
$tire1 = $container["tire"];
var_dump($tire1);
$container["engine"] = function(){
	return new Engine();
};
$engine1 = $container["engine"];
var_dump($engine1);
$container["car"] = function($c){
	return new Car($c["tire"], $c["engine"]);
};
$car1 = $container["car"];
var_dump($car1);