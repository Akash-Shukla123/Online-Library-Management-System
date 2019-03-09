<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	

		<style>
#myDIV {
    margin-top: 10px;
    height:100%;
    width: 100%;
    overflow: auto;
}

#cont {
    height:100%;
    width: 100%;
    padding: 10px;
}
</style>


	</head>
	
	<body>


	<?php
	
	require_once('connection/connection.php');
	
	$ret_dt='';
	if(isset($_POST['return'])){
	$ret_dt=date('d/m/y',strtotime('+30 days')) . PHP_EOL;

	$q1=mysqli_query($a,"select * from issued_books where isbn = '$isbn' ");
	 $a1=mysqli_fetch_array($q1);
	 $db_name=$a1['book_name'];


	}
	?>
	<div class="page-header">
	<font color="#0033FF" size="+2" style="padding:20px;"><strong>MANAGE ISSUED BOOKS</strong></font></div>

<div id="myDIV">
      <div id="cont">


	<table width="100%" align="center" style="background:#FFFFFF; border-radius:4px; box-shadow:1.5px 1.5px 2px rgba(0, 0, 0, 0.42);">
     <tr><th colspan="2">
	 
	    <div class="navbar" style="background:#48C8BB; padding:5px;font-size:18px;">
		  <strong>Books Listing</strong>
		 
	  </div>
	  </th></tr>
	  
	  <tr><td colspan="2" style="font-size:18px;">
	    <div style="padding:10px;">
		  <p>
		  
		  <table width="100%">
		  	<tr><td>
		   <button>10</button>
		    Record per page :
		     </div>
		      </td>
		      <td align="right">
				<div class="input-group col-lg-8">
				  <input type="text" class="form-control" placeholder="Search for...">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button">Search</button>
				  </span>
				</div>
			  </td></tr></table>
			  
		    </p>
			<br>
			<table class="table table-bordered table-striped" style="font-size:17px">
			 <tr>
			  <th>Sl.No.</th>
			  <th width="20%">Book Name</th>
			  <th>Student ID</th>
			  <th width="15%">Issued Date</th>
			  <th width="15%">Return Date</th>
			  <th>Fine in (Rs.)</th>
			  <th>ISBN No.</th>
			  <th width="15%">Actions</th>
			 </tr>
			 
			 <?php
			require_once('connection/connection.php');
			$t=0;$c='';
			if(isset($_POST['s1'])){
				 
				$txt=$_POST['search1'];

				$query=mysqli_query($a,"select * from authors where auth_name='$txt' ");
				$arr=mysqli_fetch_array($query);
				$name=$arr['auth_name'];

          if($txt!=NULL && $txt==$name){
						$t++;
						$aid=$arr['auth_id'];
						$cr_date=$arr['creation'];
						$upd_date=$arr['updation'];
						 
						echo "<tr>
						<td>$t</td>
						<td>$name</td>
						<td>$cr_date</td>
						<td>$upd_date</td>
						<td> 
		
							<table width='100%'>
								<tr><td>
							<a href='index.php?page=2&&id=$aid'><button class='btn btn-info'><i class='fa fa-pencil' 
							aria-hidden='true'></i>  Edit</button></a></td>
							<td>
							<button class='btn btn-danger' onclick='del($aid)'><i class='fa fa-trash' aria-hidden='true'></i> 
							 Delete</button>
						</td></tr></table>
							
						</td>
					 </tr> ";
				
					}

					else{
						echo "<h2 align='center'> No Search Result Found !! </h2> <br>";

						$sql=mysqli_query($a,"select * from authors");

			while($arr=mysqli_fetch_array($sql)){
				$t++;
				$name=$arr['auth_name'];
				$aid=$arr['auth_id'];
				$cr_date=$arr['creation'];
				$upd_date=$arr['updation'];
         
				echo "<tr>
			  <td>$t</td>
			  <td>$name</td>
			  <td>$cr_date</td>
			  <td>$upd_date</td>
			  <td> 

			    <table width='100%'>
			    	<tr><td>
					<a href='index.php?page=2&&id=$aid'><button class='btn btn-info'><i class='fa fa-pencil' 
					aria-hidden='true'></i>  Edit</button></a></td>
				  <td>
					<button class='btn btn-danger' onclick='del($aid)'><i class='fa fa-trash' aria-hidden='true'></i> 
					 Delete</button>
				</td></tr></table>
			    
				</td>
			 </tr> ";
		
					}
					}
			}


else{
			
			$sql=mysqli_query($a,"select * from authors");

			while($arr=mysqli_fetch_array($sql)){
				$t++;
				$isbn=$arr['isbn'];
				$a_id=$arr['s_id'];
				$fine=$arr['fine'];
				$is_date=$arr['issued'];
         
				echo "<tr>
			  <td>$t</td>
			  <td>$name</td>
			  <td>$cr_date</td>
			  <td>$upd_date</td>
			  <td> 

			    <table width='100%'>
			    	<tr><td>
					<a href='index.php?page=2&&id=$aid'><button class='btn btn-info'><i class='fa fa-pencil' 
					aria-hidden='true'></i>  Edit</button></a></td>
				  <td>
					<button class='btn btn-danger' onclick='del($aid)'><i class='fa fa-trash' aria-hidden='true'></i> 
					 Delete</button>
				</td></tr></table>
			    
				</td>
			 </tr> ";
		
			}
		}

	?>
	<script>
  
  function del(value){
		if(confirm("Are you sure you want to delete")){
			document.location.href="authdelete.php?del_id="+value;
		}
	}

	</script> 
			</table>
		</div>
	  </td></tr>
	  
	  <tr>
	    <td style="padding:10px; font-size:18px;">
		  showing results </td>
		  
		 <td align="right" style="padding:20px;">
          <button class="btn btn-warning"> < Previous </button>
		  <button class="btn btn-warning"> Next > </button>
		</td>
		 
	  </table>

	  </div>
</div>
	  
	  
	 

		
	</body>
	</html>