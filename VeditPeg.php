<?php
$judul="KTR||Edit Data";
require_once 'header.php';
include_once 'config/dbconfig.php';
include_once 'objek/pegawai.php';

$db = new DBconfig();
$kon = $db->getKoneksi();
$getvalue = new Pegawai($kon);

if(isset($_GET['getIdedit'])){

	$getvalue->setId($_GET['getIdedit']);
	$getvalue->showOne();
}

?>
<div class="well-sm">
	<form role="form" class="form-group" method="post" action="control/updatePeg.php">
		<div class="row">
			<div class="col-sm-4">
				
				<div class="form-group">
					<label for="id">#ID</label>
					<input class="form-control" name="upid" readonly="readonly" value="<?php echo $getvalue->getId(); ?>" /></td></tr>
				</div>
				
				<div class="form-group">
					<label for="nama">Nama</label>	
					<input class="form-control" name="upnm" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $getvalue->getNm(); ?>" /></td></tr>
				</div>
				
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" onkeyup="this.value=this.value.toUpperCase()" name="upalm" placeholder="Enter Alamat"><?php echo $getvalue->getAlmt(); ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="telp"></label>
					<input class="form-control" onkeyup="this.value=this.value.toUpperCase()" name="uptlp" placeholder="Enter Telp" value="<?php echo $getvalue->getTlp(); ?>"/></td></tr>
				</div>
				
				<div class="form-group">
					<label for="bagian">Bagian</label>			
					<select class="form-control" name="upbag">
						<option value="Packing"<?php if($getvalue->getBag()=="Packing") echo'selected="selected"';?>>Packing</option>
						<option value="Sales"<?php if($getvalue->getBag()=="Sales") echo'selected="selected"';?>>Sales</option>
						<option value="Teknisi"<?php if($getvalue->getBag()=="Teknisi") echo'selected="selected"';?>>Teknisi</option>
						<option value="Ma-angai"<?php if($getvalue->getBag()=="Ma-angai") echo'selected="selected"';?>>Ma-angai</option>
						<option value="Ma-randang"<?php if($getvalue->getBag()=="Ma-randang") echo'selected="selected"';?>>Ma-randang</option>
						<option value="Kantor"<?php if($getvalue->getBag()=="Kantor") echo'selected="selected"';?>>Kantor</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="status">Status</label>
					<select class="form-control" name="upsts">
						<option value="Harian"<?php if($getvalue->getStat()=="Harian")echo'selected="selected"';?>>Harian</option>
						<option value="Mingguan"<?php if($getvalue->getStat()=="Mingguan")echo'selected="selected"';?>>Mingguan</option>
						<option value="Bulanan"<?php if($getvalue->getStat()=="Bulanan")echo'selected="selected"';?>>Bulanan</option>
					</select>
				</div>
				
				<div class="form-group">		
					<button class="btn btn-primary" name="ubah">
						Ubah <span class="glyphicon glyphicon-save"></span>
					</button>
				</div>
				
			</div>
		</div>
	</form>
</div>

<?php require_once 'footer.php';?>