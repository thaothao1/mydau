<?php
    $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
    $img = $_POST['img'];
    $ten = $_POST['ten'];
    $mssv = $_POST['mssv'];
    $ngaysinh = $_POST['ngaysinh'];
    $cmnd = $_POST['cmnd'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];

    $sql = "INSERT INTO  thongtin values ('','$img','$ten' , '$ten' , '$mssv' , '$ngaysinh' , '$smnd' , '$gioitinh' , '$diachi')";
    if($con->query($sql)) echo 1;
    else echo 0;
?>