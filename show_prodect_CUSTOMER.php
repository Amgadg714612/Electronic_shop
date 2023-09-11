<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>جميع المنتجات   THE SHOW PRODUCT IN CUSTOMER </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styleshow_coustomer.css" />
    <script src="main.js"></script>
    <style>
    .j{
    float:right ;
    margin-top:10%;
    margin-left:3%;
    margin-left:3%
}
    </style>
</head>
<body>
<div class="menu">
    <ul>
     <a href=""><li class="active"> العرض علي حسب الشركة المنتجة<i class="icon-home"></i></li></a>
     <a href=""><li> العرض علي حسب التكلفة <i class="icon-th"></i></li></a>
     <a href="" onclick="document.getElementById('alert-back2').style.display = ('block')"><li>العرض علي حسب نوع المنتج <i class="icon-phone"></i></li></a>
     <a href="" onclick="document.getElementById('alert-back1').style.display = ('block')"><li> لتواصل معنا <i class="icon-tag"></i></li></a>
    </ul>
   </div>
  





    <?php
     include ('connectdb.php');
     $sql = "select * from prodects order by id_product";
     $res = mysqli_query( $conn,$sql); 
     $name_comp='';
while($row = mysqli_fetch_array($res))
{   $sq2 = "select NAME_COMPANY from client_product where ID = $row[ID_CLINT]";
    $re3 = mysqli_query( $conn,$sq2);
    while($row1 = mysqli_fetch_array($re3))
    {$name_comp=$row1['NAME_COMPANY'];
        if($name_comp!=$row1['NAME_COMPANY'] ||$name_comp='' )
        {
echo "<br/>
<br/>
<hr/>";
$name_comp = $row1['NAME_COMPANY'];
        }
        echo "
    <center>
         <main>
            <div class='j' style='width: 15rem;'>
               <img src='imag/$row[image_url]' class='crad-img-top'>
               <div>
                        <h5 class='card-txt'> $row[Name_P] </h5>
                        <pr>
                         <p>$row1[NAME_COMPANY]</p>
                         <pr>
                         <p> $row[PRUCE]</p><p>$</p>
                        <a href='' class='btn btn-danger'>     شراء المنتج </a>
                </div>
            </div>
            </main>
    </center>

    ";}
   

}
     ?>
  
</body>
</html>