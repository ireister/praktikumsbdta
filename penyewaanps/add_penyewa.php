<html>
<head>
    <title>Tambah Penyewa</title>
</head>

<body>
    <a href="penyewa_admin.php">Kembali</a>
    <br/><br/>


    <form action="add_penyewa.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penyewa"></td>
            </tr>
            <tr> 
                <td>Nomer hp</td>
                <td><input type="text" name="no_hp_penyewa"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $lokasi = $_POST['lokasi'];
        $nama_penyewa = $_POST['nama_penyewa'];
        $no_hp_penyewa = $_POST['no_hp_penyewa'];


        // include database connection file
        include_once("config.php");

        //Insert user data into table
        $result = mysqli_query($db, "INSERT INTO penyewa(id,lokasi,nama_penyewa,no_hp_penyewa) VALUES('$id','$lokasi','$nama_penyewa','$no_hp_penyewa')");

        // Show message when user added
        echo "Berhasil Ditambahkan. <a href='penyewa_admin.php'>Lihat Hasil</a>";
    }
    ?>
</body>
</html>
