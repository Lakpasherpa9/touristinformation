<?php
 include "dbconnect.php";

 if(isset($_POST["submit"]))
 {
     $name = $_POST["username"];  // Passes the name in the login form to this variable
     $pass = $_POST["password"];     // Passes the Password in the login  form to this variable

     $name_search = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'"; 
     $runsql = mysqli_query($conn,$name_search);
     $result = mysqli_num_rows($runsql);

     if($result)
    {
        echo "Sucessfully logged in";
       //  $name_pass = mysqli_fetch_assoc($runsql);

        // $fetched_pass = $name_pass["password"];

        //$pass_verify = password_verify($pass,$fetched_pass);

      /*  if($pass_verify)
        {
            echo "login sucessfull";
          //  header('location : home.php');
        }
        else
        {
            echo "invalid password" ;
        }*/

    }
    else
    {
        echo "invalid username";
    }
}
        
?>