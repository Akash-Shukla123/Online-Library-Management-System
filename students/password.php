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

</head>

<body>

  <div class="profilemain">

    <h2 align="center">ACCOUNT SETTINGS</h2><br>

    <table width="60%" align="center" class="panel" style="border:2px #000000 solid;">
        <tr><td>

         
         <form style="padding: 30px">

              <div class="form-group">
                    <label for="emailad"><h5>Enter your email address</h5></label>
                    <input type="text" name="emailad" id="emailad" class="form-control" placeholder="email id">
                </div>
                <div class="form-group">
                    <label for="sid"><h5>Change Student ID</h5></label>
                    <input type="text" name="st_id" id="sid" class="form-control" placeholder="Student ID">
                </div>
               <br><br>
                <div class="form-group">
                    <label for="old_p"><h5>Old Password</h5></label>
                    <input type="text" name="old_p" id="old_p" class="form-control" placeholder="Old password">
                </div>

                <div class="form-group">
                    <label for="new_p"><h5>New Password</h5></label>
                    <input type="text" name="new_p" id="new_p" class="form-control" placeholder="New password">
                </div>

                <div class="form-group">
                    <label for="retype_p"><h5>ReType Password</h5></label>
                    <input type="text" name="retype_p" id="retype_p" class="form-control" placeholder="Retype Your password">
                </div>
              <br>
                <button type="submit" class="btn btn-danger">SUBMIT</button>

        </form>

</td>
</tr></table>

  </div>
<br><br><br><br>

</body>
</html>