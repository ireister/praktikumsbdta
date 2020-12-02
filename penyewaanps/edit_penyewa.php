<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $lokasi=$_POST['lokasi'];
    $nama_penyewa=$_POST['nama_penyewa'];
    $no_hp_penyewa=$_POST['no_hp_penyewa'];


    // update user data
    $result = mysqli_query($db, "UPDATE penyewa SET
    id='$id',lokasi='$lokasi',nama_penyewa='$nama_penyewa',no_hp_penyewa='$no_hp_penyewa' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: penyewa_admin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch user data based on id
$result = mysqli_query($db, "SELECT * FROM penyewa WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $lokasi = $user_data['lokasi'];
    $nama_penyewa = $user_data['nama_penyewa'];
    $no_hp_penyewa = $user_data['no_hp_penyewa'];

}
?>
<html>
<head>  
    <title>Edit Data Penyewa</title>
</head>

<body>
    <a href="penyewa_admin.php">Kembali</a>
    <br/><br/>


    <form name="update_penyewa" method="post" action="edit_penyewa.php">
        <table border="0">
            <tr> 
                <td>ID</td>
                <td><input type="number" name="id" value=<?php echo $id;?> ></td>
            </tr>
            <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" value=<?php echo $lokasi;?> ></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penyewa" value=<?php echo $nama_penyewa;?> ></td>
            </tr>
            <tr> 
                <td>Nomer Hp</td>
                <td><input type="text" name="no_hp_penyewa" value=<?php echo $no_hp_penyewa;?>></td>
            </tr>

            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
