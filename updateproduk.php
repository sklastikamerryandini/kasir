<?php
include "koneksi.php";

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $namapelanggan = $_POST['nampelanggan'];
    $alamat = $_POST['alamat'];
    $nomortelepon = $_POST['nomortelepon'];
    $query = mysqli_query($koneksi, "UPDATE pelanggan SET NamaPelanggan='$namapelanggan;
    Alamat='$alamat', NomorTelepon='$nomortelepon' WHERE PelangganID='$id'");
    if ($query) {
        // Pesan Berhasil
?>
        <script>
            alert('Pelanggan Berhasil Diedit');
            window.location = "tampilanpelanggan.php";
        </script>
    <?php
     } else {
         // Pesan Warning jika terjadi kesalahan
    ?>

        <script>
            alert('Gagal Edit Pelanggan. Silahkan coba lagi.');
            window.location = "tampilanpelanggan.php";
        </script>
    <?php
     }
    }
    ?>