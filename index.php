<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Testo originale
        $variabile_testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet atque sint, consequatur in blanditiis, provident asperiores doloremque nulla magnam architecto reiciendis possimus illum ab iusto officia, culpa doloribus velit laborum.";

        $lunghezza_testo = strlen($variabile_testo);

        //Testo censurato
        $censura = $_GET['badword'];

        $testo_censurato = str_replace($censura, '***', $variabile_testo);
    ?>

    <!-- Testo originale -->
    <p><?php echo $variabile_testo; ?></p>
    
    <h2><?php echo $lunghezza_testo; ?></h2>

    <hr>

    <!-- Testo censurato -->
    <p><?php echo $testo_censurato ?></p>
</body>
</html>