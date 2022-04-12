<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $nhaptien = $_REQUEST['doitien'];
    $doitien1 = $_REQUEST['select1'];
    $doitien2= $_REQUEST['select2'];
    if ($doitien1=='VietNam' && $doitien2=='USD'){
        $a =  $nhaptien/23000;
        echo $a." USD";
    }else if ($doitien1=='USD' && $doitien2 =='VietNam') {
        $a =  $nhaptien*23000;    
        echo $a." VNĐ";
    }else {
        echo $nhaptien;
    }  
}
?>
    <form action="" method="post">
    <table>
        <tr>
            <th>Nhập số tiền cần đổi</th>
            <th>Đơn vị tiền nhập vào</th>
            <th>Đơn vị tiền muốn đổi</th>
        </tr>
        <tr>
            <td><input type="text" name="doitien"  value=" "></td>
            <td>
                <select name="select1">
                    <option value="VietNam" >VietNam</option>
                    <option value="USD">USD</option>
                </select>
            </td>
            <td>
                <select  name="select2">
                    <option value="USD">USD</option>
                    <option value="VietNam">VietNam</option>
                </select>
            </td>
            <td>
            <input type="submit"  value="Đổi ">
            </td>
        </tr>
   
    </table>
    </form>
    
</body>

</html>