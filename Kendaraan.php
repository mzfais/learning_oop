<?php

class Kendaraan{
	public $merk;
	public $warna;
	protected $pemilik;

	function __construct($m="Toyota",$w="Hitam",$p="Wahyono"){
		$this->merk=$m;
		$this->warna=$w;
		$this->pemilik=$p;
	}

	protected function InfoKendaraan(){
		echo $this->pemilik. " memiliki kendaraan dengan merk ".$this->merk." yang berwarna ".$this->warna;
	}

	public function HidupkanMesin(){
		return $this->pemilik . " Menyalakan Mesin Kendaraan";
	}

	public function MatikanMesin(){
		return $this->pemilik . " Mematikan Mesin Kendaraan";
	}

	public function info(){
		return "Info dari Kendaraan";
	}

	public function InfoKendaraan2(){
		$this->InfoKendaraan();
	}
}