<?php
 include "connectdb.php";?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> show all Product  AVALIBLE </title>
     <style>
.j{
    float:right ;
    margin-top:10%;
    margin-left:3%;
    margin-left:3%
}
a {
    margin-left:5%;
}
#butt{
    background-image: url('/imag/go back.ico');
}
body{
    background-color:#9ca6eead;
}
    


     </style>
 </head>
 <body>
     <header>
         <div >
        <center> <h2>عرض جميع المنتجات  المتوفره</h2></center>
        <br>
        <br> 
        <button dir="ltr" id='butt'><a href="insertproductes.html"style="">رجوع</a>   </button>
         </div>
     </header>
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
                        <a href='' class='btn btn-danger'>  تعديل </a>
                        <a href='delet_pr.php? id=$row[id_product]' class =' btn btn-primary'> حذف </a>
                </div>
            </div>
            </main>
    </center>

    ";}

}
     ?>
     

 </body>
 </html>
