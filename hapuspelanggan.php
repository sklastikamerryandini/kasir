<?php
include "koneksi.php";

$id = $_GET['id']

// sql to delete a record
$id = "DELETE FROM pelanggan WHERE PelangganID='$id'";

if ($koneksi->query($sql) === TRUE) {
?>

  <script>
    alert('Data Berhasil Dihapus');
    window.location = "tampilanpelanggan.php";
  </script>
<?php
} else {
  echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();