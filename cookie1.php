<?php
    if(isset($_POST['submit']))
    {
        if(isset($_POST['remember']))
        {
            setcookie("username",$_POST['txtname'],time()+ 3600);
            setcookie("password",$_POST['txtpass'],time()+ 3600);
            echo "Cookies set successfully";
        }
        else
        {
            setcookie("username","");
            setcookie("password","");
            echo "Cookies Not set";
        }
    }

    if(isset($_POST['delete']))
    {
        setcookie("username","",time()-3600);
        setcookie("password","",time()-3600);
        echo "Cookies deleted successfully";
    }
?>

<p><a href="cookie.php"> Go to Login Page </a> </p> <br><br>
<form method="POST" action="">
    <input type="submit" name="delete" value="Delete Cookie">
</form>