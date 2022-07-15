<?php
    session_start();
    if (isset($_POST['btnSubmit'])) {
        $sUname =   $_POST['txtUname'];
        $sPword =   $_POST['txtPword'];

        if ($sUname === "SessionAdmin" && $sPword === "SessionPass") {
            $_SESSION['sess_uname'] = $sUname;
            if (isset($_SESSION['page_visited'])) {
                $_SESSION['page_visited']++;
            } else {
                $_SESSION['page_visited'] = 0;
            }
            echo "<script>
                    location = 'main.php';
                </script>";
        } else {
            echo "Invalid username or password! <br />";
            $sDisplay  = " none;";
        }
    }
?>
<html>
    <head>
        <title>Sessions</title>
    </head>

    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Username: 
            <input type="text" name="txtUname" id="txtUname">
            <br />
            Password: 
            <input type="password" name="txtPword" id="txtPword">

            <br />

            <input type="submit" name="btnSubmit" id="btnSubmit" value="submit">
        </form>
    </body>
</html>