
<?php 

$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>body {
    background-color: #add8e6
}</style>
<form method="post" action="">

<table class="table">
  <thead style="height:58px">
    <tr >
      <th scope="col" style='text-align:center'>ÜRÜN TÜRÜ</th>
      <th scope="col" style='text-align:center'>ÜRÜN ADI</th>
      <th scope="col" style='text-align:center'>ÜRÜN RENGİ</th>
      <th scope="col" style='text-align:center'>ÜRÜN MİKTARI</th>
      <th scope="col" style='text-align:center'>ÜRÜN DURUMU</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="tur" ></td>
      <td><input type="text" name="ad" ></td>
      <td><input type="text" name="renk" ></td>
     
      <td><input type="text" name="miktar" ></td>
      <td>Çalışıyor  <input type="radio" name="durum" value="Çalışıyor">  Çalışmıyor  <input type="radio" name="durum" value="Çalışmıyor" ></td>
      <td><input type="submit" name="button" value="Ekle" class="btn btn-primary"></td>
      
    </tr>
   
  </tbody>
</table>

</form>

<?php 

if(isset($_POST["button"])){
$sql="insert into urunler(urunTuru,urunAdi,urunRengi,urunDurumu,urunMiktar)values('".$_POST["tur"]."','".$_POST["ad"]."','".$_POST["renk"]."','".$_POST["durum"]."','".$_POST["miktar"]."')";
$sonuc=mysqli_query($baglan,$sql);

}



?>