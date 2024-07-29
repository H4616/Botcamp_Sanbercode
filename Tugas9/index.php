<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <?php
    require('animal.php');
    require('ape.php');
    require('frog.php');


    $sheep = new Animal("shaun");
    echo "nama => $sheep->name <br>";
    echo "jumlah Kaki => $sheep->legs <br>"; 
    echo "tipe Darah => $sheep->cold_blooded <br>";

    echo"<br>";

    $kodok = new Frog("buduk");
    echo "nama =>" . $kodok->name . "<br>";
    echo "jumlah Kaki =>" . $kodok->legs . "<br>";
    echo "tipe Darah =>" . $kodok->cold_blooded . "<br>";
    echo "Kodok Melompat =>" . $kodok->jump() . "<br>"; // "hop hop"

    echo"<br>";

    $sungokong = new Ape("kera sakti");
    echo "nama =>" . $sungokong->name . "<br>";
    echo "jumlah Kaki =>" . $sungokong->legs . "<br>";
    echo "tipe Darah =>" . $sungokong->cold_blooded . "<br>";
    echo "Suara Monyet =>" . $sungokong->yell() . "<br>"; // "Auooo"
    ?>



</body>
</html>