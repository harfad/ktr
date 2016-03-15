<?php
/**
 * 
 */
 class Pegawai{
 	
 	/*variabel deklarasi*/
 	private $id, $nama, $telp, $alamat, $bagian, $status, $koneksi;
	
	/*konstruktor*/
	public function __construct($db){
		$this->koneksi = $db;
	}
	
	//setter
	public function setId($sid){ $this->id = $sid; }	
	public function setNm($nm){	$this->nama = $nm; }	
	public function setTlp($tlp){ $this->telp = $tlp;}	
	public function setAlmt($almt){	$this->alamat = $almt; }	
	public function setBag($bag){ $this->bagian = $bag; }	
	public function setStatus($stat){ $this->status = $stat; }
	//getter
	public function getId(){ return $this->id;  }
	public function getNm(){ return $this->nama; }
	public function getAlmt(){ return $this->alamat; }
	public function getTlp(){ return $this->telp; }
	public function getBag(){ return $this->bagian; }
	public function getStat(){ return $this->status; }
	
	//fungsi auto_id primary key
	public function autoID(){
		$query="SELECT MAX(id_peg) AS idmax FROM tb_pegawai";
		$stmt = $this->koneksi->prepare($query);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		$idpeg = $data['idmax'];
		
		$nourut = (int) substr($idpeg, 3,4);
		$nourut++;
		$nid = "KTR".sprintf("%04s" ,$nourut);
		return $nid;
	}
	
	public function showAll(){
		$query = "SELECT * FROM tb_pegawai";
		$statement = $this->koneksi->prepare($query);
		$statement->execute();
		return $statement;
		
	}
	
	//fungsi untuk memanggi satu record data melalui id_peg. digunakan untuk update data
	public function showOne(){
		$query = "SELECT id_peg, nama, alamat, telp, bagian, status FROM tb_pegawai WHERE id_peg = ?";
		$stmt = $this->koneksi->prepare($query);
		$stmt->bindParam(1, $this->getId());
		$stmt->execute();
	
		$row = $stmt->fetch(PDO::FETCH_ASSOC);//assoc digunakan untuk mengambil 1 record. beda dngan OBJ untuk semua record.
		$this->setId($row['id_peg']);
		$this->setNm($row['nama']);
		$this->setAlmt($row['alamat']);
		$this->setTlp($row['telp']);
		$this->setBag($row['bagian']);
		$this->setStatus($row['status']);
			
	}
	
	public function addPegawai(){
		$query = "INSERT INTO tb_pegawai SET id_peg = ?, nama = ?, alamat = ?, telp = ?, bagian = ?, status = ?";
		$sttm = $this->koneksi->prepare($query);
		$sttm->bindParam(1, $this->getId());
		$sttm->bindParam(2, $this->getNm());
		$sttm->bindParam(3, $this->getAlmt());
		$sttm->bindParam(4, $this->getTlp());
		$sttm->bindParam(5, $this->getBag());
		$sttm->bindParam(6, $this->getStat());
		if ($result = $sttm->execute()) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}
	
	public function delPegawai(){
		$query = "DELETE FROM tb_pegawai WHERE id_peg = ?";
		$stmt = $this->koneksi->prepare($query);
		$stmt->bindParam(1, $this->getId());
		if($result = $stmt->execute()){
			return TRUE;
		}else{
			return FALSE;
		}		
	}
	
	public function updatePegawai(){
		$query ="UPDATE tb_pegawai SET nama = ?, alamat = ?, telp = ?, bagian = ?, status = ? WHERE id_peg = ?";
		$stmt = $this->koneksi->prepare($query);
		$stmt->bindParam(1, $this->getNm());
		$stmt->bindParam(2, $this->getAlmt());
		$stmt->bindParam(3, $this->getTlp());
		$stmt->bindParam(4, $this->getBag());
		$stmt->bindParam(5, $this->getStat());
		$stmt->bindParam(6, $this->getId());
		
		if($stmt->execute()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
 }
?>