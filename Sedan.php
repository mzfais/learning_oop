<?php
/**
* 
*/
include "Kendaraan.php";

class Sedan extends Kendaraan
{
	function infoSedan(){
		return "$this->pemilik membeli kendaraan sedan $this->merk berwarna $this->warna";
	}

	function info(){
		return "Info dari Sedan";
	}

	public function infoKendaraanSedan(){
		$this->infoKendaraan();
	}

}