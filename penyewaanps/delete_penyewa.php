<?php

include_once("config.php");


$id = $_GET['id'];


$result = mysqli_query($db, "DELETE FROM penyewa WHERE id = $id");

header("Location:penyewa_admin.php");
?>