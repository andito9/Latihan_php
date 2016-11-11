 <?php 
		
		// function ulang ($banyak,$kalimat){
				// for ($i=0;$i<$banyak;$i++)
				// {
					// return $kalimat;
				// }
			
		// }
			
			// echo ulang (100,"hello");
			
			
			// function ulang2($banyak,$kalimat)
			// {
				// if ($banyak>100)
				// {
					// return $kalimat;
				// }else
				// {
					// return 0;
				// }
			// }
			
			// echo ulang (100,"hello");
			// echo ulang2(100,"hello");
			
			
			function kabataku($oprator,$a1,$a2)
			{
				if($oprator =="+")
				{
					return $a1+$a2;
				}else if($oprator == "-")
				{
					return $a1-$a2;
				}else if ($oprator =="/")
				{
					return $a1/$a2;
				}else if($oprator =="x")
				{
					return $a1*$a2;
				}else 
				{
					return "no Oprator";
				}
			} 
			
			
			echo kabataku ("+",5,6)."<br>";//
			echo kabataku ("/",12,6)."<br>";//
			echo kabataku ("x",4,3)."<br>";//
			echo kabataku ("-",5,6)."<br>";//
			
			echo date ("Y-m-d")."<br>";//2016-11-03
			echo date ("l,d F Y")."<br>";//Thursday,03 November 2016
			//l = nama hari full misalnya thursday 
			//D = Nama hari tidak full misalnya thu
			//Y= Years
			//m = Bulan 
			//d = day 
			
			$hari =[0,"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"];
			
			echo date ("Y-m-d")."<br>";//2016-11-03
			echo $hari [date ("N")].date(",d F Y")."<br>";//Thursday,03 November 2016
			
			
			date_default_timezone_set("Asia/Jakarta");//Jika settingan di PHP  Bukan GMT+7
			echo date ("H:i:s")."<br>";//
			
 ?>