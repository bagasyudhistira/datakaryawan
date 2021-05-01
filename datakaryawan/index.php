<?php 
include 'db_connect.php'; 
$query=mysqli_query ($kon, "SELECT * FROM tbdatakaryawan")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
echo "<html>"; 
echo "<head>"; 
echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
echo "</head>"; 
echo "<title>Daftar Karyawan</title>"; 
echo "<body>";
echo "<font color='black' face='Arial' size=3><b><br>Tugas Arsitektur Perangkat Lunak - REST HTTP Method </b></font><br>";
echo "<font color='black' face='Arial' size=2><br>Afrizal Fayiz Pradanta (19/446765/TK/49870)</font>";
echo "<font color='black' face='Arial' size=2><br>Bagas Yudhistira Fauzi (19/446770/TK/49875)</font><br>";
echo "<font color='darkmagenta' face='Arial' size=3><b><br>Data Karyawan</b></font><br><br>"; 
echo "<a href='add.php' style=\"text-decoration: none\"><font face='tahoma' size='1'>Tambahkan Karyawan</font></a><br>"; 
echo "<br><table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"blue\" bgcolor=\"white\"> 
<tr bgcolor='blue' height=\"30\"><font color='white'>         
     <th align='center'><font color='white' face='Arial' size=2>ID Karyawan</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Nama</font></th>
     <th align='center'><font color='white' face='Arial' size=2>Posisi</font></th>       
     <th align='center'><font color='yellow' face='Arial' size=2>Ubah?</font></th> 
</tr>";  
$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='left' bgcolor='#657FFF'>";
    echo "<font face='Arial' size=1>";
    echo $row["id_karyawan"];
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["nama"];
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["posisi"];
    echo"</font>";
    echo"</td>";    
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo "<a href='delete.php?id_karyawan=".$row['id_karyawan']."' style=\"text-decoration: none\" title=\"Hapus\"><font face='tahoma' size='1'>Hapus</font></a>   
    <a href='edit.php?id_karyawan=".$row['id_karyawan']."' style=\"text-decoration: none\" title=\"Edit\"><font face='tahoma' size='1'>Edit</font></a>"; $j++; }
echo"</table>"; 
echo "</body>"; 
echo "</html>"; 
?>