<?php

class Prodotto {
    protected $titolo;
    protected $prezzo;
    protected $immagine;
    protected $categoria;

    public function __construct($titolo, $prezzo, $immagine, Categoria $categoria) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getTipo() {
        return 'Generico';
    }
}
?>
