<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - primjer 1</title>
</head>

<body>
    <h2>PHP - primjer 1</h2>

    <br>
    <?php
        $ime = "Željko";
        $prezime = "Frketić";

        // Ispis imena
        echo "Ime: $ime";
        echo "<br><br>";

        // Ispis prezimena
        echo "Prezime: $prezime";
        echo "<br><br>";

        // Ispis imena i prezimena
        echo "Ime i prezime: " . $ime . " " . $prezime;
        echo "<br>";
    ?>
</body>

</html>
