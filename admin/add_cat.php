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

	$cid=NULL;

	if(isset($_GET['id'])){
	$cid=$_GET['id'];
	}

			if($cid!=NULL){
	
				$q2=mysqli_query($a,"select * from category where cat_id ='$cid' ");
				$arr2=mysqli_fetch_array($q2);
		
				$db_id1=$arr2['cat_id'];
				$db_cat1=$arr2['cat_name'];
				$db_stat=$arr2['stat'];
	  }
	
		  $cat='';$c='';$cat1='';$t='';$dt='';$stat1='';
		  if(isset($_POST['add'])){
			$t=$_POST['cid'];
			$dt=date('d/m/y'); 
			$cat1=$_POST['category'];
			$stat1=$_POST['status'];
			
			if($t!=NULL){
		
					$sql1 = "UPDATE category
					SET cat_name = '$cat1', stat='$stat1', updation= '$dt'
					WHERE cat_id = $t";
		
					if (mysqli_query($a, $sql1)) {
						echo "Record updated successfully";
					}
		
					else {
						echo "Error: " . $sql1 . "<br>" . mysqli_error($a);
					}
				  }
						
				
				else{
			 $cat=$_POST['category'];
			 $status=$_POST['status'];
			
			  $q1=mysqli_query($a,'select * from category');
			  $a1=mysqli_fetch_array($q1);
	
			  $date=date('d/m/y');
	
			 $db_cat=$a1['cat_name'];
			  $db_id=$a1['cat_id'];
	
			  $c=rand();
				
			if($cat!=NULL){
				
				$dt=date('d/m/y');
	
				if($cat!=$db_cat && $c!=$db_id){
					$sql = "INSERT INTO category (cat_name, cat_id, stat, creation, updation)
							VALUES ('$cat', '$c','$status', '$date', '$date')";
	
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
		<font color="#0066FF" size="+2"><b><u>ADD CATEGORIES</u></b></font>
		</div>
		<br><br><br><br>
		</td>

		
<tr><td><table align="center" width="75%" height="100%">
	<tr><td>
	<div class="thumbnail" style="background-color:#EFEFEF;">
		<div class="navbar" style="background-color:#00FFCC; padding:10px;">
		   <font color="#000000" size="+1"><b>Category Info</b></font>
		  </div>

	
	
		<form style="padding:10px; font-size:16px;" action="index.php?page=4" method="POST">
		  <div class="form-group">
			<input type="text" class="form-control" hidden id="cid" name="cid" value="<?php if(isset($_GET['id'])) echo $db_id1; ?>">
			<label for="category">Category Name :</label>
			<input type="text" class="form-control" id="category" name="category" value="<?php if(isset($_GET['id'])) echo $db_cat1; ?>">
		  </div>
		  
			<?php  

if(isset($_GET['id'])){

			 if($cid==1){
			 echo"
			 <div class='rad'>
			<label for='status'><strong> Status :</strong></label><br><br>
			<label>
			  <input type='radio' name='status' id='status' value='1' checked> Active
			 </label><br><br>
			  <label>
			  <input type='radio' name='status' value='0' id='status'> Inactive
			</label><br><br>
			</div>";
			 }
			 
			else{
        echo"
			 <div class='rad'>
			<label for='status'><strong> Status :</strong></label><br><br>
			<label>
			  <input type='radio' name='status' id='status' value='1'> Active
			 </label><br><br>
			  <label>
			  <input type='radio' name='status' id='status' value='0' checked> Inactive
			</label><br><br>
			</div>";
			}
		}
			else{
				echo"
				<div class='rad'>
			 <label for='status'><strong> Status :</strong></label><br><br>
			 <label>
				 <input type='radio' name='status' id='status' value='1'> Active
				</label><br><br>
				 <label>
				 <input type='radio' name='status' id='status' value='0'> Inactive
			 </label><br><br>
			 </div>";
			}
    

			?>

		  <button type="submit" class="btn btn-primary" name="add">SUBMIT</button>
		</form>
</div>
</div></td></tr></table>
</td>
</tr></table>



	</body>
	</html>