<?php
require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="for-header">
        <header>
            <a href="index.html" class="logo"><p class="logo">TravelWorld</p></a>
            <nav>
                <ul class="nav_links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html#Bus search">Bus search</a></li>
                    <li><a href="index.html#h1">About Us</a></li>
                    <li><a href="index.html#h2">Contact Us</a></li>
                </ul>
            </nav>
            <a class="cta" href="signin.html"><button>My Account</button></a>
        </header>
    </div>
    <div class="main">
        <div class="gradient">
            <div class="text">
                <h1>Welcome To TravelWorld</h1>
            </div>
        </div>

        <div class="account">
            <h2 style="text-align: center;">Create Account</h2>
            <form action="" class="signup">
                First Name: <br>
                <input type="text" name="f_name" placeholder="First Name" id="fname" required /><br />
                Last Name: <br>
                <input type="text" name="l_name" placeholder="Last Name" id="fname" required /><br />
                Email: <br>
                <input type="email" name="u_email" placeholder="Email" id="fname" required /><br />
                Password: <br>
                <input type="password" name="u_pass" placeholder="Password" id="fname" minlength="8" required /><br />
                <div class="displays">
                    <div class="buttons">
                        <button type="submit" name="u_create" class="submit">Create</button>
                        <button type="button" class="cancel">Cancel</button>
                    </div>
                    <div class="account-exist">
                        <h4>Already have an account? &nbsp;&nbsp;<a href="signin.html">Login</a></h4>
                    </div>
                </div>
            </form>
        </div>

    </div>

</body>
<?php
    if(isset($_POST['u_create'])){
        $f_name=$_POST['f_name'];
        $l_nmae=$_POST['l_name'];
        $u_email=$_POST['u_email'];
        $u_pass=md5($_POST['u_pass']);

    $sql="INSERT INTO users (f_name,l_name,u_email,u_pass)
       VALUES('$f_name','$l_nmae','$u_email','$u_pass')";

     if(mysqli_query($conn,$sql)){
   echo"<script> alert ('Register Successful');</script>";
  }
    else{
   echo "ERROR:". $sql. "<br>". mysqli_error($conn);
    } 
}
?>
</html>
