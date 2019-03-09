
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Online Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="online library" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->

            <style>


           #d1:hover{
          background-color: #1aa3ff;
          width: 100%;
       }

       #d1{
        text-align: center;
       }
#ul1{
    background-color: white;
    width: 400px;
}

a{
    font-weight: bold;
}





#u1,#p1 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.b1 {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.l1{
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.b1:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    color: white;
    padding: 10px 18px;
    background-color: #f44336;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
#c1 {
    padding: 16px;
    width:100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
#id01,#id02,#id03 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
#m1 {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}




</style>



</head>
<body>
    <!-- banner -->
    <div class="inner-banner" style="height: 500px;">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
              <h1><a class="navbar-brand" href="index.php">Subject
                            <span><br><h5>Education</h5></span>
                        </a></h1><br>
                  
          
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                     <i class=" fa fa-bars" style="font-size: 30px; color: white;"></i>
                  </button>
 
               
                <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent" style="width: 470px;">
                    <ul class=" navbar-nav ml-auto" style="width: 100%;">
                                <li class="nav-item active" style="padding: 20px;">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                    
                                </li>

                                <li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3" style="padding: 20px;">
                                    <a class="nav-link" href="about.php">About Us</a>
                                    
                                </li>
                                <li class="nav-item dropdown" style="padding: 20px;">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Portals
                                        <span class="caret"></span>
                                    </a>
                                    <br><br>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1" id="ul1">
                                        <li><button onclick="document.getElementById('id02').style.display='block'" style="width:100%;font-size: 16px;" class="dropdown-item block l1">Admin Login</button></li>
                                        <li class="divider"></li>
                                        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;font-size: 16px;" class="dropdown-item block l1">Student Login</button></li>  
                                        <li><button onclick="document.getElementById('id03').style.display='block'" style="width:100%;font-size: 16px;" class="dropdown-item block l1">Student Sign Up</button></li>
                                    </ul>
                                
                                    
                                </li>


                                <li class="nav-item dropdown" style="padding: 20px;">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Others
                                        <span class="caret"></span>
                                    </a>
                                    <br><br>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2" id="ul1">
                                        <li><a class="dropdown-item block" href="gallery.php" style="font-size: 20px; color: black;" id="d1">Gallery</a></li>
                                        <li class="divider"></li>
                                        <li><a class="dropdown-item" href="contact.php" style="font-size: 20px; color: black;" id="d1">Contact us</a><br></li>  
                                    </ul>
                                </li>
                    </ul>
                </div>
			</nav>
        </header>
        <!-- //header -->



        <!--Modal Login-->

        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" id="m1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/boy.png" height="170" alt="Avatar" class="avatar">
    </div>

    <div class="container" id="c1">
      <label for="uname"><b>Student Id</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required id="u1">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required id="p1">
        
      <button type="submit" class="b1">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" id="c1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<!--Admin Login-->


<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" id="m1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/admin.png" height="170" alt="Avatar" class="avatar">
    </div>

    <div class="container" id="c1">
      <label for="uname"><b>Admin Key</b></label>
      <input type="text" placeholder="Enter Username" name="uname1" required id="u1">

      <label for="psw"><b>Admin Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required id="p1">
        
      <button type="submit" class="b1" style="background-color:#2eb8b8; ">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" id="c1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--Student Sign up-->
    
    <div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" id="m1">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/signup.jpg" height="170" alt="Avatar" class="avatar">
    </div>

    <div class="container" id="c1">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Username" name="uname2" required id="u1">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw2.1" required id="p1">

      <label for="psw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw2.2" required id="p1">
        
      <button type="submit" class="b1" style="background-color:#bf40bf; width: 30%;">Sign Up</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" id="c1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>




       
    </div>
	 <!-- //banner-text -->
	   <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- contact --><br><br><br><br>
    <section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
			<h2 class="heading-agileinfo text-center  mb-4">Get In <span> Touch</span><br><br></h2>
			<div class="container pt-sm-5">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> California, USA

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+1 234 567 8901</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact">
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4><br><br>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder=""></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="Submit" style="height: 60px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
<!--/newsletter-->
    <footer class="newsletter_right pymd-5 py-4" id="footer">
        <div class="container" style="padding: 40px;">
            <div class="inner-sec py-md-5 py-3">
                <div class="row mb-md-4 mb-md-3">
                    <div class="col-lg-3 col-md-6 social-info text-left">
                       <h3 class="tittle1 foot mb-md-5 mb-4" style="color: white;">Get in touch</h3>
                       <br>
                        <p>0926k 4th block building,king Avenue, </p>
                        <p class="my-2"> New York City,USA</p>
                        <p class="phone">phone: +0444 555 6789</p>
                        <p class="phone my-2">Fax: +0444 555 6789</p>
                        <p class="phone">Mail:
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-6 social-info text-left">
                     <h3 class="tittle1 foot mb-md-5 mb-4" style="color: white;">About Us</h3>
                     <br>
                       <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus.
                        Nulla porttitor accumsana tincidunt. Vestibulum ante ipsum primis tempus convallis.</p>

                    </div>
                    <div class="col-lg-6 col-md-12 n-right tex-left">
                        <h3 class="tittle1 foot mb-md-5 mb-4" style="color: white;">Subscribe our Newsletter</h3>
                        <br>
                        <form action="#" method="post">
                            <div class="form-group d-flex">
                                <input class="form-control" type="email" name="Email" placeholder=" Email Address" required=""><br>
                                <input class="form-control submit text-uppercase" type="submit" value="Subscribe" style="height: 50px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-3" style="padding: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">      
                    <p class="copy-right mt-2" style="color: white;">&copy; 2018 Subject. All Rights Reserved
                    </p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons scial justify-content-end">
                        <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//newsletter-->
<!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>