<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $Name = $_POST['txtname'];
        $Pass = $_POST['txtpass'];

        if($Name=="satyam" && $Pass=="123")
        {
            $_SESSION['username']= $Name;
            header("location:session1.php");
        }
        else
        {
            echo "Worng Username and password";
        }
    }

?>

<html>
    <head> <title>use of session</title></head>
    <body>

    <center>
    <form name="Form1" method="POST" action="">
        <h1> Session </h1>
    <table>
    <tr>
    <td>Enter User Name: </td>
    <td> <input type="text" name="txtname" required> </td>
</tr>

<tr>
    <td>Enter Password: </td>
    <td> <input type="password" name="txtpass" required> </td>
</tr>

<tr>
    
    <td> <input type="submit" name="submit" value="submit"> </td>
</tr>
</table>
</form>
</center>
</body>
</html>