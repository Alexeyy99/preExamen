<?php

class Persona
{
    public function __construct(public $nombre, public $peso, public $estatura)
    {
    }

    public function calcularIMC($nombre, $peso, $estatura)
    {
        $imc = $peso / ($estatura * $estatura);

        if ($imc < 18.5) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Delgadez o bajo de peso. Tu IMC es de: ' .$imc ;
        } elseif ($imc > 18.85 && $imc <= 24.99) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Peso saludable. Tu IMC es de: '.$imc;
        } elseif ($imc > 25 && $imc <= 29.9) {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Sobrepeso. Tu IMC es de: '.$imc;
        } else {
            echo 'Sr '. $this->nombre.' se encuentra en un estado de Obesidad. Tu IMC es de: '.$imc;
        }
    }

}

