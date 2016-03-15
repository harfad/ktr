<?php
/**
 * 
 */
 
class DBconfig{
	private $dbnm = "db_ktr";
	private $dbhost = "localhost";
	private $dbusr = "root";
	private $dbpass= "admin";
	
	public $koneksi;
	
	
	public function getKoneksi(){
		$this->koneksi = null;
		
		try{
			$this->koneksi = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbnm, $this->dbusr, $this->dbpass);
			
		}catch(PDOException $pdexcep){
			 echo "Koneksi errro" .$pdexcep->getMessage();  
		}
		
		return $this->koneksi;
	}
}

?>