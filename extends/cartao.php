<?php

class Cartao extends Pagamento {
    public function getValorFinal()
    {
        return $this->valor * 1.2;
    }
}