<!DOCTYPE html>
<html lang="en" >

<head>
  <link rel="icon" type="image/png" href="images/openbooklogo.png">
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body background="images/tt.jpg">

<?php

require_once('connection/connection.php');
  session_start();
  $a1='';$b='';
  $email='';$password='';
  
if(isset($_POST['log'])){
$email=$_POST['em2'];
$password=$_POST['psw2'];

$query=mysqli_query($a,"select * from user_login where email='$email' ");
$array=mysqli_fetch_array($query);

$db_email=$array['email'];
$db_password=$array['password'];
$db_sid=$array['s_id'];

if($email == $db_email && $password==$db_password){
$_SESSION['stid']=$db_sid;
 ?>
 <script>
 document.location.href='students/index.php?spage=1';
 </script>

 <?php
}

else if($email != $db_email && $password!=$db_password){
 $a1='wrong email id';
 $b='wrong password';
}

else if($email != $db_email && $password==$db_password){
  $a1='wrong email id';
}

else if($email ==NULL && $password==$db_password){
 $a1='wrong email id';
}
 

else if($email == $db_email && $password!=$db_password){
$b='wrong password';
}

else if($email == $db_email && $password==NULL){
 $b='wrong password';
 }

else if($email ==NULL && $password==NULL){
 $a1='wrong email id';
 $b='wrong password';
 }

else {
 $a1='';
 $b='';
}
}

$fname='';$lname='';
$email2='';$pasword2='';

if(isset($_POST['get'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email2=$_POST['em1'];
$password2=$_POST['psw1'];

$query1=mysqli_query($a,"select * from user_login where password='$password2' ");
$array1=mysqli_fetch_array($query1);

$db_psw=$array1['password'];

$c=rand();
if($email2!=NULL && $password2!=NULL && $fname!=NULL && $lname!=NULL && $password2!=$db_psw){
  $sql = "INSERT INTO user_login (s_id,email,password)
              VALUES ($c,'$email2','$password2')";

  $sql1 = "INSERT INTO user_profile (sid,first_name,last_name,email_id,country,phone_no,image,about)
          VALUES ($c,'$fname','$lname','$email2','','','','')";
	
							if (mysqli_query($a, $sql) && mysqli_query($a, $sql1)) {
                $_SESSION['sid']=$c;
								?>
                 <script>
                 document.location.href="students/index.php?page=1";
                 </script>
                 
                <?php
							}
	
							else {
								echo "Error: " . $sql . "<br>" . mysqli_error($a);
							}
}

else{
  ?>
  <script>
  document.location.href="signin.php"
  </script>
  <?php
}

}

?>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="signin.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="em1" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="psw1" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block" name="get">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="signin.php" method="POST">
          
            <div class="field-wrap">
            <span> <?php echo" <font color='red'> $a1 </font> "; ?> </span>
            <br><br>
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="em2" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
          <span> <?php echo" <font color='red'> $b </font> "; ?> </span>
          <br><br>
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="psw2" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" type="submit" name="log">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index1.js"></script>




</body>

</html>
