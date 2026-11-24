<?php
class Coche
{
    // Atributos
    public $matricula;
    public $marca;
    public $modelo;
    public $color;

    // Métodos
    function __construct($matricula, $marca, $modelo, $color) {}

    // Setters
    function set_matricula($matricula)
    {
        $this->matricula = $matricula;
    }
    function set_marca($marca)
    {
        $this->marca = $marca;
    }
    function set_modelo($modelo)
    {
        $this->modelo = $modelo;
    }
    function set_color($color)
    {
        $this->color = $color;
    }

    //Getters
    function get_matricula()
    {
        echo $this->matricula;
    }
    function get_marca()
    {
        echo $this->marca;
    }
    function get_modelo()
    {
        echo $this->modelo;
    }
    function get_color()
    {
        echo $this->color;
    }
}
