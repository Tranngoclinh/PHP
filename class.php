<?php
class Introduction
{
    public $name;
    public $age;
    public $weight;
    function __construct($name,$age,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
    function setName($newName)
    {
        $this->name = $newName;
    }
    function setAge($newAge)
    {
        $this->age = $newAge;
    }
    function setWeight($newWeight)
    {
        $this->weight = $newWeight;
    }
    function getName()
    {
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function getWeight()
    {
        return $this->weight;
    }
}
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;
    function __construct($a,$b,$c)
    {
        $this->a =$a;
        $this->b =$b;
        $this->c =$c;
    }
    function getA(){
       return $this->a;
    }
    function getB(){
        return $this->b;
     }
     function getC(){
        return $this->c;
     }
     function setA($newA){
         $this->a=$newA;
     }
     function setB($newB){
        $this->b=$newB;
    }
    function setC($newC){
        $this->c=$newC;
    }
    function getDiscriminant(){
        return ($this->b*$this->b)-(4*$this->a*$this->c);
    }
    function getRoot1(){
        return ((-$this->b)+sqrt(($this->b*$this->b)-(4*$this->a*$this->c)))/(2*$this->a);
    }
    function getRoot2(){
        return ((-$this->b)-sqrt(($this->b*$this->b)-(4*$this->a*$this->c)))/(2*$this->a);
    }
}
class Rectangle
{
    public int $height;
    public int $width;
    function __construct($height,$width)
    {
        $this->height =$height;
        $this->width =$width;
    }
    public function getArea(){
       return $this->height*$this->width;
    }
    public function getPerimeter(){
        return ($this->height+$this->width)*2;
     }
   
} 
class Battery
{
    public int $energy;
    public function __construct()
    {
        
    }
    public function setEnergy($newEnergy)
    {
        $this->energy = $newEnergy;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function decreaseEnergy()
    {
         $this->energy--;
    }
}
class Fan
{
    // public const SLOW = 1;
    // public const MEDIUM = 2;
    // public const FAST =3;
    private int $speed = 1;
    private bool $on = false;
    private float $radius = 5;
    private string $color = 'blue';
    private function getSpeed (){
        return $this->speed;
    }
    public function getOn (){
        return $this->on;
    }
    public function getRadius (){
        return  $this->radius;
    }
    public function getColor (){
        return $this->color;
    }
    public function setSpeed ($newSpeed){
        $this->speed = $newSpeed;
    }
    public function setOn ($newOn){
        $this->on = $newOn;
    }
    public function setRadius($newRadius){
        $this->radius = $newRadius;
    }
    public function setColor ($newColor){
        $this->color = $newColor;
    }
    public function __construct()
    {
        
    }
    public function __toString()
    {
        if($this->on==true){
        return 'Quạt ở trạng thái bật'.'<br>'.'Tốc độ : '.$this->getSpeed().'<br>'.'Bán kính quạt : ' .$this->getRadius().'<br>'.'Color : '.$this->getColor();
    }else {
        return 'Quạt ở trạng thái tắt'.'<br>'.'Bán kính quạt : ' .$this->getRadius().'<br>'.'Color : '.$this->getColor();
    }
}
}
class StopWatch
{
   private $startTime;
   private $endTime;
   public function __construct()
   {
       
   }
   public function getstartTime(){
    return $this->startTime;
   }
   public function getendTime(){
    return $this->endTime;
    }
   public function start(){
        $this->startTime = microtime(true);
   }
   public function stop(){
        $this->endTime = microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime-$this->startTime;
    }
}
