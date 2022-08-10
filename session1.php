<?php

    session_start();

    if(isset($_POST['submit']))
    {
        session_destroy();
        header("location:session.php");
    }

?>

<html>

<body>

<form name="Form1" method="POST" action="session1.php">
    <?php
        if(isset($_SESSION['username'])){

            echo "Welcome".$_SESSION['username'];
    ?>
    <br><br>
    <input type="submit" name="submit" value="Logout">

    <?php
        }
        else
        {
            header("location:session.php");
        }
    ?>
</form>

</body>
</html>