<?php

class vehiculo{
    public $marca;
    public $modelo;
    public $año;


    public function __arrancar($marca, $modelo, $año) 
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }       
}
class transportepublico extends vehiculo{
    public $capacidadpasajeros;
}