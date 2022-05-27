
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
		$this->user_login->proteksi_halaman();
		$this->load->model(['m_pasien','m_dokter','m_poli','m_obat','m_rekam_medis','m_admin']);

        }

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
                        'sub_title'=> 'Data Rekam Medis',
                        'rm' => $this->m_rekam_medis->get_all_data(),
			'total_pasien'=> $this->m_admin->total_pasien(),
			'total_dokter'=> $this->m_admin->total_dokter(),
			'total_rekam_medis'=> $this->m_admin->total_rekam_medis(),
			'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'admin/v_admin',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);;
	}

}

/* End of file Controllername.php */

