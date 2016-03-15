<?php

class Bahanbaku{
	private $id, $pemasok, $telp, $asal, $berat, $harga, $total, $koneksi;
	
	public function __construct($db){
		$this->koneksi = $db;
	}
	
	//setter
	public function setId($sid){ $this->id = $sid; }
	public function setPemasok($spem){ $this->pemasok = $spem; }
	public function setTelp($stlp){ $this->telp = $stlp; }
	public function setAsal($sasl){ $this->telp = $sasl; }
	public function setBerat($sbrt){ $this->berat = $sbrt; }
	public function setHarga($shrg){ $this->harga = $shrg; }
	/*karena variable total merupakan hasil berat*harga, maka 
	 * setterTOtal tidak perlu dibuat. langsung getterTotal saja.*/
	 
	//getter
	public function getId(){ return $this->id; }
	public function getPemasok(){ return $this->pemasok; }
	public function getTelp(){ return $this->telp; }
	public function getAsal(){ return $this->asal; }
	public function getBerat(){ return $this->berat; }
	public function getHarga(){ return $this->harga;}
	
	public function getTotal(){ return $this->getBerat * $this->getHarga; }
	
	
	public function add(){
		$query="INSERT INTO tb_bahanBaku SET id = ?, pemasok = ?, 
				telp = ?, asal = ?, beratKg = ?, hargaKg = ?, total = ? ";
		$stmt = $this->koneksi->prepare($query);
		$stmt->bindParam(1, $this->getId());
		$stmt->bindParam(2, $this->getPemasok());
		$stmt->bindParam(3, $this->getTelp());
		$stmt->bindParam(4, $this->getAsal());
		$stmt->bindParam(5, $this->getBerat());
		$stmt->bindParam(6, $this->getHarga());
		$stmt->bindParam(7, $this->getTotal());
	}
	
}
/*end of class bahanBaku*/?>