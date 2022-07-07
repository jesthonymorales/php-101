<?php

    if (isset($_POST['txtAge'])) {
        if ($_POST['txtAge'] >= 1 && $_POST['txtAge'] <= 19) {
            echo "The Person is a STUDENT";
        } else if ($_POST['txtAge'] >= 20 && $_POST['txtAge'] <= 25) {
            echo "The Person is a EMPLOYEE";
        } else if ($_POST['txtAge'] >= 26 && $_POST['txtAge'] <= 30) {
            echo "Have a FAMILY";
        } else {
            echo "The person is AGELESS";
        }
    }
?>

<html>
    <head>
        <title>Forms</title>
    </head>

    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Firstname: 
            <input type="text" name="txtFname" id="txtFname">
            <br />
            Lastname: 
            <input type="text" name="txtLname" id="txtLname">
            <br />
            Age: 
            <input type="text" name="txtAge" id="txtAge">

            <br />

            <input type="submit" value="submit">
        </form>
    </body>
</html>