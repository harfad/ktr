<?php

require_once '../config/dbconfig.php';
require_once '../objek/pegawai.php';

$db = new DBconfig();
$kon = $db->getKoneksi();
$speg = new Pegawai($kon);


//$_GET HANYA DIGUNAKAN UNTUK MENGAMBIL PARAMETER PRIMARY KEY DIRI LINK UNTUK MENGHAPUS DATA
if(isset($_GET['getIdhapus'])){ 
	
	$speg->setId($_GET['getIdhapus']);
	$speg->delPegawai();
	header("Location: ../VlistPeg.php");
	
	
}

?>