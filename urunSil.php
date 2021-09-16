<?php 

$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");
  
$silinecekID= $_GET['id'];
$sonuc=mysqli_query($baglan,"DELETE from urunler  where urunId=".$silinecekID);
 
if($sonuc>0){
   header("Location:urunListesi.php");
 } 



?>