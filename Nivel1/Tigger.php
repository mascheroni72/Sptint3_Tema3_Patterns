<?php
/*Refactoritzar la classe Tigger en un Singleton considerant els següents punts:

    Defineix el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear 
    una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
    Imprimeix en pantalla múltiples vegades el rugit de Tigger.
    Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.*/

class Tigger {
    private static $instance;
    private $counter;

       private function __construct() {
        $this->counter = 0;
               echo "Building character..." . PHP_EOL;
       }
       public static function getInstance() : Tigger {
        if (!isset(self::$instance)) {
        self::$instance = new Tigger();
        }
        return self::$instance;
    }
       public function roar() : void {
               echo "Grrr!" . PHP_EOL;
               $this->counter++;
       }
       public function getCounter() : int {
        return $this->counter;
        
       }
}
?>