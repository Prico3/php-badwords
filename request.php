<?php 
//prendo gli elemtni del form col metodo GET
$phrase = $_GET["phrase"];
$censored = $_GET["censored"];

// creo un array con explode(divide una stringa ad ogni occorrenza del delimitatore es: lo spazio)
$exploded_string = explode(' ', $phrase);
// var_dump($exploded_string);

//sostituisco un pezzo di stringa con quello che voglio in questo caso asterischi, col metodo str_replace
$new_string = str_replace("ciao", "***", $phrase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $new_string ?></p>
    <a href="index.php">Torna indietro</a>
</body>
</html>