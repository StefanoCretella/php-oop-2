<?php

require_once 'Prodotto.php';

class Gioco extends Prodotto {
    protected $materiale;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria, $materiale) {
        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function getTipo() {
        return 'Gioco';
    }
}
?>
