<html>
<head>

</head>
<body>
<div align='center'>
    <br>
    <h4>Daftar Pemesanan</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div align='center'>
        
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>"/>
    </div>
    <div align='center'>
        <td></td>
        <input type="submit" value="Cari">
    </div>
    </form>

    <table width='50%' border=1>
        <br>
        <thead>
        <tr>
            
            <th>Nama</th>
            <th>Konsol</th>
            <th>Lama Penyewaan</th>
      

        </tr>
        </thead>
        <?php

include "config.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from memesan where nama_penyewa like '%".$kata_kunci."%' or konsol like '%".$kata_kunci."%' or lama like '%".$kata_kunci."%' order by nama_penyewa asc";

        }else {
            $sql="select * from memesan order by nama_penyewa asc";
        }


        $hasil=mysqli_query($db,$sql);
       
        while ($data = mysqli_fetch_array($hasil)) {
            

            ?>
            
            <tr>
               
                <td><?php echo $data["nama_penyewa"]; ?></td>
                <td><?php echo $data["konsol"];   ?></td>
                <td><?php echo $data["lama"];   ?></td>
                <td><a href='add_pesan.php?id=$user_data[id]'>Add</a> | <a href='edit_pesan.php?id=$user_data[id]'>Edit</a> | <a href='delete_pesan.php?id=$user_data[id]'>Delete</a></td></tr>
            </tr>
           
            <?php
        }
        ?>
    </table>
    <br></br>
    <a href="index.php">Kembali</a><br/><br/>
</div>

</body>
</html>