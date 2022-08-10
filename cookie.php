<?php
    echo "Time Second: ".time();
?>

<html>
    <head>
    <title> Cookies</title>
</head>
<body>
    <center>
        <form name="Form2" method="POST" action="cookie1.php">

        <table>

        <tr>
            <td>Enter username:</td>
            <td> <input type="text" name="txtname" value="<?php
                if(isset($_COOKIE['username'])){
                    echo $_COOKIE['username'];
                } 
            ?>" ></td>
</tr>
<tr>
            <td>Enter password:</td>
            <td> <input type="password" name="txtpass" value="<?php
                if(isset($_COOKIE['password'])){
                    echo $_COOKIE['password'];
                } 
            ?>" ></td>
</tr>
                <tr>
                    <td> <input type="checkbox" name="remember" >Remember Me </td>
            </tr>

            <tr>
                    <td> <input type="submit" name="submit" value="Login" > </td>
            </tr>
</table>
</form>
</center>
</body>
</html>