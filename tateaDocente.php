<?php
class Persona
{
    public $dni;
    public $apellidos;
    public $nombre;
    public $sexo;
    public $fechaNacimiento;
    public $fechaEmision;
    public $fechaValidez;

    // Constructor
    public function __construct($dni, $apellidos, $nombre, $sexo, $fechaNacimiento, $fechaEmision, $fechaValidez)
    {
        $this->dni = $dni;
        $this->apellidos = $apellidos;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->fechaEmision = $fechaEmision;
        $this->fechaValidez = $fechaValidez;
    }

    // Destructor
    public function __destruct()
    {
        echo "\nConexión cerrada: {$this->nombre}";
    }

    // Getters
    public function getDni()
    {
        return $this->dni;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }
    public function getFechaValidez()
    {
        return $this->fechaValidez;
    }
    // Setters
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }
    public function setFechaEmision($fechaEmision){
        $this->fechaEmision = $fechaEmision;
    }
    public function setFechaValidez($fechaValidez) {
        $this->fechaValidez = $fechaValidez;
    }
}

class Docente extends Persona {
    public $modulo;
    // Constructor
    public function __construct($dni, $apellidos, $nombre, $sexo, $fechaNacimiento, $fechaEmision, $fechaValidez, $modulo){
        parent::__construct($dni, $apellidos, $nombre, $sexo, $fechaNacimiento, $fechaEmision, $fechaValidez);
        $this->modulo = $modulo;
    }
    // Destructor
    #[Override]
    public function __destruct()
    {
        return parent::__destruct();
    }
    //Getter
    public function getModulo(){
        return $this->modulo;
    }
    //Setter
    public function setModulo($modulo){
        $this->modulo = $modulo;
    }
}

$docente = new Docente("1", "1", "1", "1", "1", "1", "1", "1");
echo "DNI: {$docente->getDni()}\n";
echo "Apellidos: {$docente->getModulo()}\n";
?>