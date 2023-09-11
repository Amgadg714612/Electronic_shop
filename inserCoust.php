<?php  
if(isset($_POST['sive']))
 {include "connectdb.php";
    $name=$_POST['name'];
    $cardn=$_POST['cardn'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $emli=$_POST['ema'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $passa=$_POST['passa'];

    mysqli_query($conn,"insert into custmor (Name,N_CRAD,country,city,ema,phone) values ('$name','$cardn','$city','$emli','$phone')");
$sq2 = "select ID from custmor WHERE NAME='$NAME'";
     $res = mysqli_query( $conn,$sq2); 
while($row = mysqli_fetch_array($res))
    {  $ID=$row['ID'];}

      $sq3 ="insert into usersytem(username,userpass,id_cp) values ('$username','$pass',$ID)";
    mysqli_query($conn ,$sq3);
    header('location:countcreat.html');
}
?>