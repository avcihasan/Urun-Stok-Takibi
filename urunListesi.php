<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>body {
    background-color: #add8e6
}</style>

<?php 

include "index.php";   

$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");

include "urunEkle.php";










$sec="select * from urunler";
$sonuc=$baglan->query($sec);
echo "<table class='table' >";
echo "<tr>";
echo "<th ' ></th>";
echo "<th style='text-align:center' >ÜRÜN İD</th>";
echo "<th style='text-align:center'>ÜRÜN TÜRÜ</th>";
echo "<th style='text-align:center'>ÜRÜN ADİ</th>";
echo "<th style='text-align:center'>ÜRÜN RENGİ</th>";
echo "<th style='text-align:center'>ÜRÜN DURUMU</th>";
echo "<th style='text-align:center'>ÜRÜN MİKTARI</th>";

echo "</tr>";

if($sonuc->num_rows>0){

   while($cek=$sonuc->fetch_assoc()) {
    $id=$cek["urunId"]; 
    $tur=$cek["urunTuru"];
    $ad=$cek["urunAdi"];
    $renk=$cek["urunRengi"];
    $durum=$cek["urunDurumu"];
    $miktar=$cek["urunMiktar"];
    echo "<tr>";
    echo "<td><a href='urunSil.php?id=$id' class='btn btn-danger'>Sil</a></td>";
    echo "<td style='text-align:center'><a href=''>$id</a></td>";
    echo "<td style='text-align:center'>".$tur."</td>";
    echo "<td style='text-align:center'>".$ad."</td>";
    echo "<td style='text-align:center'>".$renk."</td>";
    echo "<td style='text-align:center'>".$durum."</td>";
    echo "<td style='text-align:center'>".$miktar."</td>";
    
   echo "</tr>";

   
    
   }
   echo "</table>";
}


?>

