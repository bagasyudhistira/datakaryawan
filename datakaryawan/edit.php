<?php
// Tugas Arsitektur Perangkat Lunak - REST HTTP
// Afrizal Fayiz Pradanta (19/446765/TK/49870)
// Bagas Yudhistira Fauzi (19/446770/TK/49875) 
include "db_connect.php";
$id_karyawan = $_GET['id_karyawan'];  
 
$query=mysqli_query($kon, "SELECT * FROM tbdatakaryawan WHERE id_karyawan='$id_karyawan'");
while ($row=mysqli_fetch_array($query)){ 
 
$id_karyawan = $row['id_karyawan'];
$nama = $row['nama'];
$posisi = $row['posisi']; 
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Perbaiki Daftar</b></font>"; 
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update.php?id_karyawan=$id_karyawan\" enctype='multipart/form-data'>"; 
echo "<br>";
echo "<tr><td><font face='Tahoma' color='black' size=2>nama </font></td><td>:</td><td><input type='text' name='nama' value='$nama' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>posisi </font></td><td>:</td><td><input type='text' name='posisi' value='$posisi' size='30'>&nbsp;
</td></tr>";
 
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>"; 
} 
?>