<?php
// Tugas Arsitektur Perangkat Lunak - REST HTTP
// Afrizal Fayiz Pradanta (19/446765/TK/49870)
// Bagas Yudhistira Fauzi (19/446770/TK/49875) 
include "db_connect.php"; 
$id_karyawan = $_GET['id_karyawan']; 
 
$query = "DELETE FROM tbdatakaryawan WHERE id_karyawan = $id_karyawan"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='index.php'</script> 
<?php 
?>