<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<?php
/*1.1.	Napisz program, który wyświetli wiadomość: Witaj w świecie PHP!!!*/
echo("<h1>Witaj w świecie PHP!!!</h1>");
echo("<hr>");

/*1.2.	Napisz program, który oblicza pole prostokąta o bokach a i b wprowadzanych przez użytkownika
(każda wartość w osobnej linii).*/
$firstSide = rand(0, 1000);
$secondSide = rand(0, 1000);
$rectangleArea = $firstSide * $secondSide;
echo("pole prostokąta o bokach $firstSide i $secondSide = $rectangleArea");
echo("<hr>");

/*1.3.	Napisz program, który wyświetla na ekranie komputera pierwiastek kwadratowy z wartości z dokładnością do
    dwóch miejsc po przecinku. Wskazówka: Skorzystaj z funkcji pi() oraz sqrt(). W programie wypisz tylko wartość.*/
$yourNumber = rand(0, 1000);
$resultNumber = round(sqrt($yourNumber), 2);
echo("Pierwiastek z liczby $yourNumber to $resultNumber");
echo("<hr>");

/*1.4.	Napisz program, który pobierze dwie liczby naturalne i poda ich wynik dodawania, odejmowania,
mnożenia, dzielenia modulo.*/
$naturalNumber1 = rand(0, 1000);
$naturalNumber2 = rand(0, 1000);
$additionResult = $naturalNumber1 + $naturalNumber2;
$subtractionResult = $naturalNumber1 - $naturalNumber2;
$multiplicationResult = $naturalNumber1 * $naturalNumber2;
$divisionResult = $naturalNumber1 / $naturalNumber2;
$moduloResult = $naturalNumber1 % $naturalNumber2;
echo("Liczby naturalne wylosowane: $naturalNumber1 oraz $naturalNumber2");
echo("<br> Wynik Dodawania: $additionResult");
echo("<br> Wynik odejmowania: $subtractionResult");
echo("<br> Wynik mnożenia: $multiplicationResult");
echo("<br> Wynik dzielenia: $divisionResult  modulo: $moduloResult");
echo("<hr>");


/*1.5.	Napisz program, który pobierze od użytkownika dwa napisy (rozdzielone znakiem spacji) napis1 i napis2,
a następnie wyświetlinastępujący tekst:“%napis2 napis1%$#”*/
$word1 = 'napis1';
$word2 = 'napis2';
echo("“%$word2 $word1%$#”");
echo("<hr>");


/*1.6.	Napisz program, który dla trzech boków podanych przez użytkownika stwierdzi czy da się z tych boków zbudować trójkąt.
Trójkąt da się zbudować z bokówwtedy i tylko wtedy gdy zachodzą następujące warunki: a+b>c, a+c>b, b+c>a.
W przypadku wprowadzenia niepoprawnych danych program ma wyrzucić komunikat: BŁĄD*/
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
    echo("Można zbudować trójkąt z boków $a $b $c");
} else {
    echo("BŁĄD: z tyh boków nie można zbudować trójkąta $a $b $c");
}
echo("<hr>");


/*1.7.	Napisz program, który dla podanej liczby z odpowiedniego zakresu wyświetli jaki to miesiąc i ile ma on dni.
Zakładamy, że rok tutaj nie jest przestępny.
W przypadku niepoprawnych danych program ma wypisać komunikat: BŁĄD
Skorzystaj tutaj z instrukcji warunkowej switch!!!*/
$dayOfYear = rand(0, 400);
echo("dzień roku: $dayOfYear <br>");
switch ($dayOfYear) {
    case ($dayOfYear > 0 && $dayOfYear <= 31):
        echo "Styczeń, liczba dni 31";
        break;
    case ($dayOfYear > 31 && $dayOfYear <= 60):
        echo "Lutyn liczba dni 29";
        break;
    case ($dayOfYear > 60 && $dayOfYear <= 91):
        echo "Marzec liczba dni 31";
        break;
    case ($dayOfYear > 91 && $dayOfYear <= 121):
        echo "Kwiecień, liczba dni 30";
        break;
    case ($dayOfYear > 121 && $dayOfYear <= 152):
        echo "Maj, liczba dni 31";
        break;
    case ($dayOfYear > 152 && $dayOfYear <= 182):
        echo "Czerwiec, liczba dni 30";
        break;
    case ($dayOfYear > 182 && $dayOfYear <= 213):
        echo "Lipiec liczba dni 31";
        break;
    case ($dayOfYear > 213 && $dayOfYear <= 244):
        echo "Sierpień, liczba dni 31";
        break;
    case ($dayOfYear > 244 && $dayOfYear <= 274):
        echo "Wrzesień, liczba dni 30";
        break;
    case ($dayOfYear > 274 && $dayOfYear <= 305):
        echo "Październik, liczba dni 31";
        break;
    case ($dayOfYear > 305 && $dayOfYear <= 335):
        echo "Listopad liczba dni 30";
        break;
    case ($dayOfYear > 335 && $dayOfYear <= 366):
        echo "Grudzień, liczba dni 31";
        break;
    default:
        echo "liczba z poza zakresu";
}
echo("<hr>");


/*1.8.	Napisz program, który pobierze trzy liczby rzeczywiste, a następnie wyświetli je w kolejności od najmniejszej
do największej, a potem od największej do najmniejszej. Nie używaj żadnych metod sortujących.*/
$num1 = rand(0, 1000);
$num2 = rand(0, 1000);
$num3 = rand(0, 1000);

