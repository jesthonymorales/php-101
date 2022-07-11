<?php

    $sDisplay = " none;";
    if (isset($_POST['btnSubmit'])) {
        $sUname =   $_POST['txtUname'];
        $sPword =   $_POST['txtPword'];

        if ($sUname === "CookieAdmin" && $sPword === "CookiePass") {
            setcookie('username', $sUname, time() + 60, '/');

            echo "Cookie has been set <br />";
            print_r($_COOKIE);
            echo "<br />";

            $sDisplay  = " ";
        } else {
            echo "Invalid username or password! <br />";
            $sDisplay  = " none;";
        }
        
    }

    if (isset($_POST['btnLogout'])) {
        $aCookie = $_COOKIE;
        setcookie("username", $aCookie['username'], time() - 360,'/'); 

        echo "Cookie has been destroyed.";
        print_r($_COOKIE);
        $sDisplay  = " none;";
    }
?>

<html>
    <head>
        <title>Cookies</title>
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
            <input type="submit" name="btnLogout" id="btnLogout" value="log out" style='display: <?=$sDisplay;?>'>
        </form>
    </body>
</html>