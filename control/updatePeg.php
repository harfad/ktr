<?php
include_once'../config/dbconfig.php';
include_once '../objek/pegawai.php';

$db = new DBconfig();
$konek = $db->getKoneksi();
$upPeg = new Pegawai($konek);

if(isset($_POST['ubah'])){
	$upPeg->setNm($_POST['upnm']);
	$upPeg->setAlmt($_POST['upalm']);
	$upPeg->setTlp($_POST['uptlp']);
	$upPeg->setBag($_POST['upbag']);
	$upPeg->setStatus($_POST['upsts']);
	$upPeg->setId($_POST['upid']);
	
	if($upPeg->updatePegawai()=="Success"){
		header("Location: ../VlistPeg.php");
	}
	
}


?>