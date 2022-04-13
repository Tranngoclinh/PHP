<?php
 include_once("../Modun2/PHP/class.php"); 
$intro = new Introduction('Trần Ngọc Linh',18,54);
$intro -> setName('Trần Ngọc Linh');
$intro -> setAge(18);
$intro -> setWeight(54);
echo "Tên của bạn là: ".$intro->getName().'<br>';
echo "Tuổi của bạn là: ".$intro->getAge().'<br>';
echo "Cân nặng của bạn là: ".$intro->getWeight().'<br>';
echo "==========================================".'<br>';
$quadraticEquation = new QuadraticEquation(1,2,3);
echo 'delta = '.$quadraticEquation->getDiscriminant()."<br>";
if ($quadraticEquation->getDiscriminant()>0){
echo 'X1 = '.$quadraticEquation->getRoot1().'<br>';
echo 'X2 = '.$quadraticEquation->getRoot2();
}else if ($quadraticEquation->getDiscriminant()==0){
    echo 'X1 = X2 = '.$quadraticEquation->getRoot1().'<br>';
}else {
    echo 'The equation has no roots'.'<br>';
}
echo "==========================================".'<br>';
$rectangle1 = new Rectangle(10,20);
echo 'Diện tích HCN = '.$rectangle1->getArea().'<br>';   
echo 'Chu Vi HCN = '.$rectangle1->getPerimeter().'<br>';  
echo "==========================================".'<br>';
$battery1 = new Battery();
$battery1->setEnergy(500);
$battery1->decreaseEnergy();
echo $battery1->getEnergy().'<br>';
echo "==========================================".'<br>';
$fan = new Fan();
$fan->setSpeed(3);
$fan->setOn(true);  
$fan->setRadius(10);
$fan->setColor('yellow');
echo $fan->__toString().'<br>';
echo "==========================================".'<br>';
$fan1 = new Fan();
$fan1->setSpeed(2);
$fan1->setOn(false);  
$fan1->setRadius(5);
$fan1->setColor('blue');
echo $fan1->__toString().'<br>';
echo "==========================================".'<br>';
$stopwatch1= new StopWatch();
$stopwatch1->start();
for ($i=1;$i<=100000;$i++){
    // echo $i.'<br>';
};
$stopwatch1->stop();
echo $stopwatch1->getElapsedTime();

?>