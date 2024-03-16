<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $tanggal= $_POST['tanggal'];
    $totalharga= $_POST['totalharga'];
    $namapelanggan= $_POST['namapelanggan'];
    

    $produk = "INSERT INTO penjualan ( Tanggalpenjualan, TotalHarga, NamaPelanggan)
VALUES ('$namaproduk', '$harga', '$stok')";

    if ($koneksi->query($produk) === TRUE) {
?>
 <script>
    alert('Data Berhasil Ditambahkan');
    window.location="dashboardadmin.html";
</script>
<?php
    } else {
    echo "Error: ".$produk. "<br>". $koneksi->error;
}
$koneksi->close();
}