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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php foreach($hoteis as $hotel): ?>
            <a href="hotel.php?id=<? echo $hotel["id"] ?>">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="<?php echo $hotel["image"] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $hotel["name"] ?></h2>
                        <p class="card-text"><?php echo $hotel["address"] ?></p>
                        <a href="efetuarReserva.php?id=<?php echo $hotel["id"] ?>" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>