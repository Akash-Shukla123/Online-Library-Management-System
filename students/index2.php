<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>STUDENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/openbooklogo.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>


    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    
    
    <style>


    #im{
    background:#506353;
    height:400px;
     }
     .btn{
     padding:15px;
     }
     
     .head{
     border-bottom: 5px #000000 solid;
     }
     
     .col-md-3{
     padding:50px;
     }

    
     #bt{
        font-size: 20px;
        color:#f2f2f2;
     }


     #d2 {
    background-color: #ff5050;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

#d1 {
    position: relative;
    display: inline-block;
}

#d3 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

#d3 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

#d3 a:hover {background-color: #2eb82e;}

#d1:hover #d3 {
    display: block;
}

#d1:hover #d2 {
    background-color: #ff5050;
}

#na{
 background-color:#e6e6e6
 color: #000000;
}





#mybtn {
  display:none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#4d4d4d;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 150px;
}

#mybtn:hover {
  background-color:#262626;
}


</style>


  </head>
  
  <body background="img/k.jpg">


  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color:#007acc;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()" style="background-color: #f2f2f2;">Close &times;</button>
  <a href="index.php?spage=1" class="w3-bar-item w3-button" id="bt">Dashboard</a>
  <a href="index.php?spage=2" class="w3-bar-item w3-button" id="bt">Issued Books</a>
  <a href="index2.php?s1page=2" class="w3-bar-item w3-button" id="bt">Your Profile</a>
  <a href="index2.php?s1page=3" class="w3-bar-item w3-button" id="bt">Change Account</a>
  <a href="#" class="w3-bar-item w3-button" id="bt">Logout</a>
</div>

<div id="main">

   <div class="w3-teal" id="sec1">
        <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
        <table width="100%">
            <tr><td>
           <font style="font-size: 30px;">Hii sname</font><font style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Welcome To Your LIBRARY</font>
       </td>
       <td align="right">
        <table>
            <tr><td style="padding: 10px;">

<div class="dropdown" id="d1">
  <button class="dropbtn" id="d2"><i class="fa fa-bell-o" aria-hidden="true"></i>  Notifications</button>
  <div class="dropdown-content" id="d3">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

         <a href="" style="color:#FFFFFF;"></a></td>
         <td style="padding: 10px;">
         <a href=""><img src="img/lib.jpg" align="image" class="img-responsive img-circle" height="50" width="50"></a></td></tr>
     </table>
       </td></tr>
       </table>

   </div>
  </div>

<marquee style="font-size: 20px;" id="c1"><font style="color: red;">New Books Are available</font><a href="index2.php?s1page=1">&nbsp;&nbsp;Click Here To See it.</a></marquee>



<div class="content1">
        <?php
          $q='';
          if(isset($_GET['s1page'])){
            $q=$_GET['s1page'];

            switch ($q) {
                case '':
                case '1':
                    include('books.php');
                    break;
                
                case '2':
                    include('profile.php');
                    break;

                case '3':
                    include('password.php');
                    break;

            }
          }
        ?>
   </div>



<div class="footer" style="background-color:#003399; width: 100%;">
     <div class="container">
      <br><br>
       <form style="padding: 30px">
        <h2 style="color: #FFFFFF;">For More Updates About Your College</h2><br>
          <div class="form-group">
             <label for="college"><font color="white"><h3>Choose Your college</h3></font></label>
             <input type="text" class="form-control" id="college" placeholder="college">
           </div>

          <div class="form-group">
             <label for="branch"><font color="white"><h3>Your branch</h3></font></label>
             <input type="text" class="form-control" id="branch" placeholder="branch">
          </div>
          <div class="form-group">
            <br>
             <button type="submit" class="btn btn-default" style="width: 150px;"><h5><strong>SUBMIT</strong></h5></button>
          </div>
       </form>
     </div>
    <div class="sfoot" style="padding: 10px;">
      <h5 style="color: #FFFFFF;">&copy;Copyright Reserved by 2018 Online Library</h5>
    </div>

 </div>

</div>

    <a href="#sec1" onclick="scrollFunction()" id="ln"><button id="mybtn" title="Go to top"><img src="img/m.png" width="50" height="50" class="img-responsive img-circle"></button></a>
   


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#ln").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("mybtn").style.display = "block";
    } else {
        document.getElementById("mybtn").style.display = "none";
    }
}

</script>


</body>
</html>