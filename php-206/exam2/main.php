<?php
    session_start();

    $_SESSION['page_visited']++;

    if (isset($_GET['action'])) {
        switch($_GET['action']) {
            case 'logout':
                $_SESSION['sess_uname'] = "";
                echo "<script>
                    location = 'index.php';
                </script>";
            break;

            case 'destroy':
                session_destroy();
                echo "<script>
                    location = 'index.php';
                </script>";
            break;
        }
    }
?>
<html>
    <head>
        <title>Sessions</title>
    </head>

    <body>
        
        <a href="main.php?action=logout">Log Out</a> | 
        <a href="main.php?action=destroy">Destroy</a>
    <br /> <br />
        Welcome <?=$_SESSION['sess_uname'];?>
    </body>
</html>