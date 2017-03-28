<?php
abstract class figuraGeometrica
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    public function getColor()
    {
        return $this->_color;
    }
    
    public function setColor($color)
    {
        $this->_color = $color;
    }


    public function __construct()
    {
        $this->_color = "Hola";
        
    }

     public abstract function Dibujar();

     protected abstract function CalcularDatos();
    
    public function __toString()
    {
        return " Color: ".$this->_color." Perimetro: ".$this->_perimetro." Superficie: ".$this->_superficie;
    }
    
}   
?>