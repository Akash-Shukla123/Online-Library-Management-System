<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/openbooklogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	a:hover{
	cursor:pointer;
	}
	
	#box1:hover{
	background-color:#000000;
	}
    
	 #box1{
	 background-color:#4033DB;
	 }
	 
	 #box2:hover{
	background-color:#000000;
	}
    
	 #box2{
	 background-color:#33C62F;
	 }
	 
	 #box3:hover{
	background-color:#000000;
	}
    
	 #box3{
	  background-color:#CFC221;
	 }
	 
	 #box4:hover{
	background-color:#000000;
	}
    
	 #box4{
	 background-color:#E83737;
	 }
	 
	 


form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
	</style>




</head>
<body>

<div class="wrapper">

    <div class="sidebar" id="side" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
				<img src="img/IMG_20171209_021032_438_1[482].jpg" height="50" width="50" class="img-circle">
                    Admin
                </a>
            </div>

            <ul class="nav">

                <li class="active">
                        <a href="?page=1">
						              <i class="fa fa-home"></i>
                          <p>Dashboard</p></a>
                    </a>
                </li>


                <li class="">
                   
                        <a onclick="myFunction('Demo1')" class="w3-left-align">
                   <i class=" fa fa-group"></i> <p>Authors</p></a>

                       <div id="Demo1" class="w3-hide">
                           <a href="?page=2" class="w3-button w3-block w3-left-align"><h5>Add Authors</h5></a>
                           <a href="?page=3" class="w3-button w3-block w3-left-align"><h5>Manage Authors</h5></a>
                       </div>

                </li>

                <li class="">
                   
                        <a onclick="myFunction('Demo2')" class="w3-left-align">
                   <i class=" fa fa-th"></i> <p>Categories</p></a>

                       <div id="Demo2" class="w3-hide">
                           <a href="?page=4" class="w3-button w3-block w3-left-align"><h5>Add Categories</h5></a>
                           <a href="?page=5" class="w3-button w3-block w3-left-align"><h5>Manage Category</h5></a>
                       </div>

                </li>


                    <li class="">
                   
                        <a onclick="myFunction('Demo3')" class="w3-left-align">
                   <i class="fa fa-book"></i> <p>Books</p></a>

                       <div id="Demo3" class="w3-hide">
                           <a href="?page=6" class="w3-button w3-block w3-left-align"><h5>Add Books</h5></a>
                           <a href="?page=7" class="w3-button w3-block w3-left-align"><h5>Manage Books</h5></a>
                       </div>

                </li>
                    
                     <li class="">
                   
                        <a onclick="myFunction('Demo4')" class="w3-left-align">
                   <i class=" fa fa-list"></i> <p>Issued Books</p></a>

                       <div id="Demo4" class="w3-hide">
                           <a href="?page=8" class="w3-button w3-block w3-left-align"><h5>Issue Books</h5></a>
                           <a href="?page=9" class="w3-button w3-block w3-left-align"><h5>Manage Issued Books</h5></a>
                       </div>

                </li>

               <li>
                    <a href="?page=10">
                        <i class="  fa fa-id-card-o"></i>
                        <p>Registered Students</p>
                    </a>
                </li>

                <li>
                    <a href="?page=11">
                        <i class="fa fa-user-circle"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

  

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">MESSAGES</a>
					
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a id="n12" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
							                 	<p class="hidden-lg hidden-md">MESSAGES</p>
                            </a>
                        </li>
                    </ul>
					
                    <ul class="nav navbar-nav navbar-right">
					   <li>
                           <form class="example" action="/action_page.php" style="padding:10px;">
									 <input type="text" placeholder="Search.." name="search" id="search">
							 <button type="submit"><i class="fa fa-search" id="searchbtn"></i></button>
							</form>
                     </li>
                        <li>
                           <a id="n13">
                               <p>Account</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
				       
             </div>
            </nav>
    

 <div id="content" style="padding:20px;">
    <?php
      $id='';
      if(isset($_GET['page'])){
          $id=$_GET['page'];

          switch($id){
              case '':
              case '1':
              include('dashboard.php');
              break;

              case 2:
              include('add_auth.php');
              break;
              
              case 3:
              include('man_auth.php');
              break;

              case 4:
              include('add_cat.php');
              break;

              case 5:
              include('man_cat.php');
              break;

              case 6:
              include('add_books.php');
              break;
              
              case 7:
              include('man_books.php');
              break;

              case 8:
              include('issue_books.php');
              break;

              case 9:
              include('issue_man_books.php');
              break;

              case 10:
              include('reg_st.php');
              break;

              case 11:
              include('settings.php');
              break;
          }
      }
    ?>
   
</div>

</div>
<br><br>



<div class="footer">

  <table width="85%" align="right">
    <tr><td>
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>

          </td></tr></table>
        </div>



 <!--   Core JS Files -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
  
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




  <script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<script>

/*$ (document).ready(function(){

   $("#n2").click(function(){
       
       $("#content").load("add_auth.php");
   });

   $("#n3").click(function(){
       
       $("#content").load("man_auth.php");
   });

   $("#n4").click(function(){
       
       $("#content").load("add_cat.php");
   });

   $("#n5").click(function(){
       
       $("#content").load("man_cat.php");
   });

   $("#n6").click(function(){
       
       $("#content").load("add_books.php");
   });

   $("#n7").click(function(){
       
       $("#content").load("man_books.php");
   });

   $("#n8").click(function(){
       
       $("#content").load("issue_books.php");
   });

   $("#n9").click(function(){
       
       $("#content").load("issue_man_books.php");
   });

   $("#n10").click(function(){
       
       $("#content").load("reg_st.php");
   });

   $("#n11").click(function(){
       
       $("#content").load("settings.php");
   });

   $("#n12").click(function(){
       
       $("#content").load("messages.php");
   });

   $("#n13").click(function(){
       
       $("#content").load("account.php");
   });

});*/

</script>
	




</body>
</html>