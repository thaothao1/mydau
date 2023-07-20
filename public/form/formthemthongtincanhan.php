<?php
    echo "
    <h2>Thêm thông tin cá nhân</h2>
    <table>
        <tr>
            <td>Link IMG</td>
            <td><input type='file' name='' id='img'></td>
        </tr>
        <tr>
            <td>Tên Account user</td>
            <td><input type='' id = 'username' placeholder='Nhập tên tk'></td>
        </tr>
        <tr>
            <td>MSSV</td>
            <td><input type=''  id ='mssv' placeholder='Nhập MSSV...'></td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td><input type='' id='ten' placeholder='Nhập họ & tên...'></td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td><input type='date' id ='ngaysinh' placeholder='Nhập ngaỳ sinh...'></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><input type='' id='gioitinh'  placeholder='Nhập giới tính...'></td>
        </tr>
      
        <tr>
            <td>CMND</td>
            <td><input type='' id='cmnd'  placeholder='Nhập CMND...'></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type='' id= 'diachi' placeholder='Nhập địa chỉ...'></td>
        </tr>
        <tr class = 'action'>
        <td colspan = 2><button onclick = 'themthongtincanhan()'>Thêm</button><button onclick = 'resetform()'>Reset</button></td>
            
        </tr>
    </table>
    ";
?>