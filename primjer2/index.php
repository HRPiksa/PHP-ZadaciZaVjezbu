<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - primjer 2</title>
</head>

<body>
    <?php
        // Varijable
        $heading1 = "Delidded Web Design";

        $text = "Making <strong>great</strong> sites since:<br>";

        $year = 2018;

        $heading2 = "Our services";

        $services = array( 'HTML', 'CSS', 'And <i>Javascript</i> programming' );

        // Prikaz
        echo "<h1>$heading1</h1>";

        echo "<p>";
        echo $text . $year;
        echo "</p>";

        echo "<h2>$heading2</h2>";

        echo "<ul>";
        foreach ( $services as $servis ) {
            echo "<li>$servis</li>";
        }
        echo "</ul>";
    ?>
</body>

</html>