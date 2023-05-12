<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
</head>
<body>
    <header>
        <table>
        <tr>
        <td><img src="img_208967.png" style="width:50px"> </a> </td>
        <td><a href="index.php"> Główna</a></td>
        <td><a href="sklep.php"> Sklep</a></td>
        <td><a href="o_nas.html"> O nas</a></td>
        <td><a href="kontakt.html"> Kontakt</a></td>
    </tr>
    </table>
    <div class="lalique">Logowanie</div>
        
    </header>
    <section>
        <article> Witamy w sklepie napojów! Produkt na dziś:
        <?php
        $servername = "localhost";
$username = "root";
$password = "";
$link = mysqli_connect($servername, $username, $password, "sklep_internetowy_lailaq");
if (!$link) {
die('AWARIA! AWARIA! CAUTION! AWARIA! AWARIA! ' . mysql_error());
}else{

$zapytanie = mysqli_query($link,"SELECT * FROM `napoje` WHERE 1;");
$row = mysqli_fetch_array($zapytanie);

echo $row[2] ;
echo '<br><img src="img/'.$row[0].'.png" style="width:170px">';;
;
}
?>
        </article>
    </section>
  
    <footer></footer>
</body>
</html>