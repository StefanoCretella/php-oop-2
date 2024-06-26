<?php

require_once 'Prodotto.php';

class Cibo extends Prodotto {
    protected $gusto;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $gusto) {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->gusto = $gusto;
    }

    public function getGusto() {
        return $this->gusto;
    }

    public function getTipo() {
        return 'Cibo';
    }
}
?>
