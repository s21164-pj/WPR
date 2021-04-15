<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
</head>
<body>

<h1>Kalkulator</h1>

<form method="post" action="kalkulator.php">
    <label for="firstNumber">Pierwsza Liczba:</label>
    <input type="number" name="firstNumber">
    <label for="firstNumber">Druga Liczba:</label>
    <input type="number" name="secondNumber"> <br>
    <label for="operation">Wybierz operację:</label>

    <select name="operation">
        <option value="addition">dodawanie</option>
        <option value="subtraction">odejmowanie</option>
        <option value="multiplication">mnożenie</option>
        <option value="division">dzielenie</option>
    </select>
    <br>
    <input name="submit" type="submit" value="Oblicz"/>
</form>

<?php

if(isset($_POST['submit']))
{
    $operationType = $_POST['operation'];
    $firstNumber = $_POST['firstNumber'];
    $secondNumber = $_POST['secondNumber'];

    if ($firstNumber != null && $secondNumber != null) {
        switch ($operationType) {
            case 'addition':
                $result = $firstNumber + $secondNumber;
                echo ("Wynik dowawania: $result");
                break;
            case 'subtraction':
                $result = $firstNumber - $secondNumber;
                echo ("Wynik odejmowania: $result");
                break;
            case 'multiplication':
                $result = $firstNumber * $secondNumber;
                echo ("Wynik mnożenia: $result");
                break;
            case 'division':
                if ($secondNumber != 0) {
                    $result = $firstNumber / $secondNumber;
                    echo ("Wynik dzielenia: $result");
                    break;
                } else {
                    echo ('Proszę nie dzielić przez 0');
                }
        }
    } else {
        echo ('Podaj liczby!!!');
    }
}

?>
</body>
</html>