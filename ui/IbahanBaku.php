<?php
include_once '../header.php';
?>


<div class="well-sm">
	<div class="bottom">
		<h3 class="h3"><u>Entri Bahan Baku</u></h3>
	</div>
	<div class="row">
		<div class="col-md-4">
			<form role="form" class="form-group" method="post" action="../control/simpanBB.php">
				<div class="form-group">
					<label for="id">#ID</label>
					<input class="form-control" name="xid" type="text"/>
				</div>
				<div class="form-group">
					<label for="pemasok">Pemasok</label>
					<input class="form-control" name="xpm" type="text" onkeyup="this.value=this.value.toUpperCase()"/>
				</div>
				<div class="form-group">
					<label for="telp">Telp</label>
					<input class="form-control" name="xtlp" type="text"/>
				</div>
				<div class="form-group">
					<label for="asal">Asal Bahan Baku</label>
					<input class="form-control" name="xasl" type="text" onkeyup="this.value=this.value.toUpperCase()"/>
				</div>
				<div class="form-group">
					<label for="berat">Berat (KG)</label>
					<input class="form-control" name="xberat" type="text"/>
				</div>
				<div class="form-group">
					<label for="harga">Harga (Rp)</label>
					<input class="form-control" name="xharga" type="text"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" name="simpan">
						<span class="glyphicon glyphicon-save"></span> Simpan
					</button>
				</div>
			</form>
		</div>		
	</div>
</div>
