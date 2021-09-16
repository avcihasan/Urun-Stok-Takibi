<?php 

$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");
  
$silinecekID= $_GET['id'];
$sonuc=mysqli_query($baglan,"DELETE from stokhareketi  where stokId=".$silinecekID);
 
if($sonuc>0){
   header("Location:stokListesi.php");
 } 



?>