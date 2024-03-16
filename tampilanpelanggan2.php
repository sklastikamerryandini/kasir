<?php
include "koneksi.php";
$tabel ="SELECT * FROM pelanggan";
$data =mysqli_query($koneksi,$tabel);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<style>
.sidebar {
    height: 100px;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 56px;
    left:8;
    background-color: #13130f;
    overflow-x: hidden;
    padding-top: 8px;
}

.sidebar a{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
}
.sidebar a:hover{
    color: #f1f1f1;
}
body {
    font-family: Georgia, serif;
 
  text-align: center;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 50%;
  width: 25%;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 14px 86px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.sidebar {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 55px;
  left: 8px;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px; 
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 240px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
</head>
<body style="background-color:white;">

<div class="navbar">
  <a href="#home">Kasir Toko Kosmetik</a>
  <div class="dropdown" style="float: right; margin-right: 60px;">
    <button class="dropbtn">Selamat Datang Admin
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"></a>
      <a href="loginpetugas.html">Petugas</a>
    </div>
  </div> 
</div>

<div class="sidebar">
<a href="dashboardadmin.php"><i class="	fa fa-id-card"></i> dashboard</a>
<br>
    <a href="tampilanpelanggan.php"><i class="fa fa-fw 	fa fa-users"></i> pelanggan</a>
    <a href="tampilanproduk.php"><i class="	fa fa-hourglass-2"></i> stok barang</a>
    <a href="tampilanpenjualan.php"><i class="	fa fa-random"></i> penjualan</a>
    <a href="#contact"><i class="	fa fa-power-off"></i> logout</a>
  </div>
  
  <div class="main">
   
  <h1>DATA PELANGGAN</h1>
  <td style="text-align:center;"><button type="text"><a href="inputpelanggan.html">TAMBAH PELANGGAN</a></button>
  <br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">

        <thead>
            <th style="text-align: center;">NAMA PELANGGAN</th>
            <th style="text-align: center;">ALAMAT</th>
            <th style="text-align: center;">NOMOR TELEPON</th>
            <th colspan="3" style="text-align: center;">AKSI</th>  
        </thead>
        <tbody>
        <?php
            while ($kasirpelanggan= mysqli_fetch_assoc($data)) {
            ?>
        <tr>
        <td><?php echo $kasirpelanggan['NamaPelanggan'];?></td>
        <td><?php echo $kasirpelanggan['Alamat'];?></td>
        <td><?php echo $kasirpelanggan['NomorTelepon'];?></td>
        
        <td style="text-align:center;"><button type="text"><a href="editpelanggan.php?id=<?php echo $kasirpelanggan['PelangganID']; ?>">EDIT</a></button></td>
        <td style="text-align:center;"><button type="text"><a href="hapusadmin.php?id=<?php echo $kasirpelanggan['PelangganID']; ?>">HAPUS</a></button></td>
        </tr>
        <?php
}
?>
        </tbody>
    </table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>