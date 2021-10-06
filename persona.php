<?php

class Persona
{
    public function __construct(public $nombre, public $peso, public $estatura)
    {
    }

    public function calcularIMC($nombre, $peso, $estatura)
    {
        $imc = $peso / $estatura ^ 2;

        if ($imc < 18.5) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Delgadez o bajo de peso';
        } elseif ($imc > 18.85 && $imc <= 24.99) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Peso saludable';
        } elseif ($imc > 25 && $imc <= 29.9) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Sobrepeso';
        } else {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Obesidad';
        }
    }

}

