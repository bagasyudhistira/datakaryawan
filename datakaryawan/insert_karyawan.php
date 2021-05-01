<?php 
// Tugas Arsitektur Perangkat Lunak - REST HTTP
// Afrizal Fayiz Pradanta (19/446765/TK/49870)
// Bagas Yudhistira Fauzi (19/446770/TK/49875)
include "db_connect.php";

$nama = $_POST['nama'];
$posisi = $_POST['posisi']; 
 
$query=mysqli_query($kon, "INSERT INTO tbdatakaryawan(nama, posisi) VALUES ('$nama', '$posisi')")or die(mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>