<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - primjer 6</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
        $data = array(
            array( "Rbr." => '1.', "Prezime" => 'Ivic', "Ime" => 'Iva', "Datum prijave" => '2011-03-01', "Placeno" => 'Da' ),
            array( "Rbr." => '2.', "Prezime" => 'Peric', "Ime" => 'Petar', "Datum prijave" => '2011-03-05', "Placeno" => 'Ne' ),
            array( "Rbr." => '3.', "Prezime" => 'Maric', "Ime" => 'Maric', "Datum prijave" => '2011-03-06', "Placeno" => 'Ne' ),
            array( "Rbr." => '4.', "Prezime" => 'Anic', "Ime" => 'Ana', "Datum prijave" => '2011-03-08', "Placeno" => 'Da' ),
            array( "Rbr." => '5.', "Prezime" => 'Maric', "Ime" => 'Marko', "Datum prijave" => '2011-03-08', "Placeno" => 'Ne' ),
            array( "Rbr." => '6.', "Prezime" => 'Juric', "Ime" => 'Jure', "Datum prijave" => '2011-03-12', "Placeno" => 'Ne' ),
            array( "Rbr." => '7.', "Prezime" => 'Antic', "Ime" => 'Antoia', "Datum prijave" => '2011-03-15', "Placeno" => 'Da' ),
            array( "Rbr." => '8.', "Prezime" => 'Zvonkic', "Ime" => 'Zvonko', "Datum prijave" => '2011-03-16', "Placeno" => 'Da' ),
            array( "Rbr." => '9.', "Prezime" => 'Marijovic', "Ime" => 'Mario', "Datum prijave" => '2011-03-16', "Placeno" => 'Ne' ),
            array( "Rbr." => '10.', "Prezime" => 'Zlatic', "Ime" => 'Zlatan', "Datum prijave" => '2011-03-16', "Placeno" => 'Da' )
        );
    ?>

    <table>
        <thead style="background-color:lightgray;">
            <?php
                foreach ( $data[0] as $key => $value ) {
                    echo '<th>' . htmlspecialchars( $key ) . '</th>';
                }
            ?>
        </thead>
        <tbody>
            <?php
                foreach ( $data as $key => $value ) {
                    echo '<tr>';
                    $counter = 0;
                    foreach ( $value as $key2 => $data ) {
                        $counter++;
                        if ( $counter == 5 ) {
                            echo '<td><select name="placeno">';
                            if ( htmlspecialchars( $data ) == 'Da' ) {
                                echo '<option value="Ne">Ne</option>';
                                echo '<option selected value="Da">Da</option>';
                            } else {
                                echo '<option selected value="Ne">Ne</option>';
                                echo '<option value="Da">Da</option>';
                            }

                            echo '</select></td>';
                        } else {
                            echo '<td>' . htmlspecialchars( $data ) . '</td>';
                        }
                    }
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>

</html>