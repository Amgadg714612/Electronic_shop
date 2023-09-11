<?php  
//require "connectdb.php";
if(isset($_POST['update']))
 {include "connectdb.php";
    $name=$_POST['name'];
       $prus=$_POST['pruc'];
    $imag_name=$_FILES['im_pro']['name'];
    $imag_size= $_FILES['im_pro']['size'];
    $tmp_name=$_FILES['im_pro']['tmp_name'];
    $error= $_FILES['im_pro']['error'];
      
       $typeprodecter=1;
       if( $error === 0){
        if($imag_size > 125000)
{
    $em = "sorry yuar file";
    header('location:insertproductes.html');
}
else{
   $img_ex=pathinfo($imag_name,PATHINFO_EXTENSION) ;
   $img_ex_lc=strtolower($img_ex);
   $allow=array('jpg','jpeg','png');
   if( in_array($img_ex_lc ,$allow)){
       $new_img_name=uniqid("IMG-",true).'.'. $img_ex_lc;
       $IMG_UB_PTH='imag/'. $new_img_name;
       move_uploaded_file($tmp_name, $IMG_UB_PTH);
$sql ="insert into prodects(Name_P,PRUCE,ID_CLINT, image_url) values ('$name','$prus',$typeprodecter,'$new_img_name')";
mysqli_query($conn ,$sql);
echo "<script> alert('لقد اضافة المنتج ') </script>";
   }
   }
}
header('location: insertproductes.html');
 }
 else if (isset($_POST['show']))
 {
    header('location: select_proderct.php');
 }
else
header('location: insertproductes.html');
?>