<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
</head>
<body>
<div align='center'>
    <br>
    <h4>Daftar Penyewaan</h4>

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

    <table width='65%' border=1>
        <br>
        <thead>
        <tr>
            <th>Id</th>
            <th>Konsol</th>
            <th>Lama</th>


        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from penyewaan where lokasi like '%".$kata_kunci."%' or konsol like '%".$kata_kunci."%' or lama like '%".$kata_kunci."%'order by id_penyewaan asc";

        }else {
            $sql="select * from penyewaan order by id_penyewaan asc";
        }


        $hasil=mysqli_query($db,$sql);
        
        while ($data = mysqli_fetch_array($hasil)) {
           

            ?>
            
            <tr>
                
                <td><?php echo $data["id_penyewaan"]; ?></td>
                <td><?php echo $data["konsol"]; ?></td>
                <td><?php echo $data["lama"];   ?></td>

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