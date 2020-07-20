<?php

    include_once "koneksi.php";
    $query = mysqli_query($con, "SELECT * FROM tb_order");
    $row = mysqli_fetch_array($query);

    
    mysqli_close($con);

?>