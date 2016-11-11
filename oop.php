<?php
	error_reporting(E_ALL);

	//deklarasi class/object
	
	class Mobil
	{
		private $warna = null;
		private $merk =null;
		
		private $kilometer=0;
		
		
		private $satuan="km";
		
		
		private function getSatuanJarak()
		{
			return $this->satuan;
		}
		
		public function setSatuanJarak($satuan_jarak)
		{
			$this->satuan=$satuan_jarak;
		}
		
		
		
		
		
		public function setWarna($warna_baru)
		
		{
			$this->warna=$warna_baru;
		}
		
		public function getWarna()
		{
			return $this->warna;
		}
		
		public function maju ($km) 
		
		{
			$this->kilometer += $km;
		}
		
		public function getJarak()
		{
			return $this->kilometer." ".$this->getSatuanJarak();
		}
		
		public function mundur ($km)
		{
			$this->kilometer -=$km;
		}
		
		
	}

	
	$mobil1 =new Mobil;
	$mobil1->setSatuanJarak("M");
		
	
	
	$mobil1->setWarna("hijau");
	$mobil1->getWarna();
	//echo $mobil1->getaWarna();
	
	$mobil1->setWarna("biru");
	//echo $mobil1->getWarna();
	
		
	
			echo $mobil1->getJarak();
		$mobil1->maju(50);
			echo $mobil1->getJarak();
			
		$mobil1->maju(20);
			echo $mobil1->getJarak();
			
		$mobil1->mundur(60);
			echo $mobil1->getJarak();
	
		//echo $mobil1->kilometer;

		
		
		
?>