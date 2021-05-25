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
			<div id="content" data-url="<?= base_url('dataset') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
					 <h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('dataset') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('dataset/proses_tambah') ?>" id="form-tambah" method="POST">
									<h5>Tambah Dataset</h5>
									<hr>
									<div class="form-group col-2">
											<label>Kode Barang</label>
											<input type="text" name="kode_barang" value="" readonly class="form-control">
										</div>
									<div class="form-row">
										<div class="form-group col-3">
											<label for="nama_barang">Nama Barang</label>
											<select name="nama_barang" id="nama_barang" class="form-control">
												<option value="">Pilih Barang</option>
												<?php foreach ($all_barang as $barang): ?>
													<option value="<?= $barang->nama_barang ?>"><?= $barang->nama_barang ?></option>
												<?php endforeach ?>
											</select>
										</div>
										<div class="form-group col-2">
											<label>Kategori</label>
											<input type="text" name="kategori_barang" value="" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Harga Jual</label>
											<input type="text" name="harga_barang" value="" readonly class="form-control">
										</div>
										<div class="form-group col-md-6">
											<label for="animo"><strong>Omset</strong></label>
											<select name="animo" id="animo" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="Rendah">Rendah</option>
												<option value="Sedang">Sedang</option>
												<option value="Tinggi">Tinggi</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="penjualan"><strong>Penjualan</strong></label>
											<select name="penjualan" id="penjualan" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="Rendah">Rendah</option>
												<option value="Sedang">Sedang</option>
												<option value="Tinggi">Tinggi</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="stok_barang"><strong>Penjualan</strong></label>
											<select name="stok_barang" id="stok_barang" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="Rendah">Sedikit</option>
												<option value="Sedang">Penuh</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="animo"><strong>Animo</strong></label>
											<select name="animo" id="animo" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="Rendah">Rendah</option>
												<option value="Sedang">Sedang</option>
												<option value="Tinggi">Tinggi</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<label for="profit"><strong>Profit</strong></label>
											<select name="profit" id="profit" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="Rendah">Tercapai</option>
												<option value="Sedang">Tidak Tercapai</option>
											</select>
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
	<script>
		$(document).ready(function(){
			$('tfoot').hide()

			$(document).keypress(function(event){
		    	if (event.which == '13') {
		      		event.preventDefault();
			   	}
			})

			$('#nama_barang').on('change', function(){

				if($(this).val() == '') reset()
				else {
					const url_get_all_barang = $('#content').data('url') + '/get_all_barang'
					$.ajax({
						url: url_get_all_barang,
						type: 'POST',
						dataType: 'json',
						data: {nama_barang: $(this).val()},
						success: function(data){
							$('input[name="kode_barang"]').val(data.kode_barang)
							$('input[name="kategori_barang"]').val(data.kategori_barang)
							$('input[name="harga_barang"]').val(data.harga_jual)
							$('input[name="jumlah"]').val(1)
							$('input[name="satuan"]').val(data.satuan)
							$('input[name="max_hidden"]').val(data.stok)
							$('input[name="jumlah"]').prop('readonly', false)
							$('button#tambah').prop('disabled', false)

							$('input[name="sub_total"]').val($('input[name="jumlah"]').val() * $('input[name="harga_barang"]').val())
							
							$('input[name="jumlah"]').on('keydown keyup change blur', function(){
								$('input[name="sub_total"]').val($('input[name="jumlah"]').val() * $('input[name="harga_barang"]').val())
							})
						}
					})
				}
			})

			$(document).on('click', '#tambah', function(e){
				const url_keranjang_barang = $('#content').data('url') + '/keranjang_barang'
				const data_keranjang = {
					nama_barang: $('select[name="nama_barang"]').val(),
					kategori_barang: $('input[name="kategori_barang"]').val(),
					harga_barang: $('input[name="harga_barang"]').val(),
					jumlah: $('input[name="jumlah"]').val(),
					satuan: $('input[name="satuan"]').val(),
					sub_total: $('input[name="sub_total"]').val(),
				}

				if(parseInt($('input[name="max_hidden"]').val()) <= parseInt(data_keranjang.jumlah)) {
					alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="max_hidden"]').val()))	
				} else {
					$.ajax({
						url: url_keranjang_barang,
						type: 'POST',
						data: data_keranjang,
						success: function(data){
							if($('select[name="nama_barang"]').val() == data_keranjang.nama_barang) $('option[value="' + data_keranjang.nama_barang + '"]').hide()
							reset()

							$('table#keranjang tbody').append(data)
							$('tfoot').show()

							$('#total').html('<strong>' + hitung_total() + '</strong>')
							$('input[name="total_hidden"]').val(hitung_total())
						}
					})
				}

			})


			$(document).on('click', '#tombol-hapus', function(){
				$(this).closest('.row-keranjang').remove()

				$('option[value="' + $(this).data('nama-barang') + '"]').show()

				if($('tbody').children().length == 0) $('tfoot').hide()
			})

			$('button[type="submit"]').on('click', function(){
				$('input[name="kode_barang"]').prop('disabled', true)
				$('input[name="kategori_barang"]').prop('disabled', true)
				$('select[name="nama_barang"]').prop('disabled', true)
				$('input[name="harga_barang"]').prop('disabled', true)
				$('input[name="jumlah"]').prop('disabled', true)
				$('input[name="sub_total"]').prop('disabled', true)
			})

			function hitung_total(){
				let total = 0;
				$('.sub_total').each(function(){
					total += parseInt($(this).text())
				})

				return total;
			}

			function reset(){
				$('#nama_barang').val('')
				$('input[name="kode_barang"]').val('')
				$('input[name="kategori_barang"]').val('')
				$('input[name="harga_barang"]').val('')
				$('input[name="jumlah"]').val('')
				$('input[name="sub_total"]').val('')
				$('input[name="jumlah"]').prop('readonly', true)
				$('button#tambah').prop('disabled', true)
			}
		})
	</script>
</body>
</html>