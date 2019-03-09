<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/openbooklogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

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
	<div class="page-header">
	<font color="#0033FF" size="+2" style="padding:20px;"><strong>MANAGE CATEGORIES</strong></font></div>


<div id="myDIV">
      <div id="cont">

      	
	<table width="100%" align="center" style="background:#FFFFFF; border-radius:4px; box-shadow:1.5px 1.5px 2px rgba(0, 0, 0, 0.42);">
     <tr><th colspan="2">
	 
	    <div class="navbar" style="background:#48C8BB; padding:5px; font-size:18px;">
		  <strong>Categories Listing</strong>
		 
	  </div>
	  </th></tr>
	  
	  <tr><td colspan="2" style="font-size:18px;">
	    <div style="padding:10px;">
		  <p>
		  <table width="100%">
		  	<tr><td>
		     <button>10</button>
		    Record per page :
		     </td>
		      <td align="right">
			  <form method="POST" action="index.php?page=5" enctype="multipart/form-data">
				<div class="input-group col-lg-8">
				  <input type="text" class="form-control" placeholder="Search for..." name="search2" id="search2">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="submit" name='s2' id='s2'>Search</button>
				  </span>
				</div>
				</form>
			  </td></tr></table>
		    </p>
			<br>
			<table class="table table-bordered table-striped" style="font-size:17px;">
			 <tr>
			  <th>Sl.No.</th>
			  <th width="20%">Category</th>
			  <th>Status</th>
			  <th width="20%">Creation Date</th>
			  <th width="20%">Updation Date</th>
			  <th>Actions</th>
			 </tr>
			 
			 <?php
			require_once('connection/connection.php');
			$t=0;$c='';
			if(isset($_POST['s2'])){
				 
				$txt=$_POST['search2'];

				$query=mysqli_query($a,"select * from category where cat_name='$txt' ");
				$arr=mysqli_fetch_array($query);
				$name=$arr['cat_name'];

          if($txt!=NULL && $txt==$name){
						$t++;
						$cid=$arr['cat_id'];
						$stat=$arr['stat'];
						$cr_date=$arr['creation'];
						$upd_date=$arr['updation'];
						 
						if($stat==0){
							echo "<tr>
						  <td>$t</td>
						  <td>$name</td>
						  <td><button class='btn btn-success' name='stat' id='target'>Active</button></td>
						  <td>$cr_date</td>
						  <td>$upd_date</td>
						  <td> 
			
							<table width='100%'>
								<tr><td>
								<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
								aria-hidden='true'></i>  Edit</button></a></td>
							  <td>
								<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
								 Delete</button>
							</td></tr></table>
							
							</td>
						 </tr> ";
							}
			
							else{
								echo "<tr>
						  <td>$t</td>
						  <td>$name</td>
						  <td><button class='btn btn-danger' name='stat' id='target'>Inactive</button></td>
						  <td>$cr_date</td>
						  <td>$upd_date</td>
						  <td> 
			
							<table width='100%'>
								<tr><td>
								<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
								aria-hidden='true'></i>  Edit</button></a></td>
							  <td>
								<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
								 Delete</button>
							</td></tr></table>
							
							</td>
						 </tr> ";
							}
				
					}

					else{
						echo "<h2 align='center'> No Search Result Found !! </h2> <br>";

						$sql=mysqli_query($a,"select * from category");

			while($arr=mysqli_fetch_array($sql)){
				$t++;
				$name=$arr['cat_name'];
				$cid=$arr['cat_id'];
				$stat=$arr['stat'];
				$cr_date=$arr['creation'];
				$upd_date=$arr['updation'];
         
				if($stat==0){
					echo "<tr>
				  <td>$t</td>
				  <td>$name</td>
				  <td><button class='btn btn-success' name='stat' id='target'>Active</button></td>
				  <td>$cr_date</td>
				  <td>$upd_date</td>
				  <td> 
	
					<table width='100%'>
						<tr><td>
						<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
						aria-hidden='true'></i>  Edit</button></a></td>
					  <td>
						<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
						 Delete</button>
					</td></tr></table>
					
					</td>
				 </tr> ";
					}
	
					else{
						echo "<tr>
				  <td>$t</td>
				  <td>$name</td>
				  <td><button class='btn btn-danger' name='stat' id='target'>Inactive</button></td>
				  <td>$cr_date</td>
				  <td>$upd_date</td>
				  <td> 
	
					<table width='100%'>
						<tr><td>
						<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
						aria-hidden='true'></i>  Edit</button></a></td>
					  <td>
						<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
						 Delete</button>
					</td></tr></table>
					
					</td>
				 </tr> ";
					}
		
					}
					}
			}


else{
			
			$sql=mysqli_query($a,"select * from category");

			while($arr=mysqli_fetch_array($sql)){
				$t++;
				$name=$arr['cat_name'];
				$cid=$arr['cat_id'];
				$stat=$arr['stat'];
				$cr_date=$arr['creation'];
				$upd_date=$arr['updation'];
			   
				if($stat==0){
				echo "<tr>
			  <td>$t</td>
			  <td>$name</td>
			  <td><b>Inactive</b></td>
			  <td>$cr_date</td>
			  <td>$upd_date</td>
			  <td> 

			    <table width='100%'>
			    	<tr><td>
					<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
					aria-hidden='true'></i>  Edit</button></a></td>
				  <td>
					<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
					 Delete</button>
				</td></tr></table>
			    
				</td>
			 </tr> ";
				}

				else{
					echo "<tr>
			  <td>$t</td>
			  <td>$name</td>
			  <td><b>Active</b></td>
			  <td>$cr_date</td>
			  <td>$upd_date</td>
			  <td> 

			    <table width='100%'>
			    	<tr><td>
					<a href='index.php?page=4&&id=$cid'><button class='btn btn-info'><i class='fa fa-pencil' 
					aria-hidden='true'></i>  Edit</button></a></td>
				  <td>
					<button class='btn btn-danger' onclick='del($cid)'><i class='fa fa-trash' aria-hidden='true'></i> 
					 Delete</button>
				</td></tr></table>
			    
				</td>
			 </tr> ";
				}
			}
		}

	?>
	<script>
  
  function del(value){
		if(confirm("Are you sure you want to delete")){
			document.location.href="catdelete.php?del_id="+value;
		}
	}

	</script>
	 	</table>
		</div>
	  </td></tr>

	  <tr>
	    <td style="padding:10px; font-size:18px;">
		showing results <?php echo $t; ?> out of 10 </td>
		  
		 <td align="right" style="padding:20px;">
          <button class="btn btn-warning"> < Previous </button>
		  <button class="btn btn-warning"> Next > </button>
		</td>
		 
	  </table>

	</div>
</div>
		
		
	</body>
	</html>