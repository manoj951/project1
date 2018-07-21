<?php
$lt1=$_REQUEST['lat1'];
$lt2=$_REQUEST['lat2'];
$lt3=$_REQUEST['lat3'];
$ln1=$_REQUEST['lon1'];
$ln2=$_REQUEST['lon2'];
$ln3=$_REQUEST['lon3'];
$lat1=$lt1*3.14285/180;
$lon1=$ln1*3.14285/180;
$lat2=$lt2*3.14285/180;
$lon2=$ln2*3.14285/180;
$lat3=$lt3*3.14285/180;
$lon3=$ln3*3.14285/180;
$r=6378100;

$rho1=$r*cos($lat1);
$z1=$r*sin($lat1);
$x1=$rho1*cos($lon1);
$y1=$rho1*sin($lon1);

$rho2=$r*cos($lat2);
$z2=$r*sin($lat2);
$x2=$rho2*cos($lon2);
$y2=$rho2*sin($lon2);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d1=$r*$theta;


$rho1=$r*cos($lat2);
$z1=$r*sin($lat2);
$x1=$rho1*cos($lon2);
$y1=$rho1*sin($lon2);

$rho2=$r*cos($lat3);
$z2=$r*sin($lat3);
$x2=$rho2*cos($lon3);
$y2=$rho2*sin($lon3);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d2=$r*$theta;


$rho1=$r*cos($lat3);
$z1=$r*sin($lat3);
$x1=$rho1*cos($lon3);
$y1=$rho1*sin($lon3);

$rho2=$r*cos($lat1);
$z2=$r*sin($lat1);
$x2=$rho2*cos($lon1);
$y2=$rho2*sin($lon1);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d3=$r*$theta;

$d1=$d1;
$d2=$d2;
$d3=$d3;

$s=($d1+$d2+$d3)/2;
$area=sqrt($s*($s-$d1)*($s-$d2)*($s-$d3));
echo "Distance 1 = $d1 ";echo "m <br/>";
echo "Distance 2 = $d2 \n";echo "m <br/>";
echo "Distance 3 = $d3 \n";echo "m <br/>";					
echo "Area is ";echo $area; echo "sq meters"
?>
