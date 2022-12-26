<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep internetowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>

<body>
    <section class="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
         </section>

    <section class="logo">
            <h2>Podzespoły komputerowe</h2>
         </section>

    <section class="main">
            <h1>Dzisiejsze promocje</h1>
            <table>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
                <?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'sklep';

$conn = mysqli_connect($server, $user, $password, $db);
if(!$conn){
    echo "Brak połączenia z bazą".mysqli_error($conn);}
    else {
        $zapytanie = "SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena < 1000;";
        $wynik = mysqli_query($conn, $zapytanie);
        //$echo = mysqli_fetch_assoc($wynik);
        //print_r($echo);
        if(mysqli_num_rows($wynik) > 0){
            while($echo = mysqli_fetch_assoc($wynik)){
                echo '<tr>';
                echo '<td>'.$echo['id'].'</td>'.'<td>'.$echo['nazwa'].'</td>'.'<td>'.$echo['opis'].'</td>'.'<td id="cena">'.$echo['cena'].'</td>';
                echo "</tr>";
            }
        }
    }
mysqli_close($conn);
?>
            </table>
         </section>

    <section class="s1">
            <img src="scalak.jpg" alt="promocje na procesory">
         </section>

    <section class="s2">
            <h2>Nasz Sklep Komputerowy</h2>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="blank">edata</a></p>
         </section>

    <section class="s3">
            <p>zadzwoń 601 602 603</p>
         </section>

    <section class="s4">
            <p>Stronę wykonał: Alan Maroński</p>
         </section>
    
</body>

</html>