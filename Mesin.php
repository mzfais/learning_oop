<?php
class Mesin{
	private $tipe;
	private $silinder;
	private $bbm;
	private $nomesin;

	function __construct($tipe,$silinder,$bbm,$no){
		$this->tipe=$tipe;
		$this->silinder=$silinder;
		$this->bbm=$bbm;
		$this->nomesin=$no;
	}

	public function getTipeMesin(){
		return $this->tipe;
	}

	public function getIsiSilinderMesin(){
		return $this->silinder;
	}

	public function getBbmMesin(){
		return $this->bbm;
	}

	public function getNoMesin(){
		return $this->nomesin;
	}
}