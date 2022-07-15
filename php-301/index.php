<?php

    if (isset($_POST['submit'])) {
        $oMailer = mail(
            'jesthony.morales@codeandtheory.com',
            $_POST['txtSubject'],
            $_POST['txtMessage'],
            [
                'From' => $_POST['txtSender'],
            ]
    );
    var_dump($oMailer);
}
?>

<html>

<form action="index.php" method="POST">
    Sender Email:<input type="text" name="txtSender"><br />
    Subject: <input type="text" name="txtSubject"><br />
    Message: <textarea name="txtMessage"></textarea><br />
<input type="submit" name="submit">
</form>
</html>