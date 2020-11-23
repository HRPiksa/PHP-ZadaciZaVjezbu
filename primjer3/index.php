<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - primjer 3</title>
</head>

<body>
    <?php
        $heading2 = "March Bills";

        $bills = array(
            array( "" => 'Phone', "Price" => '$50', "Due Date" => 'March 1st' ),
            array( "" => 'Car insurance', "Price" => '$100', "Due Date" => 'March 5th' ),
            array( "" => 'Internet', "Price" => '$70', "Due Date" => 'March 10th' )
        );
    ?>

    <h2><?php echo $heading2 ?></h2>

    <table>
        <thead>
            <?php
                foreach ( $bills[0] as $key => $value ) {
                    echo '<th>' . htmlspecialchars( $key ) . '</th>';
                }
            ?>
        </thead>

        <tbody>
            <?php
                foreach ( $bills as $key => $value ) {
                    echo '<tr>';
                    foreach ( $value as $key2 => $data ) {
                        echo '<td>' . htmlspecialchars( $data ) . '</td>';
                    }
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>

</html>