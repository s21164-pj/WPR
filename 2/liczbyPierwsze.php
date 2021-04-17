<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Liczby Pierwsze</h1>

<form method="post" action="liczbyPierwsze.php">
    <label for="numberToCheck">Podaj liczbę do sprawdzenia:</label>
    <input type="number" name="numberToCheck">

    <input name="submit" type="submit" value="Sprawdź!"/>
</form>

<?php

if (isset($_POST['submit'])) {
    if (isPrime($_POST['numberToCheck'])) {
        echo '<br> Jest liczbą pierwszą';
    } else {
        echo '<br> Nie jest liczbą pierwszą';
    }
}

function isPrime($num)
{
    $count = 0;
    if ($num < 2) {
        return false;
    } else {
        for ($i = 2; $i * $i <= $num; $i++) {
            $count++;
            if ($num % $i == 0) {
                echo "Liczba iteracji: $count";
                return false;
            }
        }
        echo "Liczba iteracji: $count";
        return true;
    }
}


?>

</body>
</html>