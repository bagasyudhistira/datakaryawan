<html>
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Masukkan Karyawan Baru</title>
         <link href="style.css" type="text/css" rel="stylesheet">
     </head>
     <body>
         <form action="insert_karyawan.php" method="POST">
             <font face="Tahoma" color="green" size="1"><h1><b><br>Tambahkan Karyawan</br></b></h1></font>
             <table align="left">
                <tr>
                     <td><font face="Tahoma" color="black" size="2">Nama</font></td>
                     <td>:</td>
                     <td><input type="text" name="nama" size="30"></td>
                </tr>
                <tr>
                     <td><font face="Tahoma" color="black" size="2">Posisi</font></td>
                     <td>:</td>
                     <td><input type="text" name="posisi" size="30"></td>
                </tr>
                <tr>
                     <td></td><td></td>
                     <td><input type="submit" value="Add">
                     <font face="Tahoma" color="green" size="2">
                     <a href="index.php" style="text-decoration:none">back</font></a>
                     </td>
                </tr>
             </table>
         </form>
     </body>
 </html>
