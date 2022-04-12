<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
    width: 254px;
    height: 113px;
}
    </style>
</head>
<body>
    <fieldset>
    <form action="" method="post">
        <h2>Từ Điển Anh - Việt</h2>
        <input type="text" name="search"  value="" placeholder="Nhập từ cần tra...">
        <input type="submit" value="Dịch">
    </form>

</body>
<?php
$a= [
   'hello' => 'Xin chào',
    'bye' => 'Tạm biệt',
    'search' => 'Tìm kiếm',
    'book' => 'sách',
    'love' => 'yêu',
    'i love you' => 'tôi yêu bạn',
    'dog'=>'con chó',
    'cat'=>'con mèo',
    'color'=>'màu sắc',
    'count'=>'đếm' ,
    'name'=>'tên'
];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['search'];
    $count =0;
    foreach($a as $key => $value){
    if ($search == "$key") {
        echo "Từ ". $search. " có nghĩa là : " . $value;
        $count=1;
        }
    }
if ($count==0){
    echo "Không tìm thấy từ cần dịch";
}
}
?>
</fieldset>
</html>