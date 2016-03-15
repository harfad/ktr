<?php $judul = "KTR||Input Data Pegawai";?>
<?php include_once 'header.php';?>
<?php
include_once "objek/pegawai.php";
include_once 'config/dbconfig.php';

$db = new DBconfig();
$konek = $db->getKoneksi();
$peg = new Pegawai($konek);
$nid = $peg->autoID();

?>
<div class="well-sm">
<form role="form" class="form-group" method="post" action="control/simpanPeg.php">
	<div class="row">
		<div class="col-sm-4">		
			
			<div class="form-group">
				<label for="id">#ID</label>		
				<input class="form-control" name="xid" readonly="readonly" value= "<?php echo $peg->autoID(); ?>"/>
			</div>
	
			<div class="form-group">
				<label for="nama">Nama</label>		
				<input class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="xnama" placeholder="Enter Nama Anda" />
			</div>
			
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="xalamat" placeholder="Alamat Lengkap"></textarea>
			</div>
			
			<div class="form-group">
				<label for="telp">Telp</label>
				<input class="form-control" name="xtelp" placeholder="Harus Angka" />
			</div>
		
			<div class="form-group">
				<label for="bagian">Bagian</label>
				<select class="form-control" name="xbagian">
					<option value="Packing">Packing</option>
					<option value="Sales">Sales</option>
					<option value="Teknisi">Teknisi</option>
					<option value="Ma-angai">Ma-angai</option>
					<option value="Ma-randang">Ma-randang</option>
					<option value="Kantor">Kantor</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="xstatus">
					<option value="Harian">Harian</option>
					<option value="Mingguan">Mingguan</option>
					<option value="Bulanan">Bulanan</option>
				</select>
			</div>
			
			<div class="form-group">
				<button class="btn btn-primary" name="simpan">
					Simpan <span class="glyphicon glyphicon-save"></span>
				</button>
			</div>
		</div>
	</div>	
</form>
</div>