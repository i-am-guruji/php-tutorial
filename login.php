<html>
<body>
<center>
    <h1> Student Ragistration Form </h1>
    <form name="login" method="POST" action="">
<table>

    <tr>
        <td>First Name:</td>
        <td> <input type="text" name="FirstName" required> </td>
    </tr>

    <tr>
        <td>Last Name:</td>
        <td> <input type="text" name="LastName" required> </td>
    </tr>

    <tr>
        <td>Mobile No:</td>
        <td> <input type="number" name="MobileNo" required> </td>
    </tr>

    <tr>
        <td>DOB:</td>
        <td> <input type="date" name="Dob" required> </td>
    </tr>

    <tr>
        <td>Gendar:</td>
        <td> <input type="radio" name="male" value="male"> Male
        <input type="radio" name="female" value="female"> Female </td>
    </tr>

    <tr>
        <td>Hobby:</td>
        <td> <input type="checkbox" name="dancing" value="dancing"> Dancing
        <input type="checkbox" name="singing" value="singing"> Singing
        <input type="checkbox" name="cricket" value="cricket"> Cricket </td>
    </tr>

    <tr>
        <td>Email:</td>
        <td> <input type="mail" name="Email" required> </td>
    </tr>

    <tr>
        <td>Password:</td>
        <td> <input type="password" name="password" required> </td>
    </tr>

    <tr>
        <td> <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset"> </td>
    </tr>
        

</table>
</form>
<center>
</body>
</html>