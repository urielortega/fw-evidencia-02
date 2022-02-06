<?php

echo "¡Hola mundo! Soy Uriel Alejandro Ortega Aguilar<br><br>";

# Mediante ABSTRACCIÓN defino propiedades para los objetos de tipo Device.
class Device { 
    public $brand;
    protected $name;
    public $releaseYear;
    public $operatingSystem;

    public function greeting() {
        echo "Hello from your $this->name!<br>";
    }

    public function __construct($brand, $name, $releaseYear, $operatingSystem) {
        $this->brand = $brand;
        $this->name = $name;
        $this->releaseYear = $releaseYear;
        $this->operatingSystem = $operatingSystem;
    }

    # Implemento getters y setters, los cuales podrán ser usados para modificar o recuperar valores
    # de las variables que se definan como private o protected (Aplico ENCAPSULAMIENTO).
    // GETTERS
    public function getBrand(){
        return $this->brand;
    }
    public function getName(){
        return $this->name;
    }
    public function getReleaseYear(){
        return $this->releaseYear;
    }
    public function getOperatingSystem(){
        return $this->operatingSystem;
    }

    // SETTERS
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setReleaseYear($releaseYear){
        $this->releaseYear = $releaseYear;
    }
    public function setOperatingSystem($operatingSystem){
        $this->operatingSystem = $operatingSystem;
    }

}

 # Mediante ABSTRACCIÓN defino propiedades para los objetos de tipo SmartWatch.
 # Además, aplico HERENCIA usando la palabra reservada 'extends', tomando como padre a la clase Device.
class SmartWatch extends Device {

    public $caseSize;

    public function __construct($brand, $name, $releaseYear, $operatingSystem, $caseSize) {
        $this->caseSize = $caseSize;
        parent::__construct($brand, $name, $releaseYear, $operatingSystem);
    }

    # Aplico POLIMORFISMO al crear un método, cuyo nombre ya es usado en la clase Device, implementándolo de forma diferente a la clase padre.
    public function greeting() {
        echo "Hello from your $this->caseSize $this->name!<br>";
    }

}

$myIpad = new Device('Apple', 'iPad', 2019, 'iPadOS');
$myIpad->greeting();

$myMacbookAir = new Device('Apple', 'MacBook Air', 2020, 'macOS');
$myMacbookAir->greeting();
$myMacbookAir->setName('M1 MacBook Air');
$myMacbookAir->greeting();

$myImac = new Device('Apple', 'iMac', 2021, 'macOS');
$myImac->greeting();

$myWatch = new SmartWatch('Apple', 'Apple Watch S7', 2021, 'watchOS', '45 mm');
$myWatch->greeting();

?>