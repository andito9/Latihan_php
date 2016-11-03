<?php

$a=array('hello','Hallo');
var_dump($a);
//array(2) {[o]=>string(5)"hello"
//			[1]=>strin(5) "Hallo"}

echo "<pre>".print_r($a,1)."</pre>";
//Array
//(
//[0]=>hello
//[1]=>Hallo
//)

$b =[];
for($i=0;$i<1000;$i++){
	$b[$i]="mobil".($i+1);
}
for($i=0; $i < sizeof($b);$i++){
if($i>199 and $i <299){ 
	echo$b[$i];
	}
}	
//echo "<pre>".print_r($b,1)."</pre>";




$c=['d'=>['e'=>'s'],
	array('x'=>'u'),
	5=>[3,4],
	['x','d'=>[1,'f']
	]
	];
	
	echo"<br>".$c['d']['e'];
	echo"<br>".$c['0']['x'];
	echo"<br>".$c[5][1];
	echo"<br>".$c[6]['d'][1];
	
	echo "<pre>".print_r($c,1)."</pre>";
	
	//KEY=NAMA FIELD,,,,,VALUES=NAMA DATA;
	
	//input ke array
	
$x=[];

//$a=1;
//$b=2;
//$c=$a+$b;


$x['nama']='nama';
$x['alamat']='alamat';
$s=[];
$s['identitas']=$x;
$u[]=$s;

$x['nama']='nama 2';
$x['alamat']='alamat 2';
$s=[];
$s['identitas']=$x;
$u[]=$s;

//tugas tampilkan bilangan prima 
// for($i=1;$i<=100;$i++){
//	prima logic
	// if($i==prima){
// $u[$i]['identitas']['nama']='nama'.$i;
// $u[$i]['identitas']['alamat']='alamat'.$i;
// }
// }


// $u[1]['identitas']['nama']='nama2';
// $u[1]['identitas']['alamat']='alamat2'

echo "<pre>".print_r($u,1)."</pre>";



?>