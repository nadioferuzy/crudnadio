<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utama extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_mhs');
	}
	public function index()
	{
		$queryAllMahasiswa = $this->m_mhs->getDataMahasiswa();
		$DATA = array('queryAllmhs' => $queryAllMahasiswa);
		$this->load->view('header');
		$this->load->view('home', $DATA);
		$this->load->view('footer');
		//$this->load->view('home');
	}
	public function halaman_tambah() {
		$this->load->view('header');
		$this->load->view('tambah');
		$this->load->view('footer');
	}
	public function halaman_edit($nim) {
		$queryMahasiswaDetail =$this->m_mhs->getDataMahasiswaDetail($nim);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('header');
		$this->load->view('edit', $DATA);
		$this->load->view('footer');
	}
	public function fungsiTambah(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$Arrinsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
		$this->m_mhs->insertDataMahasiswa($Arrinsert);
		redirect(base_url(''));
	}
	public function fungsiEdit(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$Arrupdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
		$this->m_mhs->updateDataMahasiswa($nim, $Arrupdate);
		redirect(base_url(''));
	}
	public function fungsiDelete($nim){
		$this->m_mhs->deleteDataMahasiswa($nim);
		redirect(base_url(''));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */