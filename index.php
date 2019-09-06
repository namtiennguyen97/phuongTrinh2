<?php
include_once ('Math.php');
$math = new Math(1,5,2);
//so a,b,c co nghiem Duong => 2 nghiem phan biet la: 1,5,2.
//so a,b,c am => VO nghiem la: 6,5,2
//So a,b,c bang 0=> Co nghiem kep la: 1,2,1
echo $math->delta();
echo $math->getRoot1();
echo $math->getRoot2();
echo $math->getRoot3();