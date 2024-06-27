<?php
// Milestone 1
// Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

// Milestone 2
// Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

// Milestone 3 
// Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
require_once __DIR__ . '/hotel/hotel.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>

    <main>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome Hotel</th>
            <th scope="col">Descrizione Hotel</th>
            <th scope="col">Disponibilità parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <tr>  <?php foreach ($hotels as $info) { ?>
            <th scope="row"> <?php echo $info['name'];?></th>
            <td><?php echo $info['description'];?></td>
            <td><?php echo $info['parking'];?></td>
            <td> <?php echo $info['vote' ];?></td>
            <td>  <?php echo $info['distance_to_center'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>    
    </main>
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>