<html>
<head>
    <meta charset="UTF-8">
</head>
<h1>Zapisywanie do pliku!</h1>
<body>

<?php

$first = trim($_POST['first']);
$second = trim($_POST['second']);

if(empty($first) and empty($second)) {

    echo '<form action="" method="post">
<input type="text" name="first" placeholder="Zapisz coś"/><br /><br />
<input type="text" name="second" placeholder="do pliku !"/><br /><br />
<input type="submit" value="Wyślij!" />
</form>';
}
else {

    $dane = $first."\n".$second."\n";
    $file = "plik-tekstowy.txt";
    $fp = fopen($file, "a");
    flock($fp, 2);
    fwrite($fp, $dane);
    flock($fp, 3);
    fclose($fp);

    echo "Dane zostały zapisane poprawnie!";
}

?>
</body>
</html>