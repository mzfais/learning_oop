<?php
/**
* 
*/
include "Sedan.php";

class Corolla extends Sedan
{
	private $mesin;

	function __construct(Mesin $mesin){
		parent::__construct();
		$this->mesin = $mesin;
	}

	public function infoCorolla(){
		return "$this->pemilik membeli sedan $this->merk Corolla berwarna $this->warna dengan mesin bertipe ".
		$this->mesin->getTipeMesin()." ".$this->mesin->getIsiSilinderMesin()." dan bahan bakar ".$this->mesin->getBbmMesin();
	}	

	function infoMesinCorolla(){
		return $this->HidupkanMesin();
	}

	function info(){
		return "Info dari Corolla";
	}

	function infoDetil(){
		return parent::info();
	}

	public function getMesin(){
		return $this->mesin;
	}
}