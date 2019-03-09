<?php

require_once('connection/connection.php');

$del_id='';
if(isset($_GET['del_id']))
echo $del_id=$_GET['del_id'];

mysqli_query($a,"delete from category where cat_id='$del_id' ");

?>

<script>
document.location.href='index.php?page=5';
</script>