
<html>
<head>
    <title>Registration</title>

</head>
<body>
    <h3> Registration form </h3>
    <form id="register" action="registration.php" method="POST">
        <label for = "fname"> First Name    :  </label>
        <input type = "text" name="fname"  id = "fname"><br>
        <label for = "mname" >Middle name </   label>
        <input type = "text" name = "mname" id = "mname"><br>
        <label for="lname">Last name</label>
        <input type="text" name="lname" id="lname"><br>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email"><br>
        <label for="address"> Address </label>
        <input type="text" name="address" id="address"><br>
        <label for="phone">Phone number</label>
        <input type="number" name="phone" id="phone"><br>
         <label for="uname">username</label>
        <input type="text" name="uname" id="uname"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword"><br>
    <!-- <input type="submit" name="submit" id="submit"> -->
        <button type="submit" form="register" name="submit"> Register</button>

    </form>

    
</body>
</html>