if ($num1 > $num2 && $num1 > $num3) {
   if ($num2 > $num3) {
       echo ("$num3 $num2 $num1 <br>");
       echo ("$num1 $num2 $num3");
    }else {
       echo ("$num2 $num3 $num1 <br>");
       echo ("$num1 $num3 $num2");
   }
}elseif ($num2 > $num1 && $num2 > $num3) {
    if ($num1 > $num3) {
        echo ("$num3 $num1 $num2 <br>");
        echo ("$num2 $num1 $num3");
    }else {
        echo ("$num1 $num3 $num2 <br>");
        echo ("$num2 $num3 $num1");
    }
}else {
    if ($num1 > $num2) {
        echo ("$num2 $num1 $num3 <br>");
        echo ("$num3 $num1 $num2");
    }else {
        echo ("$num1 $num2 $num3 <br>");
        echo ("$num3 $num2 $num1");
    }
}
echo ("<br>");
echo ("<hr>");

/*1.9.	Napisz program, który zadeklaruje dwie tablice typu int, następnie wczyta liczby naturalne i wczyta do pierwszej
tablicy liczb,następnie wczyta liczb do drugiej tablicy (wcześniej trzeba te tablice utworzyć), a następnie wykona
iloczyn skalarny tych tablic zgodnie ze wzorem.
Zastanów się, co w przypadku gdy n<m lub m<n.
W przypadku podania jakikolwiek błędnych danych program wypisuje komunikat BŁĄD, a następnie kończy działanie.*/

$tab1 = [rand(1,50),rand(1,50),rand(1,50)];
$tab2 = [rand(1,50),rand(1,50),rand(1,50)];
$result = 0;
if (count($tab1) == count($tab2)) {
    for ($i = 0; $i < count($tab1); $i++) {
        $result += ($tab1[$i] * $tab2[$i]);
    }
    echo ("wynik iloczynu skalarnego: $result");
}else {
    echo ('BŁĄD');
}

echo ("<hr>");

/*1.10.	Napisz program, który dla liczby naturalnej wypisze poniższe wzory (jeden pod drugim).
W przypadku niepoprawnych danych program ma ponownie je wczytać.
Zakładamy, że na końcu linii jest wyłącznie znak nowej linii.*/


$numberOfStars = 5;
for ($j=$numberOfStars; $j>0; $j--) {
    for($y=$numberOfStars; $y>=$j; $y--) {
        echo '*';
    }
    echo '<br>';
}
for ($j=$numberOfStars; $j>0; $j--) {
    for($y=1; $y<=$j; $y++) {
        echo '*';
    }
    echo '<br>';
}


for ($j=$numberOfStars; $j>0; $j--) {
    for($y=$numberOfStars; $y>=$j; $y--) {
        echo "&nbsp&nbsp";
    }
    for($y=1; $y<=$j; $y++) {
        echo '*';
    }
    echo '<br>';
}
for ($j=$numberOfStars; $j>0; $j--) {
    for($y=1; $y<=$j; $y++) {
        echo "&nbsp&nbsp";
    }
    for($y=$numberOfStars; $y>=$j; $y--) {
        echo '*';
    }
    echo '<br>';
}
echo ("<hr>");

/*1.11.	Pangramem nazywamy tekst, w którym każda litera alfabetu łacińskiego występuje przy najmniej raz.
Najpopularniejszym pangramem w języku angielskim jest zdanie: The quick brown fox jumps over the lazy dog.
Napisz program, który sprawdzi czy dany tekst jest pangramem.
W przypadku pozytywnej odpowiedzi program powinien wyświetlić wartość true, w przeciwnym przypadku program powinien wyrzucićwartość false.
Rozważ różne przypadki i wielkość liter (która nie powinna mieć znaczenia)!!!*/

$sentence = 'No siema czy ja uywam wszyskich liter alfabetu';
$sentence = strtolower($sentence);
$chars = str_split($sentence);
$chars = str_replace(' ', '', $chars);

$lettersArray = [];
foreach (range('a', 'z')as $i) {
    $lettersArray[] = $i;
}

foreach ($chars as $singleLetter){
    if (in_array($singleLetter, $lettersArray)) {
        unset($lettersArray[array_search($singleLetter, $lettersArray)]);
    }
}

if (count($lettersArray) == 0){
    echo ('użyłeś wszystkich liter');
}else {
    echo count($lettersArray);
    echo (" liter zostało <br>");
    echo implode(",",$lettersArray);
}
echo ("<hr>");

/*1.12.	Napisz program, który będzie miał utworzoną statycznie tablicę dwuwymiarową o wymiarach AxB.
Następnie program ma pobrać od użytkownika liczby
A i B, które mają oznaczać ilość wierszy oraz kolumn tablicy.
Następnie ma pobrać AxB liczb i wypisać transpozycję tej macierzy (patrz poniższy test).
Transpozycja oznacza, że wypisujemy najpierw kolumny, a potem wiersze danej macierzy.
W przypadku sytuacji błędnych program ma wypisać komunikat: BŁĄD i zakończyć działanie.*/

function transpose($array)
{
    $keys = array_keys($array);
    return array_map(function ($array) use ($keys) {
        return array_combine($keys, $array);
    }, array_map(null, ...array_values($array)));
}

$foo = array(
    "fooA" => [ "a1", "a2", "a3"],
    "fooB" => [ "b1", "b2", "b3"],
    "fooC" => [ "c1", "c2", "c3"]
);

print_r( transpose( $foo ));
?>

</body>
</html>