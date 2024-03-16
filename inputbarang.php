<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $namaproduk= $_POST['namaproduk'];
    $harga= $_POST['harga'];
    $stok= $_POST['stok'];
    $keterangan= $_POST['keterangan'];

    $produk = "INSERT INTO produk ( NamaProduk, Harga, Stok, Keterangan)
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