<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ADMIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />




     <script type="text/javascript">
			$(document).ready(function(){
				$("#status").click(function(){
					$(this).text($(this).text() == 'Active' ? 'Inactive' : 'Active');
					$( this ).toggleClass( "btn-danger" );
				});
				
			});
			
			function stat() {
					var x = document.getElementById("st1");
					if (x.innerHTML === "Blocked") {
						x.innerHTML = "Active";
					} else {
						x.innerHTML = "Blocked";
					}
				}
				
		</script>
	

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
	<font color="#0033FF" size="+2" style="padding:20px;"><strong>STUDENT DETAILS</strong></font></div>

	<div id="myDIV">
      <div id="cont">


	<table width="100%" align="center" style="background:#FFFFFF; border-radius:4px; box-shadow:1.5px 1.5px 2px rgba(0, 0, 0, 0.42);">
     <tr><th colspan="2">
	 
	    <div class="navbar" style="background:#48C8BB; padding:5px; font-size:18px;">
		  <strong>Students Info</strong>
		 
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
				<div class="input-group col-lg-8">
				  <input type="text" class="form-control" placeholder="Search for...">
				  <span class="input-group-btn">
					<button class="btn btn-default" type="button">Search</button>
				  </span>
				</div>
			</td></tr></table>

			 </div>
		    </p>
			<br>

			<div style="padding: 10px;">
			<table class="table table-bordered table-striped" style="font-size:17px;">
			 <tr>
			  <th>Sl.No.</th>
			  <th>Student ID</th>
			  <th width="20%">Student Name</th>
			  <th width=20%">Email ID</th>
			  <th width=20%">Mobile No.</th>
			  <th width=10%">Reg Date</th>
			  <th>Status</th>
			  <th>Actions</th>
			 </tr>
			 
			 <tr>
			  <td id="no"></td>
			  <td>bntynmum</td>
			  <td>bntynmum</td>
			  <td>efwfw</td>
			  <td>efewfe</td>
			  <td>efewfe</td>
			  <td id="st1">Blocked</td>
			  <td>
			  
				  <button class="btn btn-success" name="status" id="status" onClick="stat()">Active</button>
			    
				</td>
			 </tr> 
			</table>
		</div>
	  </td></tr>
	  
	  <tr>
	    <td style="padding:10px; font-size:18px;">
		  showing results </td>
		  
		 <td align="right" style="padding:20px;">
          <button class="btn btn-warning"> < Previous </button>
		  <button class="btn btn-warning"> Next > </button>
		</td></tr>
		 
	  </table>
</div>
	 </div>
</div>
	  
	  
		
	</body>
	</html>