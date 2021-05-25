<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
<div id="wrapper">
	<!-- load sidebar -->
	<?php $this->load->view('partials/sidebar.php') ?>

	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content" data-url="<?= base_url('attribute') ?>">
			<!-- load Topbar -->
			<?php $this->load->view('partials/topbar.php') ?>

			<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('attribute') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('attribute/update/' . $attribute->id) ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="kode_barang"><strong>Kode</strong></label>
											<input type="text" name="kode" placeholder="Masukkan Kode" autocomplete="off"  class="form-control" required value="<?= $attribute->kode ?>" maxlength="8" readonly>
										</div>
										<div class="form-group col-md-12">
											<label for="nama_barang"><strong>Nama Barang</strong></label>
											<select name="name" class="form-control" required>
												<option value="kode_barang" <?php if($attribute->name == 'kode_barang') { ?> selected <?php } ?> >Kode Barang</option>
												<option value="nama_barang" <?php if($attribute->name == 'nama_barang') { ?> selected <?php } ?> >Nama Barang</option>
												<option value="kategory_barang" <?php if($attribute->name == 'kategory_barang') { ?> selected <?php } ?> >Kategory Barang</option>
												<option value="harga_jual" <?php if($attribute->name == 'harga_jual') { ?> selected <?php } ?> >Harga Jual</option>
												<option value="omset" <?php if($attribute->name == 'omset') { ?> selected <?php } ?> >Omset</option>
												<option value="penjualan" <?php if($attribute->name == 'penjualan') { ?> selected <?php } ?> >Penjualan</option>
												<option value="stok" <?php if($attribute->name == 'stok') { ?> selected <?php } ?> >Stok</option>
												<option value="animo" <?php if($attribute->name == 'animo') { ?> selected <?php } ?> >Animo</option>
												<option value="profit" <?php if($attribute->name == 'profit') { ?> selected <?php } ?> >Profit</option>
											</select>
										</div>
										<div class="form-group col-md-12">
											<label for="kode"><strong>Nama Nilai Attribute</strong></label>
											<input type="text" name="score_name" placeholder="Masukkan Nilai Attribute" autocomplete="off"  class="form-control" required value="<?= $attribute->score_name ?>">
										</div>
									</div>
							</div>
							<hr>
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
								<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- load footer -->
	<?php $this->load->view('partials/footer.php') ?>
</div>
</div>
<?php $this->load->view('partials/js.php') ?>
</body>
</html>
