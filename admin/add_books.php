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

	$bn='';$at='';$cat='';$isbn='';$pr='';

	$q2=mysqli_query($a,'select * from authors');
	$q3=mysqli_query($a,'select * from category');

	$b_id=NULL;

	if(isset($_GET['id'])){
	$b_id=$_GET['id'];
	}

			if($b_id!=NULL){
	
				$q2=mysqli_query($a,"select * from books where b_id ='$b_id' ");
				$arr2=mysqli_fetch_array($q2);
		
				$db_id1=$arr2['b_id'];
				$db_b1=$arr2['book_name'];
				$db_a1=$arr2['author'];
				$db_c1=$arr2['category'];
				$db_isbn=$arr2['isbn'];
				$db_pr=$arr2['price'];
				
	$q4=mysqli_query($a,"select * from authors where auth_id='$db_a1' ");
	$q5=mysqli_query($a,"select * from category where cat_id='$db_c1' ");

	$take1=mysqli_fetch_array($q4);
	$take2=mysqli_fetch_array($q5);	

	  }
	
		  $b1='';$a1='';$c1='';$t='';$dt='';$isbn1='';$pr1='';
		  if(isset($_POST['submit'])){
			$t=$_POST['book_id'];
			$dt=date('d/m/y'); 

			$b1=$_POST['book_name'];
			$a1=$_POST['aut_name'];
			$c1=$_POST['cat_name'];
			$isbn1=$_POST['isbn'];
			$pr1=$_POST['price'];

			if($t!=NULL){
		
					$sql1 = "UPDATE books
					SET book_name = '$b1', updation= '$dt', author= '$a1', category= '$c1', isbn= '$isbn1', price='$pr1'
					WHERE b_id = $t";
		
					if (mysqli_query($a, $sql1)) {
						echo "Record updated successfully";
					}
		
					else {
						echo "Error: " . $sql1 . "<br>" . mysqli_error($a);
					}
				  }

	else{

		 $bnm=$_POST['book_name'];
		 $at=$_POST['aut_name'];
		 $cat=$_POST['cat_name'];
		 $isbn=$_POST['isbn'];
		 $pr=$_POST['price'];
	
		 $q1=mysqli_query($a,'select * from books');
		 $a1=mysqli_fetch_array($q1);

		 $date=date('d/m/y');

		$db_bnm=$a1['book_name'];
		 $db_id=$a1['b_id'];

		 $c=rand();
		 
	 if($bnm!=NULL && $at!=NULL && $cat!=NULL && $isbn!=NULL && $pr!=NULL){
		 
		 $dt=date('d/m/y');

		 if($bnm!=$db_bnm && $c!=$db_id){
			 $sql = "INSERT INTO books (isbn, book_name, b_id, author, category, price, creation, updation)
					 VALUES ('$isbn', '$bnm', '$c', '$at', '$cat', '$pr', '$date', '$date')";

					 if (mysqli_query($a, $sql)) {
						 echo "New record created successfully";
					 }

					 else {
						 echo "Error: " . $sql . "<br>" . mysqli_error($a);
					 }

		 }
	 }

	 else{
		 ?>
		 <script>
		   alert('Record is already Inserted !!');
		 </script>
		 <?php
	 }
	}
}
   ?>

<table align="center" width="100%" height="100%" style="height:500px;">
	<tr><td><div class="col-sm-6">
		<font color="#0066FF" size="+2"><b><u>ADD BOOK</u></b></font>
		</div>
		<br><br><br><br>
		</td>

		
<tr><td><table align="center" width="75%" height="100%">
	<tr><td>
	<div class="thumbnail" style="background-color:#EFEFEF;">
		<div class="navbar" style="background-color:#00FFCC; padding:10px;">
		   <font color="#000000" size="+1"><b>Book Info</b></font>
		  </div>

	
	
		<form style="padding:10px; font-size:16px;" action="index.php?page=6" method="POST">
		  <div class="form-group">
			<input type="text" hidden class="form-control" id="book_id" name="book_id" value="<?php if(isset($_GET['id'])) echo $db_id1; ?>">
			<label for="book_name">Book Name :  <font color="#FF0000" size="+2">*</font></label>
			<input type="text" class="form-control" id="book_name" name="book_name" value="<?php if(isset($_GET['id'])) echo $db_b1; ?>">
		  </div>
		  
		  <div class="row">
		  
		   <div class="col-lg-6">
			  <div class="form-group">
				<label for="auth_name">Author Name :  <font color="#FF0000" size="+2">*</font></label>
				<select class="form-control" id="aut_name" name="aut_name">
				    <option value="<?php if(isset($_GET['id'])) echo $db_a1; ?>"><?php if(isset($_GET['id'])) echo $take1['auth_name']; ?></option>
				    <option value="0">Select Category</option>
						<?php 
			         while($a2=mysqli_fetch_array($q2))
			            {
									 $aid=$a2['auth_id'];
									 $auth_name=$a2['auth_name'];
			   
		             	echo"<option value='$aid'>$auth_name</option>";
		          	 }
		        	?>
				</select>
			  </div>
		    </div>
			
		  <div class="col-lg-6">
			  <div class="form-group">
				<label for="cat_name">Category :  <font color="#FF0000" size="+2">*</font></label>
				 <select class="form-control" id="cat_name" name="cat_name">
				 <option value="<?php if(isset($_GET['id'])) echo $db_c1; ?>"><?php if(isset($_GET['id'])) echo $take2['cat_name']; ?></option>
				    <option value="0">Select Category</option>
						<?php 
			         while($a3=mysqli_fetch_array($q3))
			            {
									 $cid=$a3['cat_id'];
									 $cat_name=$a3['cat_name'];
			   
		             	echo"<option value='$cid'>$cat_name</option>";
		          	 }
		        	?>
				</select>
			  </div>
		   </div>
		  </div>
		  
			  <div class="form-group">
				<label for="isbn">ISBN No. :  <font color="#FF0000" size="+2">*</font></label>
			
				<input type="text" class="form-control" id="isbn" name="isbn" value="<?php if(isset($_GET['id'])) echo $db_isbn; ?>" onClick="font()">
				<p style="padding: 10px; color:#4E4E4E;" id="font"></p>
			  </div>
		  
		  <div class="form-group">
			<label for="price">Price :  <font color="#FF0000" size="+2">*</font></label>
			<input type="text" class="form-control" id="price" name="price" placeholder="In Rs." 
			 value="<?php if(isset($_GET['id'])) echo $db_pr; ?>">

		  </div>
		  
		  <div style="padding:10px;" align="center">
		  <button type="submit" class="btn btn-lg btn-info" name="submit">SUBMIT</button>
		  <button type="submit" class="btn btn-lg btn-danger" name="submit">RESET</button>
		  </div>
		</form>
</div>
</div></td></tr></table>
</td>
</tr></table>
    
	 <script type="text/javascript">
	 
	     function font(){
		 document.getElementById("font").innerHTML = "The International Standard Book Number (ISBN) is a unique numeric commercial book identifier.";  
		 }
     </script>
	 
	 
	</body>
	</html>