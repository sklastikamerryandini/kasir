<?php
include "koneksi.php";

$id = $_GET['id'];
$edit = mysqli_query($koneksi, "SELECT *FROM penjualan WHERE penjualanID='$id'"); 
$editpenjualan = mysqli_fetch_array($edit);

if ($editpenjualan){
  die("Data tidak ditemukan.");
}

?>
<html>
  <body>
    <form action="updatepenjualan.php" style="max-width:500px;margin:auto" method="POST">
    <div class="input-container">
      <label class="input-field">Tanggal Penjualan</label>
      <input type="hidden" name="id" value="<?php echo $editpenjualan['PenjualanID'];?>">
      <input class="input-field" type="echo" placeholder="Tanggal Penjualan" value="<?php echo $editpenjualan['TanggalPenjualan'];?>">
    </div>

    <div class="input-container">
      <label class="input-field">Total Harga</label>
      <input class="input-field" type="text" placeholder="Total Harga" value="<?php echo $editpenjualan['TotalHarga'];?>">
    </div>

    <div class="input-container">
      <label class="input-field">Nama Pelanggan</label>
      <select class="input-field" name="namapelanggan">
        <option>Nama Pelanggan</option>
        <?php
        include "koneksi.php";
        $query = mysqli_query ($koneksi, "SELECT * FROM pelanggan")
        or die(mysqli_error($koneksi));
        while ($data = mysqli_fetch_array($query)){
          echo "<option value = $data[PelangganID]> $data[NamaPelanggan]</option>";
        }
        ?>
      </select>
    </div>
    <button type="submit" name="edit" class="btn">Edit</button><br><br>
    <button type="text" class="btn"><a href="tampilanpenjualan.php">Batal Edit</button>
    </form>

  </body>
</html>