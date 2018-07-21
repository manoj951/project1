<?php
$lt1=$_REQUEST['lat1'];
$lt2=$_REQUEST['lat2'];
$lt3=$_REQUEST['lat3'];
$lt4=$_REQUEST['lat4'];
$lt5=$_REQUEST['lat5'];
$ln1=$_REQUEST['lon1'];
$ln2=$_REQUEST['lon2'];
$ln3=$_REQUEST['lon3'];
$ln4=$_REQUEST['lon4'];
$ln5=$_REQUEST['lon5'];
$lat1=$lt1*3.14285/180;
$lon1=$ln1*3.14285/180;
$lat2=$lt2*3.14285/180;
$lon2=$ln2*3.14285/180;
$lat3=$lt3*3.14285/180;
$lon3=$ln3*3.14285/180;
$lat4=$lt4*3.14285/180;
$lon4=$ln4*3.14285/180;
$lat5=$lt5*3.14285/180;
$lon5=$ln5*3.14285/180;
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

$rho2=$r*cos($lat4);
$z2=$r*sin($lat4);
$x2=$rho2*cos($lon4);
$y2=$rho2*sin($lon4);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d3=$r*$theta;

$rho1=$r*cos($lat4);
$z1=$r*sin($lat4);
$x1=$rho1*cos($lon4);
$y1=$rho1*sin($lon4);

$rho2=$r*cos($lat5);
$z2=$r*sin($lat5);
$x2=$rho2*cos($lon5);
$y2=$rho2*sin($lon5);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d4=$r*$theta;


$rho1=$r*cos($lat5);
$z1=$r*sin($lat5);
$x1=$rho1*cos($lon5);
$y1=$rho1*sin($lon5);

$rho2=$r*cos($lat1);
$z2=$r*sin($lat1);
$x2=$rho2*cos($lon1);
$y2=$rho2*sin($lon1);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d5=$r*$theta;

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
$d6=$r*$theta;

$rho1=$r*cos($lat4);
$z1=$r*sin($lat4);
$x1=$rho1*cos($lon4);
$y1=$rho1*sin($lon4);

$rho2=$r*cos($lat1);
$z2=$r*sin($lat1);
$x2=$rho2*cos($lon1);
$y2=$rho2*sin($lon1);

$dot=($x1*$x2)+($y1*$y2)+($z1*$z2);
$cos_theta=$dot/($r*$r);
$theta=acos($cos_theta);
$d7=$r*$theta;

$d1=$d1;
$d2=$d2;
$d3=$d3;
$d4=$d4;
$d5=$d5;
$d6=$d6;
$d7=$d7;

$s1=($d1+$d2+$d6)/2;
$area1=sqrt($s1*($s1-$d1)*($s1-$d2)*($s1-$d6));


$s2=($d3+$d6+$d7)/2;
$area2=sqrt($s2*($s2-$d3)*($s2-$d6)*($s2-$d7));

$s3=($d5+$d7+$d4)/2;
$area3=sqrt($s3*($s3-$d5)*($s3-$d7)*($s3-$d4));

echo "Distance 1 = $d1 ";echo "m <br/>";
echo "Distance 2 = $d2 \n";echo "m <br/>";
echo "Distance 3 = $d3 \n";echo "m <br/>";	
echo "Distance 4 = $d4 \n";echo "m <br/>";	
echo "Distance 5 = $d5 \n";echo "m <br/>";	
echo "Distance 6 = $d6 \n";echo "m <br/>";
echo "Distance 7 = $d7 \n";echo "m <br/><br/><br/>";			
echo "Area of ABC=";echo $area1; echo "sq meters";  echo " <br/>";	
echo "Area of ADC=";echo $area2; echo "sq meters";  echo " <br/>";
echo "Area of ADE=";echo $area3; echo "sq meters";  echo " <br/><br/><br/>";	

$total = $area1 + $area2 + $area3;
echo "Area of ABCDE="; echo $total; echo "sq meters"; echo " <br/>";	

?>
