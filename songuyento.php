<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<?php
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
$n = 100;
echo ("Liệt kê ".$n." số nguyên tố đầu tiên: ");
$dem = 0; // đếm số số nguyên tố
$i = 1;   // tìm số nguyên tố bắt dầu từ số 2
while ($dem < $n) {
    if (isPrimeNumber($i)) {
        echo ($i . " ");
        $dem++;
    }
    $i++;
}
?>
</html>