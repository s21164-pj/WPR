<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>HOTEL</h1>

<h2>Zarezerwuj:</h2>
<form method="post">
    <select name='guests' onchange='if(this.value != 0) { this.form.submit(); }'>
        <option value='0'>Liczba gości</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
    </select>
</form>

<form action="hotel.php" method="post">

    <?php
    if (isset($_POST['guests'])) {
        switch ($_POST['guests']) {
            case '2':
                echo("
                <input name='name1' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                ");
                break;
            case '3':
                echo("
                <input name='name1' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                <input name='name2' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                ");
                break;
            case '4':
                echo("
                <input name='name1' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                <input name='name2' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                <input name='name3' placeholder='imie i nazwisko kolejnej osoby' type='text'>
                ");
                break;
        }
    }
    ?>

    <br>
    <label for="firstName">Imie osoby zamawiającej:</label>
    <input type="text" id="firstName" name="firstName" required>
    <br>
    <label for="secondName">Nazwisko osoby zamawiającej:</label>
    <input type="text" id="secondName" name="secondName" required>
    <br>
    <label for="address">Adres:</label>
    <input type="text" id="address" name="address" required>
    <br>
    <label for="phone">Numer telefonu:</label>
    <input type="tel" id="phone" name="phone"
           pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}"
           required>
    <small>Format: 123-456-789</small>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="startDate">Data przyjazdu:</label>
    <input type="date" id="startDate" name="startDate" required>
    <br>
    <label for="endDate">Data odjazdu:</label>
    <input type="date" id="endDate" name="endDate" required>
    <br>
    <h3>Dodatkowe udogodnienia:</h3>
    <input type="checkbox" id="" name="vehicle1" value="Bike">
    <label for="vehicle1"> Pokój dla palących</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> Pokój dostowowany dla małego dziecka</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> Przyjazd z psem</label><br>
    <br>
    <input name="submit" type="submit" value="Rezerwacja"/>


    <?php
    if (isset($_POST['submit'])) {
        echo("<br> <hr>");
        $customer = $_POST['firstName'] . ' ' . $_POST['firstName'];
        echo("Osoba zamawiająca: $customer <br>");
        $address = $_POST['address'];
        echo("Dane: <br>");
        echo $_POST['address'];
        echo("<br>");
        echo $_POST['phone'];
        echo("<br>");
        echo $_POST['email'];
        echo("<br>");

        if (isset($_POST['name1'])) {
            echo("<br>Kolejne osoby:<br>");
            echo $_POST['name1'];
            echo("<br>");
        }
        if (isset($_POST['name2'])) {
            echo $_POST['name2'];
            echo("<br>");
        }
        if (isset($_POST['name3'])) {
            echo $_POST['name3'];
            echo("<br>");
        }

        echo ("<br>Data pobytu od do:<br>");
        echo $_POST['startDate'];
        echo ("<br>");
        echo $_POST['endDate'];

    }
    ?>


</body>
</html>