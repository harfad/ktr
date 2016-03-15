<?php
require_once '../config/dbconfig.php';
require_once '../objek/bahanBaku.php';

$db = new DBconfig();
$konek = $db->getKoneksi();
$bb = new Bahanbaku($konek);

if(isset($_POST['simpan'])){
	$bb->setId($_POST['xid']);
	$bb->setPemasok($_POST['xpm']);
	$bb->setTelp($_POST['xtlp']);
	$bb->setAsal($_POST['xasl']);
	$bb->setBerat($_POST['xberat']);
	$bb->setHarga($_POST['xharga']);
	
	$bb->add();
	header("Location: ../ui/IbahanBaku.php");
}

?>