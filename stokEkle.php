<?php 

$baglan=mysqli_connect("localhost","root","","bilisimakedemisi");

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>body {
    background-color: #add8e6
}</style>
<form method="post" action="">

<table class="table">
  <thead>
    <tr>
      <th scope="col" style='text-align:center; widht:50px;'>ÜRÜN İD</th>
      <th scope="col" style='text-align:center'>STOK TARİHİ</th>
      <th scope="col" style='text-align:center'>STOK MİKTARI</th>
      <th scope="col" style='text-align:center'>STOK KONUMU</th>
      <th scope="col" style='text-align:center'>STOĞU TESLİM ALAN</th>
      <th scope="col" style='text-align:center'>STOĞU TESLİM EDEN</th>
      <th scope="col" style='text-align:center;'>STOK AKSİYON</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align:center" ><input type="text" name="urunId" style="width:50px" ></td>
      <td style="text-align:center"><input type="text" name="tarih" style="width:150px"></td>
      <td style="text-align:center"><input type="text" name="miktar" style="width:50px"></td>
      <td style="text-align:center"><input type="text" name="konum" style="width:200px "></td>
      <td style="text-align:center"><input type="text" name="teslimAlan" style="width:200px"></td>
      <td style="text-align:center"><input type="text" name="teslimEden" style="width:200px"></td>
      <td style="width:150px">Geldi  <input type="radio" name="aksiyon" value="Geldi">  Gitti  <input type="radio" name="aksiyon" value="Gitti" ></td>
      
      <td><input type="submit" name="button" value="Ekle" class="btn btn-primary"></td>
      
    </tr>

  </tbody>
</table>

</form>

<?php 

if(isset($_POST["button"])){
$sql="insert into stokhareketi(urunId,stokAksiyon,stokTarih,stokMiktar,stokKonum,stokTeslim_Eden,stokTeslim_Alan)values('".$_POST["urunId"]."','".$_POST["aksiyon"]."','".$_POST["tarih"]."','".$_POST["miktar"]."','".$_POST["konum"]."','".$_POST["teslimAlan"]."','".$_POST["teslimEden"]."')";
$sonuc=mysqli_query($baglan,$sql);

}



?>