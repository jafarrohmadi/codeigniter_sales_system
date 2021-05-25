<?php

use Dompdf\Dompdf;

class Attribute extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->login['role'] != 'kasir' && $this->session->login['role'] != 'admin') redirect();

		$this->data['aktif'] = 'attribute';
		$this->load->model('M_attribute', 'm_attribute');
	}

	public function index()
	{
		$this->data['title']         = 'Data Attribute';
		$this->data['all_attribute'] = $this->m_attribute->get();

		$this->load->view('attribute/index', $this->data);
	}

	public function create()
	{
		if ($this->session->login['role'] == 'kasir') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title'] = 'Tambah Attribute';

		$this->load->view('attribute/create', $this->data);
	}

	public function store()
	{
		if ($this->session->login['role'] == 'kasir') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'kode'       => $this->input->post('kode'),
			'name'       => $this->input->post('name'),
			'show_name'  => ucwords(str_replace('_', ' ', $this->input->post('name'))),
			'score_name' => $this->input->post('score_name'),
		];

		if ($this->m_attribute->store($data)) {
			$this->session->set_flashdata('success', 'Data Attribute <strong>Berhasil</strong> Ditambahkan!');
			redirect('attribute');
		}
		else {
			$this->session->set_flashdata('error', 'Data Attribute <strong>Gagal</strong> Ditambahkan!');
			redirect('attribute');
		}
	}

	public function edit($id)
	{
		if ($this->session->login['role'] == 'kasir') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$this->data['title']     = 'Ubah Attribute';
		$this->data['attribute'] = $this->m_attribute->find($id);

		$this->load->view('attribute/edit', $this->data);
	}

	public function update($id)
	{
		if ($this->session->login['role'] == 'kasir') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('penjualan');
		}

		$data = [
			'name'       => $this->input->post('name'),
			'show_name'  => ucwords(str_replace('_', ' ', $this->input->post('name'))),
			'score_name' => $this->input->post('score_name'),
		];

		if ($this->m_attribute->update($data, $id)) {
			$this->session->set_flashdata('success', 'Data Attribute <strong>Berhasil</strong> Diubah!');
			redirect('attribute');
		}
		else {
			$this->session->set_flashdata('error', 'Data Attribute <strong>Gagal</strong> Diubah!');
			redirect('attribute');
		}
	}

	public function delete($id)
	{
		if ($this->session->login['role'] == 'kasir') {
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('penjualan');
		}

		if ($this->m_attribute->delete($id)) {
			$this->session->set_flashdata('success', 'Data Attribute <strong>Berhasil</strong> Dihapus!');
			redirect('attribute');
		}
		else {
			$this->session->set_flashdata('error', 'Data Attribute <strong>Gagal</strong> Dihapus!');
			redirect('attribute');
		}
	}

//	public function export(){
//		$dompdf = new Dompdf();
//		$this->data['perusahaan'] = $this->m_usaha->lihat();
//		$this->data['all_barang'] = $this->m_barang->lihat();
//		$this->data['title'] = 'Laporan Data Barang';
//		$this->data['no'] = 1;
//
//		$dompdf->setPaper('A4', 'Landscape');
//		$html = $this->load->view('barang/report', $this->data, true);
//		$dompdf->load_html($html);
//		$dompdf->render();
//		$dompdf->stream('Laporan Data Barang Tanggal ' . date('d F Y'), array("Attachment" => false));
//	}
}
