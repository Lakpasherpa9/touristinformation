

<html>  
<head>
    <title> Login Page </title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css" >
</head>
<body>
    <div class="container" >
        <h3> Login Form </h3>
    <div class="form-control">  
        <form action= "validate.php" method="post" id="login">
            <p>
                <label for="username"> Username: </label>
                <input type="text" name="username" id="username" required> 
            </p>
            <p>
                <label for = "password" > Password :    </label>
                <input type = "passoword" name="password" id = "password" required>
            </p> 
            <p>
            
            <button type="submit" form="login" name="submit" > Submit </button> 
            </p>
        </form>
        <a href="Forgot.php"> Forgot Passworf </a> 
    </div>
    </div>
</body> 

</head>