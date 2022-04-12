
<!-- <form action="" method="post">
Name : <input type = "text" name="username"><br>
Password:<input type = "password" name="password">
<input type="submit" value="Đăng Nhập">
</form> -->
<?php
// $name = 'Trần Ngọc Linh';//string
// $age = 18 ;//int
// $weight =53.5;//float
// $arr=[1,2,3,4,5];//Array
// $bool = true;//boolean
// $a = null;//null
// $obj = new Name();//object
// class Name{};
// define('PI', 3.1416);
// var_dump(PI);


// $arr=['Trần','Ngọc','Linh'];
// echo '<pre>';
// print_r ($arr);
// echo 'Phương thức gửi dữ liệu: '.$_SERVER['REQUEST_METHOD'];
// echo '<pre>';
// print_r($_REQUEST);
// echo '</pre>';
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $username = $_REQUEST['username'];
//   $password = $_REQUEST['password'];
//   $all = $_REQUEST['username'].'<br>'.$_REQUEST['password'];
//   echo '<br> Tên đăng nhập là: '.$username;
//   echo '<br> Mật khẩu là: '.$password;
//   echo '<br> ALL là: '.$all;
// }
// $day = 3;
//   switch($day){
//     case $day>=2 && $day <=6: echo 'Đi làm';
//     break;
//     case $day == 7: echo 'sinh hoạt CLB';
//     break;
//     default: echo 'relax';
//   }
// $age = 17;
// $a='';
// $age >= 18? $a ='uống bia': $a='Uống rượu';
// echo $a;
// $day = 3;
// switch(true)
//     {
//         case ($day>=2 && $day <=6):
//            echo 'Đi làm';
//         break;
//         case ($day==7):
//            echo 'Sinh hoạt CLB';
//         break;
//         default:
//         echo 'relax';
//         break;
//     }
// $a = 5;
// for ($i=1;$i<=10;$i++){
//   echo $a.'*'.$i.'='.($a*$i).'<br>';
// }
// for($i=1;$i<=100;$i++){
//   if($i%2==0){
//     echo $i.' ';
//   }
// }
// $sum=0;
// for($i=1;$i<=10;$i++){
//     $sum += $i; 
//   }
// echo $sum;
// $i=10;
// do {
//   echo $i.'<br>';
//   $i--;
// }
// while($i>=5);
  // for($i=1;$i<=10;$i++){
  //   if($i%2==1){
  //     continue;
  //   }
  //   echo $i;
  // }
// for($i=1;$i<=8;$i++){
//   for($j=1;$j<=3;$j++){

//   }

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name1=$_REQUEST['nhap'];
  $name2=$_REQUEST['nhap2'];
  $select=$_REQUEST['pheptinh'];
  $kq=0;
  if(($name1 || $name2) == null){
   echo "Bạn cần nhập giá trị vào 2 ô!!!";
   } else if($select=='+'){
   $kq=$name1+$name2;
   echo $kq;
  }else if ($select=='-'){
  $kq=$name1-$name2;
  echo $kq;
 }else if ($select =='*'){
  $kq=$name1*$name2;
  echo $kq;
 }else {
  $kq=$name1/$name2;
  echo $kq;
 }

}
?>
<form action="" method="post">
  <input  type="number" name="nhap" placeholder="Nhập số thứ nhất">
  <select name="pheptinh">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="nhap2" placeholder="Nhập số thứ hai">
  <input type="submit" value="Ok"> 
</form>   
<!-- <table border="1"> -->
<!-- <?php
for($i=1;$i<=8;$i++){
  echo '<tr>';
  
  for($j=1;$j<=3;$j++){
    echo '<td>'.$i.'</td>';
  }
    echo '</tr>';

}
?> -->
</table>