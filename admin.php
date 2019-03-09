<html>
<title>Admin Login</title>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href="images/openbooklogo.png">

<!------ Include the above in your HEAD tag ---------->

<style>

body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}


</style>

  </head>
<body id="LoginForm">

   <?php

   require_once('connection/connection.php');
     
     $a1='';$b='';
     $email='';$password='';
     
   if(isset($_POST['b1'])){
   $email=$_POST['e1'];
   $password=$_POST['p1'];

   $query=mysqli_query($a,'select * from admin_login');
   $array=mysqli_fetch_array($query);

   $db_email=$array['ad_key'];
   $db_password=$array['password'];

   if($email == $db_email && $password==$db_password){

    ?>
    <script>
    document.location.href='admin/index.php?page=1';
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
  
   ?>




<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="POST" action="admin.php">

        <div class="form-group">

          <span> <?php echo" <font color='red'> $a1 </font> "; ?> </span>
         <input type="email" class="form-control" id="e1" name="e1" placeholder="Email Address">
            
        </div>

        <div class="form-group">
            
        <span> <?php echo" <font color='red'> $b </font> "; ?> </span>
            <input type="password" class="form-control" id="p1" name="p1" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary" id="b1" name="b1">Login</button>

    </form>
    </div>
</div></div></div>


</body>
</html>