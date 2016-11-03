<?php

//condition
//akan menjalankan aksi jika kondisi bernilai true

//struktur:
//if(kondisi){
//aksi
//}

//contoh

$i=5;
//kondisi 1
//if($i=5){//jika benar
	//echo"nilai i adalah 5";//tampil
//}

//struktur
//if (kondisi){
//aksi 1
//}else{
//aksi 2
//}
//echo"<br>";
//2 kondisi
//if($i==4){//jika bernilai false
			//echo"nilai i bukan 4";
			//}else{
				//echo"nilai i bukan 4";
			//}

			
//struktur//if(kondisi 1){
//aski 1
//}else if(kondisi){
//aksi 2	
//}else{
//aksi 3	
//}
	
//echo"<br>";
//3 kondisi/lebih
//if($i==3){//jika berhasil false
//echo"nilai i adalah 3";
//}else if($i==5){
//echo"nilai i adalah 5";
//}else{
//echo"nilai 1 bukan 3atau 5";
//}

	
	
$i = 5;

switch($i){
	case 1:
		echo"nilai i adalah 1";
	break;
	case 3:
		echo"nilai i adalah 3";
	break;
	case 5;
		echo"nilai i adalah 5";
	break;
	default:
		echo"nilai i bukan 1,3,5";
	break;
	}
	
	echo"<br>";
$lalin="hijau";

switch($lalin){
	case 'hijau':
		echo"jalan";
	break;
	case'merah':
		echo"berhenti";
	break;
	case'kuning':
		echo"hati-hati";
	break;
	
	default:
	echo"(?)";
	break;
}	


	
?>
	
				