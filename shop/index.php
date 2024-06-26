<?php
// Includiamo le classi necessarie
require_once 'Categoria.php';
require_once 'Prodotto.php';
require_once 'Cibo.php';
require_once 'Gioco.php';
require_once 'Cuccia.php';

// Creiamo le categorie
$categoriaCani = new Categoria('Cani', 'img/icona_cani.png');
$categoriaGatti = new Categoria('Gatti', 'img/icona_gatti.png');

// Creiamo i prodotti
$ciboCani = new Cibo('Cibo per Cani', 20.99, 'img/cibo_per_cani.png', $categoriaCani, 'Pollo');
$giocoGatti = new Gioco('Gioco per Gatti', 5.99, 'img/gioco_per_gatti.png', $categoriaGatti, 'Plastica');
$cucciaCani = new Cuccia('Cuccia per Cani', 99.99, 'img/cuccia_per_cani.png', $categoriaCani, 'Grande');

// Funzione per stampare la card del prodotto
function stampaCardProdotto(Prodotto $prodotto) {
    echo '<div class="card">';
    echo '<img src="' . $prodotto->getImmagine() . '" alt="' . $prodotto->getTitolo() . '">';
    echo '<h2>' . $prodotto->getTitolo() . '</h2>';
    echo '<p>Prezzo: ' . $prodotto->getPrezzo() . ' €</p>';
    echo '<p>Categoria: <img src="' . $prodotto->getCategoria()->getIcona() . '" alt="' . $prodotto->getCategoria()->getNome() . '"> ' . $prodotto->getCategoria()->getNome() . '</p>';
    echo '<p>Tipo: ' . $prodotto->getTipo() . '</p>';
    if ($prodotto instanceof Cibo) {
        echo '<p>Gusto: ' . $prodotto->getGusto() . '</p>';
    } elseif ($prodotto instanceof Gioco) {
        echo '<p>Materiale: ' . $prodotto->getMateriale() . '</p>';
    } elseif ($prodotto instanceof Cuccia) {
        echo '<p>Dimensione: ' . $prodotto->getDimensione() . '</p>';
    }
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop per Animali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Benvenuti nel nostro shop per animali!</h1>
    <div class="container">
        <?php
        // Stampiamo le card dei prodotti
        stampaCardProdotto($ciboCani);
        stampaCardProdotto($giocoGatti);
        stampaCardProdotto($cucciaCani);
        ?>
    </div>
</body>
</html>
