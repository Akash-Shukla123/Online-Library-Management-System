<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	
	
	</head>

	<body>

  <?php
	 
	 require_once('connection/connection.php');

	 $sid=''; $isbn='';

	 date('d/m/y',strtotime('+30 days')) . PHP_EOL;

	 $q1=mysqli_query($a,"select * from books where isbn = '$isbn' ");
	 $a1=mysqli_fetch_array($q1);
	 $db_name=$a1['book_name'];


   if(isset($_POST['submit'])){
		
		$sid=$_POST['st_id'];
		$isbn=$_POST['isbn'];

			  $c=rand();
				
			if($sid!=NULL && $isbn!=NULL){
				
				$dt=date('d/m/y');
				$auth1=$_POST['author'];
	
				if($auth!=$db_auth && $c!=$db_id){
					$sql = "INSERT INTO issued_books (isbn, s_id, issued)
							VALUES ('$isbn', '$sid','$dt')";
	
							if (mysqli_query($a, $sql)) {
								echo "Book Issued successfully";
							}
	
							else {
								echo "Error: " . $sql . "<br>" . mysqli_error($a);
							}
	
				}
			}
		
	 }

  ?>

<table align="center" width="100%" height="100%" style="height:500px;">
	<tr><td><div class="col-sm-6">
		<font color="#0066FF" size="+2"><b><u>ISSUE A NEW BOOK</u></b></font>
		</div>
		<br><br><br><br>
		</td>

		
<tr><td><table align="center" width="75%" height="100%">
	<tr><td>
	<div class="thumbnail" style="background-color:#EFEFEF;">
		<div class="navbar" style="background-color:#00FFCC; padding:10px;">
		   <font color="#000000" size="+1"><b>BOOK DETAILS</b></font>
		  </div>

	
	
	<form class="form-horizontal" action="index.php?page=8" method="POST">
  <div class="form-group">
    <label for="st_id" class="col-sm-3 control-label">Student ID  <font color="#FF0000" size="+1">*</font></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="st_id" name="st_id">
    </div>
  </div>
  <div class="form-group">
    <label for="isbn" class="col-sm-3 control-label">ISBN No. Or Book Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="isbn" name="isbn"><br>
	  <input type="text" class="form-control" id="bookname" disabled="disabled" value="<?php echo $db_name; ?> ">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8" align="right">
	<br><br>
	  
	  <table width="100%" align="right">
	  	<tr><td align="right">
		  <button type="submit" class="btn btn-lg btn-success">Issue Book</button>&nbsp;</td>
		  <td>
		  <button type="reset" class="btn btn-lg btn-danger">Reset</button>
	  </td></tr></table>

    </div>
  </div>
</form>
</div>
</div></td></tr></table>
</td>
</tr></table>


		
	</body>
	</html>