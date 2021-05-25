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
								<form action="<?= base_url('attribute/store') ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="kode"><strong>Kode</strong></label>
											<input type="text" name="kode" placeholder="Masukkan Kode" autocomplete="off"  class="form-control" required value="<?= mt_rand(10000000, 99999999) ?>" maxlength="8" readonly>
										</div>
										<div class="form-group col-md-12">
											<label for="name"><strong>Nama Attribute</strong></label>
											<select name="name" class="form-control" required>
												<option value="kode_barang">Kode Barang</option>
												<option value="nama_barang">Nama Barang</option>
												<option value="kategory_barang">Kategory Barang</option>
												<option value="harga_jual">Harga Jual</option>
												<option value="omset">Omset</option>
												<option value="penjualan">Penjualan</option>
												<option value="stok">Stok</option>
												<option value="animo">Animo</option>
												<option value="profit">Profit</option>
											</select>
										</div>
										<div class="form-group col-md-12">
											<label for="kode"><strong>Nama Nilai Attribute</strong></label>
											<input type="text" name="score_name" placeholder="Masukkan Nilai Attribute" autocomplete="off"  class="form-control" required>
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
