<?php

require_once 'Prodotto.php';

class Cuccia extends Prodotto {
    protected $dimensione;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $dimensione) {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->dimensione = $dimensione;
    }

    public function getDimensione() {
        return $this->dimensione;
    }

    public function getTipo() {
        return 'Cuccia';
    }
}
?>
