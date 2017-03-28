<?php
require ("FiguraGeometrica.php");
class Rectangulo extends figuraGeometrica
{
    private $_ladoDos;
    private $_ladoUno;

    public function __construct($l1, $l2)
    {
        parent::__construct();
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
        echo$this;
        echo("<br>");
    }
    
    protected function CalcularDatos()
    {
        $this->_perimetro = 2*($this->_ladoUno + $this->_ladoDos);
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
    }


    public function __toString()
    {
        return "Lado Uno: ".$this->_ladoUno." Lado Dos: ".$this->_ladoDos.parent::__toString()."<br>";
    }


    public function Dibujar()
    {
        $i = 0;
        $j = 0;
        for($i =0; $i < $this->_ladoUno; $i++)
        {
            for($j = 0; $j < $this->_ladoDos; $j++)
            {
                echo("*");
            }
            echo("<br>");
        }
    }

}

?>