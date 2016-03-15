<?php

require_once '../config/dbconfig.php';
require_once '../objek/pegawai.php';

$db = new DBconfig();
$kon = $db->getKoneksi();
$speg = new Pegawai($kon);

if(isset($_POST['simpan'])){
	$speg->setId($_POST['xid']); 
	$speg->setNm($_POST['xnama']);
	$speg->setAlmt($_POST['xalamat']);
	$speg->setTlp($_POST['xtelp']);
	$speg->setBag($_POST['xbagian']);
	$speg->setStatus($_POST['xstatus']);
	
	$speg->addPegawai();
	
	header("Location: ../VinputPeg.php");
	
}


?>