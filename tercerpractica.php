<?php
class Persona{
    private $nombre;
    private $edad;
    //Constructor; primer funcion
    //Instancia o objeto
    
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        
    }
    //public -private -protected
    private function definirNombre(){
        return $this->nombre;
    }
    public function saludar(){
        echo "<p>".$this->definirNombre()."</p>";

       
    }
}
$persona3 = new Persona("Erick", 23);
$persona3->saludar();
$persona2 = new Persona("Fer", 99);
$persona2->saludar();

class animal{
    public function saludar(){
        return "Hola soy un animal";
    }
}
class perro extends animal{
    public function hacerSonido(){
        return "GUAU GUAU!!!";
    }
}
$perrito = new perro();
echo "<p>".$perrito->saludar()."</p>";
echo "<p>".$perrito->hacerSonido()."</p>";

//metodos estaticos
class Miclase{
    public static function metodoEstatico(){
        return "Esta es una funcion estatica";
    }
}
echo "<p>".Miclase::metodoEstatico()."</p>";

$miobjeto = new Miclase();

echo "<p>".$miobjeto->metodoEstatico()."</p>";
//Interfaces
interface interfaceAnimal{
    public function Hablar();
    public function Gritar();
}

class Ganado implements interfaceAnimal{
    public function saludo(){
        echo "<p>Que royal</p>";
    }
    public function Hablar(){
        echo "<p>Muuuu</p>";
    }
    public function Gritar(){
        echo "<p>Que quieres!!!</p>";
    }
}
$lavaca = new Ganado();
echo $lavaca->saludo();
echo $lavaca->Hablar();
echo $lavaca->Gritar();
//Clases abstractas
abstract class abtractAnimal{
    protected $nombre;
    abstract public function hablar();
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    
}
class Gato extends abtractAnimal{
    public function hablar(){
        echo "<p>Miauuuu</p>";
    }
}
$gatillo = new Gato("Mishi");
echo $gatillo->hablar();
?>