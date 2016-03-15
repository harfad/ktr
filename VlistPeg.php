<?php
$judul = "KTR||Daftar Pegawai";
require_once 'header.php';
include_once 'config/dbconfig.php';
include_once 'objek/pegawai.php';
?>

<div class="well-sm">
<div class="row">
	<form role="form" class="form-inline" method="post" action="">
		<div class="form-inline">
			<button class="btn btn-primary" type="submit" name="btncari">
				<span class="glyphicon glyphicon-search"></span> Cari
			</button>
			<input class="form-inline" name="xcari" placeholder="Cari Nama" onkeyup="this.value=this.value.toUpperCase()"/>
		</div>
	</form>
</div>
</div>
<div class="row"></br>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No.</th>
			<th>#ID. Peg</th>
			<th>Nama</th>
			<th align="center">Alamat</th>
			<th>Telp</th>
			<th>Bagian</th>
			<th>Status</th>
			<td align="center" colspan="2"><strong>Aksi</strong></td>
		</tr>
		<?php
			$no = 1;
			$db = new DBconfig();
			$konek = $db->getKoneksi();
			$peg = new Pegawai($konek);
			$tampil = $peg->showAll();
			while ($dt = $tampil->fetch(PDO::FETCH_OBJ)) {
				$xid = $dt->id_peg;
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $dt->id_peg;?></td>
			<td><?php echo $dt->nama;?></td>
			<td><?php echo $dt->alamat;?></td>
			<td><?php echo $dt->telp;?></td>
			<td><?php echo $dt->bagian;?></td>
			<td><?php echo $dt->status;?></td>
			<td align="center"><a class="glyphicon glyphicon-edit" href="VeditPeg.php?getIdedit=<?php echo $xid;?>" name="edit"></a></td>
			<td align="center"><a class="glyphicon glyphicon-remove" href="control/hapusPeg.php?getIdhapus=<?php echo $xid;?>" name="hapus"></a></td>
		</tr>
		<?php
			$no+=1;}
		?>
	</table>
</div>
<?php require_once 'footer.php';?>