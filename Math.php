<?php


class Math
{
private $a;
private $b;
private $c;
public function __construct($a,$b,$c)
{
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
}
    public function setA($a)
    {
        $this->a = $a;
    }
    public function getA()
    {
        return $this->a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getB()
    {
        return $this->b;
    }
    public function setC($c)
    {
        $this->c = $c;
    }
    public function getC()
    {
        return $this->c;
    }
    // tinh delta
    public function delta(){
    return ($this->b * $this->b)-4*($this->a*$this->c)."<br>";
    }
    public function getRoot1(){
    if ($this->delta()<0){
echo ' Phuong trinh vo nghiem';
    }
    }
 public function getRoot2(){
    if ($this->delta()==0){
        echo " Phuong trinh co nghiem kep: ".($this->b*(-1)) / 2*$this->a;
    }
 }
public function getRoot3(){
    if ($this->delta()>0){
        echo ' Phuong trinh co 2 nghiem phan biet: '.((($this->b*-1))+ $this->delta())/ 2*$this->a."<br>";
        echo ' Phuong trinh co 2 nghiem phan biet: '.((($this->b*-1))- $this->delta())/ 2*$this->a."<br>";
    }
}
}