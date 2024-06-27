<?php
// Milestone 1
// Stampare tutti i nostri hotel con tutti i dati disponibili. Iniziate in modo graduale.
// Prima stampate in pagina i dati, senza preoccuparvi dello stile.
// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

// Milestone 2
// Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

// Milestone 3 
// Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
require_once __DIR__ . '/hotel/hotel.php';

?>

<h1>Hotels</h1>

<ul>
    <?php foreach ($hotels as $info) { ?>
        <li>
            <?php echo $info['name'];?>
        </li>
        <li>
            <?php echo $info['description'];?>
        </li>
        <li>
            <?php echo $info['parking'];?>
        </li>
        <li>
            <?php echo $info['vote' ];?>
        </li>
        <li>
            <?php echo $info['distance_to_center'];?>
        </li> <br>
    <?php } ?>
</ul>