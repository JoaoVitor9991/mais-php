<?php

require_once 'Tributavel.php';

class SeguroDeVida implements Tributavel
{
    public function calcular_imposto()
    {
        return 50;
    }
}