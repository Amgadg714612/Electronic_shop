<?php
if(isset($_POST['']))
{
    include 'connectdb.php';
    $namecom = $_POST['ncomp'];
    $acoumcomp = $_POST['acocomp'];
    $emcomp = $_POST['emcomp'];
    $usercom = $_POST['usecomp'];
    $passcom = $_POST['pascomp'];
    $sql ="insert into client_product(NAME_COMPANY,EMAIL,NUMBER_ACOUNT) values ('$namecom','$emcomp',$acoumcomp)";

    mysqli_query($conn ,$sql);
    $sql2 = "select ID from client_product where NAME_COMPANY = '$namecom'";
    $idp = mysqli_query($conn ,$sql2);
$sql3 ="isert into usersytem  (username ,userpass,id_c,id_cp) values ('$usercom','$passcom'',1 ,0)";
mysqli_query($conn ,$sql3);
}
?>
