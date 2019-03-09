<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/openbooklogo.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



     <style>
#cardmain {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  font-family: arial;
  background-color: white;
}

.title {
  color: grey;
  font-size: 18px;
}

.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

#fa1 {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.btn:hover, #fa1:hover {
  opacity: 0.7;
}
</style>

    </head>

<body>


<br><br><br><br>
<div class="bdy">
       

    <table width="90%" align="center" class="panel" style="border:2px #000000 solid;">
      <tr><td>
         <div class="row">
          <div class="col-lg-4">

            <div class="card" id="cardmain" style="height: 100%; border-right: 2px #000000 solid;">
              <img src="img/me.jpg" alt="John" style="width:100%" height="400">
              <h1>Akash Kumar Shukla</h1>
              <p class="title">B-Tech Student</p>
              <p>KIIT University</p>
                <div style="margin: 24px 0;">
                 <a href="#" id="fa1"><i class="fa fa-dribbble"></i></a> 
                 <a href="#" id="fa1"><i class="fa fa-twitter"></i></a>  
                 <a href="#" id="fa1"><i class="fa fa-linkedin"></i></a>  
                 <a href="#" id="fa1"><i class="fa fa-facebook"></i></a> 
               </div>
            <button class="button1">Contact</button>
           </div>
        </div>

        <div class="col-lg-8">

         <form style="padding: 30px">

            <div class="row">

                 <div class="form-group col-lg-6">
                     <label for="firstname"><h5>First Name</h5></label>
                     <input type="text" class="form-control" id="firstname" placeholder="Firstname">
                </div>

                <div class="form-group col-lg-6">
                    <label for="lastname"><h5>Last Name</h5></label>
                    <input type="text" class="form-control" id="lastname" placeholder="Lastname">
                </div>

              </div>

              <div class="form-group">
                    <label for="country"><h5>Your Country</h5></label>
                    <select class="form-control">
                        <option value="0">Select Your Country</option>
                        <option value="1">India</option>
                    </select>
                </div>

              <div class="form-group">
                    <label for="phone"><h5>Phone No.</h5></label>
                    <input type="text" class="form-control" id="phone" placeholder="91+">
                </div>

                <div class="form-group">
                    <label for="upload"><h5>Upload Your Profile Picture</h5></label>
                    <input type="file" id="upload">
                </div>

                <div class="form-group">
                    <label for="about"><h5>About Me</h5></label>
                    <textarea class="form-control" id="about"></textarea>
                </div>

               <button type="submit" class="btn btn-info">Update Your Profile</button>

        </div>
    
    </div>
</td></tr>
</table>

</div>
<br><br><br><br>


</body>
</html>