<?php

include ('connectdb.php');
$ID=$_GET['id'];
$sq3="delete from prodects where id_product=$ID";
mysqli_query( $conn,$sq3);
header('location:show_proderct_clien.php');
?>