<?php
require '../functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `kleding` WHERE `categorie` = "broeken" AND `soort` LIKE "broeken" ORDER BY `id` ASC
'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/keuzes.css">
    <link rel="stylesheet" href="../stylly.css">
</head>
<body>
    <header>
        <nav>
            <a href="../homepage.php"><img class="logoweb" src="../imgs/logo2.png" alt=""></a>
        </nav>
    </header>
    <main class="mainbroeken1">

    <?php foreach($result as $producten): ?>
        <article class="b1">
            <img class="fotoo" src="../imgs/<?php echo $producten['foto']; ?>" alt="">
            <button>add</button>
            <p> <?php echo $producten['prijs']; ?>  <br><br> <?php echo $producten['titel']; ?> <br><br> <?php echo $producten['beschrijving']; ?> </p>  
        </article>
        <?php endforeach; ?>  
    </main>
</body>
</html>