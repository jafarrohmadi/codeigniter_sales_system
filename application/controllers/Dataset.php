<?php

use Dompdf\Dompdf;

class Dataset extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'dataset';
		$this->load->model('M_dataset', 'm_dataset');
	}

    public function index(){
		$this->data['title'] = 'Dataset';
		$this->data['all_barang'] = $this->m_dataset->lihat();
		$this->data['no'] = 1;

		$this->load->view('dataset/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Tambah Dataset';

		$this->load->view('dataset/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'kategori_barang' => $this->input->post('kategori_barang'),
			'harga_jual' => $this->input->post('harga_jual'),
			'omset' => $this->input->post('omset'),
			'penjualan' => $this->input->post('penjualan'),
			'stok_barang' => $this->input->post('stok_penjualan'),
			'animo' => $this->input->post('animo'),
			'profit' => $this->input->post('profit'),
		];

		if($this->m_barang->tambah($data)){
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Ditambahkan!');
			redirect('dataset');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Ditambahkan!');
			redirect('dataset');
		}
	}

	public function ubah($kode_barang){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Ubah Barang';
		$this->data['dataset'] = $this->m_dataset->lihat_id($kode_barang);

		$this->load->view('dataset/ubah', $this->data);
	}

	public function proses_ubah($kode_barang){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'kategori_barang' => $this->input->post('kategori_barang'),
			'harga_jual' => $this->input->post('harga_jual'),
			'omset' => $this->input->post('omset'),
			'penjualan' => $this->input->post('penjualan'),
			'stok_barang' => $this->input->post('stok_penjualan'),
			'animo' => $this->input->post('animo'),
			'profit' => $this->input->post('profit'),
		];

		if($this->m_dataset->ubah($data, $kode_barang)){
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Diubah!');
			redirect('dataset');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
			redirect('dataset');
		}
	}

	public function hapus($kode_barang){
		if ($this->session->login['role'] == 'kasir'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('penjualan');
		}
		
		if($this->m_barang->hapus($kode_barang)){
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Dihapus!');
			redirect('dataset');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Dihapus!');
			redirect('dataset');
		}
	}

	public function export(){
		$dompdf = new Dompdf();
		$this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['title'] = 'Laporan Data Barang';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('barang/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Barang Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}