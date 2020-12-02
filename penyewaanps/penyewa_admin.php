<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($db, "SELECT * FROM penyewa ORDER BY id ASC");
?>

<html>
<head>    

</head>

<body>
<div align='center'>
<h4>Daftar Penyewa</h4>
<a href="add_penyewa.php">Tambah Penyewa</a><br/><br/>


    <table width='80%' border=1>

    <tr>
        <th>Id</th> <th>Lokasi</th> <th>Nama</th> <th>Nomer hp</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['lokasi']."</td>";
        echo "<td>".$user_data['nama_penyewa']."</td>";
        echo "<td>".$user_data['no_hp_penyewa']."</td>";  
        echo "<td><a href='edit_penyewa.php?id=$user_data[id]'>Edit</a>  <a href='delete_penyewa.php?id=$user_data[id]'>Delete</a></td></tr>";
                
    }
    ?>
    </table>
    <a href="index.php">Kembali</a><br/><br/>
    </div>
</body>
</html>
