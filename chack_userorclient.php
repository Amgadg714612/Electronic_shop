<?php
if(isset($_POST['login']))
{
  include ('connectdb.php');
  $username=$_POST['usname'];
  $userpass=$_POST['uspass'];
$sql = "select * from usersytem ";
$res = mysqli_query( $conn,$sql); 
  while($row = mysqli_fetch_array($res))
  {
if($username=$row['username'])
{
    if($userpass=$row['userpass'])
    {
        echo"<script> alert('wlcom')</script>";
        if($row['id_cp']=0)
        header('location:insertproductes.html ? id=$row[id_c]');

    if($row['id_c'])
        header('location:show_prodect_CUSTOMER.php');

    }
}

  }
}

?>