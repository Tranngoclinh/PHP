<?php
// function camelCase(){
//     echo 'Xin chào ';
// }
// function PascalCase(){
//     echo ' Xin chào ';
// }
// function Snake_case(){
//     echo ' Xin chào ';
// }
// camelCase();
// PascalCase();
// Snake_case();
// function sum($name,$age){
//     echo 'Xin chào '.$name.', bạn '.$age.' tuổi';
// }
// sum('Trần ngọc linh',18);
// function kiemtra($n){
// if($n%2==0){
//     echo $n.' là số chẵn';
// }else {
//     echo $n.' là số lẽ';
// }
// }
// kiemtra(4);
// function sum($a,$b=9){
//     echo 'Tổng là: '.($a + $b).'<br>';
// }
// sum(5,7);
// sum(5);
// function check($n){
// if($n%2==0){
//     return true;
// }else {
//     return false;
// }
// }
// $result=check(4);
// if ($result==true){
//     echo 'Số chẵn';
// }else {
//     echo 'Số lẽ';
// }

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="nhap" placeholder="Nhập 1 số">
        <input type="submit" value="kiểm tra">
    </form>
</body>

</html> -->
<?php
// function kiemtra($number){
//         if ($number % 2 == 0) {
//             return true;
//         } else {
//             return false;
//         }
//     }
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $number = $_POST['nhap'];
// echo 'nhập số '.$number.'<br>';
//     $result = kiemtra($number);
//     if($result==true){
//         echo 'Số chẵn';
//     }else {
//         echo 'Số lẽ';
//     }
// }
// $books= ['Toán','Lý','Hóa'];
// echo $books[0];
// $array = [1,2,3,4,5,6,7,8,9];
// for ($i=0;$i<count($array);$i++){
//     echo $array[$i].'<br>';
// }
// $arr =[1,4,10,8,9];
// $max=$arr[0];
// for($i=0;$i<count($arr);$i++){
// if($arr[$i]>$max){
//     $max = $arr[$i];
// }
// }
// print_r($max);
// $arr=[];
// echo '<pre>';
// for($i=0;$i<=100;$i++){
//     array_push($arr,$i);
// }
// print_r($arr);
// echo '</pre>';
echo '<pre>';
$introduction = [
    'name' => 'Trần Ngọc Linh',
    'age' => 18,
    'gender' => 'Nam',
    'weight' => 54
];

print_r($introduction);
echo '</pre>';
foreach ($introduction as $key => $value){
    echo 'Key = '.$key.', value = '.$value;
    echo '<pre>';
}
 ?>