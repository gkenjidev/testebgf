<?php 

    require_once "../bd/hoteis.php";

    $hoteis = getHoteis();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>
<body>
    <div>
        <?php foreach($hoteis as $hotel): ?>
            <h2><?php echo $hotel["name"] ?></h2>
            <p><?php echo $hotel["address"] ?></p>
            <img src="<?php echo $hotel["image"] ?>">
            <button>Reservar</button>
        <?php endforeach ?>
    </div>
</body>
</html>