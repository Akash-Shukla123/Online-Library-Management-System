<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	 <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

	
	</head>

	<body id="body12">

	<?php
	 require_once('connection/connection.php');

	$auth_id=NULL;

	if(isset($_GET['id'])){
	$auth_id=$_GET['id'];
	}

			if($auth_id!=NULL){
	
				$q2=mysqli_query($a,"select * from authors where auth_id ='$auth_id' ");
				$arr2=mysqli_fetch_array($q2);
		
				$db_id1=$arr2['auth_id'];
				$db_auth1=$arr2['auth_name'];
	  }
	
		  $auth='';$c='';$auth1='';$t='';$dt='';
		  if(isset($_POST['a12'])){
			$t=$_POST['get'];
			$dt=date('d/m/y'); 
			$auth1=$_POST['author'];

			if($t!=NULL){
		
					$sql1 = "UPDATE authors
					SET auth_name = '$auth1', updation= '$dt'
					WHERE auth_id = $t";
		
					if (mysqli_query($a, $sql1)) {
						echo "Record updated successfully";
					}
		
					else {
						echo "Error: " . $sql1 . "<br>" . mysqli_error($a);
					}
				  }
	
			
				else{
			 $auth=$_POST['author'];
	
			  $q1=mysqli_query($a,'select * from authors');
			  $a1=mysqli_fetch_array($q1);
	
			  $date=date('d/m/y');
	
			 $db_auth=$a1['auth_name'];
			  $db_id=$a1['auth_id'];
	
			  $c=rand();
				
			if($auth!=NULL){
				
				$dt=date('d/m/y');
				$auth1=$_POST['author'];
	
				if($auth!=$db_auth && $c!=$db_id){
					$sql = "INSERT INTO authors (auth_name, auth_id, creation, updation)
							VALUES ('$auth', '$c', '$date', '$date')";
	
							if (mysqli_query($a, $sql)) {
								echo "New record created successfully";
							}
	
							else {
								echo "Error: " . $sql . "<br>" . mysqli_error($a);
							}
	
				}
			}
				}
		}
	
	?>

<table align="center" width="100%" height="100%" style="height:500px;">
	<tr><td><div class="col-sm-6">
		<font color="#0066FF" size="+2"><b><u>ADD AUTHOR</u></b></font>
		</div>
		<br><br><br><br>
		</td>

		
<tr><td><table align="center" width="75%" height="100%">
	<tr><td>
	<div class="thumbnail" style="background-color:#EFEFEF;">
		<div class="navbar" style="background-color:#00FFCC; padding:10px;">
		   <font color="#000000" size="+1"><b>Author Info</b></font>
		  </div>

	
	
		<form style="padding:10px; font-size:16px;" method="POST" action="index.php?page=2">
		  <div class="form-group">
		  <input type="text" hidden class="form-control" id="get" name="get" value="<?php if(isset($_GET['id'])) echo $auth_id; ?>">
			<label for="author">Author Name :</label>
			<input type="text" class="form-control" id="author" name="author" value="<?php if(isset($_GET['id'])) echo $db_auth1; ?>">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" name="a12" id="a12">SUBMIT</button>
		</form>
</div>
</div></td></tr></table>
</td>
</tr></table>
<div id="result"></div>

	</body>
	</html>