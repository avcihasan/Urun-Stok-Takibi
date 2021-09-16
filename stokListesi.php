<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>body {
    background-color: #add8e6
}</style>
<?php 
 include "index.php";   
$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");

include "stokEkle.php";

$sec="select * from stokhareketi";
$sonuc=$baglan->query($sec);
echo "<table class='table'>";
echo "<tr>";
echo "<th ' ></th>";
echo "<th style='text-align:center'>STOK İD</th>";
echo "<th style='text-align:center'>ÜRÜN İD</th>";
echo "<th style='text-align:center'>STOK AKSİYONU</th>";
echo "<th style='text-align:center'>STOK TARİHİ</th>";
echo "<th style='text-align:center'>STOK MİKTARI</th>";
echo "<th style='text-align:center'>STOK KONUMU</th>";
echo "<th style='text-align:center'>STOĞU TESLİM ALAN</th>";
echo "<th style='text-align:center'>STOĞU TESLİM EDEN </th>";

echo "</tr>";

if($sonuc->num_rows>0){

   while($cek=$sonuc->fetch_assoc()) {
    
    $stokId=$cek["stokId"]; 
    $urunId=$cek["urunId"]; 
    $aksiyon=$cek["stokAksiyon"];
    $tarih=$cek["stokTarih"];
    $miktar=$cek["stokMiktar"];
    $konum=$cek["stokKonum"];
    $teslimEden=$cek["stokTeslim_Eden"];
    $teslimAlan=$cek["stokTeslim_Alan"];  
    echo "<tr>";
    echo "<td><a href='stokSil.php?id=$stokId' class='btn btn-danger'>Sil</a></td>";
    echo "<td style='text-align:center'>$stokId</td>";
    echo "<td style='text-align:center'>".$urunId."</td>";
    echo "<td style='text-align:center'>".$aksiyon."</td>";
    echo "<td style='text-align:center'>".$tarih."</td>";
    echo "<td style='text-align:center'>".$miktar."</td>";
    echo "<td style='text-align:center'>".$konum."</td>";
    echo "<td style='text-align:center'>".$teslimEden."</td>";
    echo "<td style='text-align:center'>".$teslimAlan."</td>";
   
   echo "</tr>";

   
    
   }
   echo "</table>";
}


?>