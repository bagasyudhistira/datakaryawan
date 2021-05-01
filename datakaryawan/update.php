<?php 
include "db_connect.php"; 
$id_karyawan = $_GET['id_karyawan']; 

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
 
$query=mysqli_query ($kon, "UPDATE tbdatakaryawan SET nama='$nama', posisi='$posisi' WHERE id_karyawan='$id_karyawan'")or die (mysqli_error()); 
 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='index.php'</script> 
<?php 
} 
?>