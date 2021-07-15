<?php
session_start();
include "dbconnect.php";   //connecting the database using include method


if(isset($_POST["submit"])) //checks if the user has clicked on the submit button or not
{
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $mname = mysqli_real_escape_string($conn,$_POST["mname"]);  // real escape string adds extra layer of security to the form input
    $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $addr = mysqli_real_escape_string($conn,$_POST["address"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phone"]);
    $username = mysqli_real_escape_string($conn,$_POST["name"]);
    $pass = mysqli_real_escape_string($conn,$_POST["password"]);
    $cpass = mysqli_real_escape_string($conn,$_POST["cpassword"]);

    $password = password_hash($pass,PASSWORD_BCRYPT);// hashing the password using blowfish algorithm
    $cpassword = password_hash($cpass,PASSWORD_BCRYPT); //same as above

    $email_query = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($conn, $email_query);
    
    $emailcount = mysqli_num_rows($query);


    if($emailcount>0)
    {
        echo "Email Already Exists";
    }
    else
    {
         if($pass==$cpass)
         {
             $insertquery = "INSERT INTO users ('',fname, mname, lname, email, address, phone, username, password, cpassword)
            VALUES ('','$fname','$mname','$lname','$email','$addr','$phone','$username','$password','$cpassword')";
             
            $iqeury = mysqli_query($conn,$insertquery);

            if($iqeury)
            {
                    ?>
                    <script>
                        alert("Data inserted sucessfully");
                    </script>
                <?php
            } 
             else
                {
                    ?>
                    <script>
                    alert("Connection failed");
                    </script>
                <?php 
                }
    
         }
         else
         {
            ?>
                    <script>
                    alert("Passwords Don't match");
                    </script>
            <?php 
         }
    }

}