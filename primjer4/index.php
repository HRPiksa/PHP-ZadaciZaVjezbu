<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - primjer 4</title>
</head>

<body>
    <h1>Create an Account</h1>

    <form>
        Email:
        <br>
        <input type="email" name="email">

        <br><br>

        Password:
        <br>
        <input type="password" name="password">

        <br><br>

        Age:
        <br>
        <select name="age">
            <?php
                echo '<option value="">Select Age</option>';
                for ( $x = 18; $x <= 99; $x++ ) {
                    echo '<option value="' . $x . '">' . $x . '</option>';
                }
            ?>
        </select>

        <br><br>

        Tell us a little about yourself:
        <br>
        <textarea rows="5" cols="50" name="about" wrap="physical"></textarea>

        <br><br>

        <input type="checkbox" value="agree" name="agree"> I agree to the <a href="">terms of service</a>

        <br><br>

        <input type="submit" value="Sign up">

    </form>
</body>

</html>