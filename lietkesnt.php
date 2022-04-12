<?php 
function isPrimeNumber($number){
if($number<2){
    return false;
}
else if ($number>=2){
    $squareRoot = sqrt($number);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
}
echo 'Các số nguyên tố nhỏ hơn 100 là: ';
for ($i=0;$i<100;$i++){
    if(isPrimeNumber($i)){
        echo $i.' ';
    }
}

?>