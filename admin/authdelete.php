<?php

require_once('connection/connection.php');

$del_id='';
if(isset($_GET['del_id']))
echo $del_id=$_GET['del_id'];

mysqli_query($a,"delete from authors where auth_id='$del_id' ");

?>

<script>
document.location.href='index.php?page=3';
</script>