
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekam_medis extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
		$this->user_login->proteksi_halaman();
                $this->load->model(['m_pasien','m_dokter','m_poli','m_obat','m_rekam_medis','m_admin']);

        }

	public function index()
	{
		$data = array(
			'title' => 'Rekam Medis',
                        'sub_title'=> 'Data Rekam Medis',
                        'rm' => $this->m_rekam_medis->get_all_data(),
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'rekam_medis/v_rekam_medis',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
	}

        public function add()
        {
                $this->form_validation->set_rules('id_pasien', 'Pasien', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_dokter', 'Dokter', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_obat', 'Obat', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_poli', 'Poli', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));                $this->form_validation->set_rules('id_poli', 'Poli', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('keluhan', 'Keluhan', 'required',
                array('required'=>'%s Harus diisi !!!!'
        ));
                $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required',
                array('required'=>'%s Harus diisi !!!!'
        ));

        if($this->form_validation->run() == FALSE) {

                 $data = array(
			'title' => 'Rekam Medis',
                        'sub_title'=> 'Data Rekam Medis',
                        'poli'=>$this->m_poli->get_all_data(),
                        'obat'=>$this->m_obat->get_all_data(),
                        'pasien'=>$this->m_pasien->get_all_data(),
                        'dokter'=>$this->m_dokter->get_all_data(),
			'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'rekam_medis/v_add',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);

        }else{
                $data = array(
                        'id_pasien'=> $this->input->post('id_pasien'),
                        'id_dokter' => $this->input->post('id_dokter'),
                        'id_poli' => $this->input->post('id_poli'),
                        'id_obat' => $this->input->post('id_obat'),
                        'keluhan' => $this->input->post('keluhan'),
                        'diagnosa' => $this->input->post('diagnosa'),
                        'tgl_periksa' => $this->input->post('tgl_periksa'),
                );
                $this->m_rekam_medis->add($data);
                $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                redirect('rekam_medis');
        }
                $data = array(
			'title' => 'Rekam Medis',
                        'sub_title'=> 'Data Rekam Medis',
                        'poli'=>$this->m_poli->get_all_data(),
                        'obat'=>$this->m_obat->get_all_data(),
                        'pasien'=>$this->m_pasien->get_all_data(),
                        'dokter'=>$this->m_dokter->get_all_data(),
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'rekam_medis/v_add',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

        public function update($id_rm)
        {
                $this->form_validation->set_rules('id_pasien', 'Pasien', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_dokter', 'Dokter', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_obat', 'Obat', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('id_poli', 'Poli', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));                $this->form_validation->set_rules('id_poli', 'Poli', 'required',
                array('required'=>'%s Belum dipilih !!!!'
        ));
                $this->form_validation->set_rules('keluhan', 'Keluhan', 'required',
                array('required'=>'%s Harus diisi !!!!'
        ));
                $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required',
                array('required'=>'%s Harus diisi !!!!'
        ));

        if($this->form_validation->run() == FALSE) {

                 $data = array(
			'title' => 'Rekam Medis',
                        'sub_title'=> 'edit Rekam Medis',
                        'rekam_medis'=>$this->m_rekam_medis->get_data($id_rm),
                        'poli'=>$this->m_poli->get_all_data(),
                        'obat'=>$this->m_obat->get_all_data(),
                        'pasien'=>$this->m_pasien->get_all_data(),
                        'dokter'=>$this->m_dokter->get_all_data(),
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'rekam_medis/v_edit',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);

        }else{
                $data = array(
                        'id_rm'=> $id_rm,
                        'id_pasien'=> $this->input->post('id_pasien'),
                        'id_dokter' => $this->input->post('id_dokter'),
                        'id_poli' => $this->input->post('id_poli'),
                        'id_obat' => $this->input->post('id_obat'),
                        'keluhan' => $this->input->post('keluhan'),
                        'diagnosa' => $this->input->post('diagnosa'),
                        'tgl_periksa' => $this->input->post('tgl_periksa'),
                );
                $this->m_rekam_medis->update($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diubah !!!!');
                redirect('rekam_medis');
        }
                $data = array(
			'title' => 'Rekam Medis',
                        'sub_title'=> 'edit Rekam Medis',
                        'rekam_medis'=>$this->m_rekam_medis->get_data($id_rm),
                        'poli'=>$this->m_poli->get_all_data(),
                        'obat'=>$this->m_obat->get_all_data(),
                        'pasien'=>$this->m_pasien->get_all_data(),
                        'dokter'=>$this->m_dokter->get_all_data(),
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'rekam_medis/v_edit',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

        //Delete one item
	public function delete($id_rm = NULL)
	{

		$data = array('id_rm' => $id_rm);
		$this->m_rekam_medis->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil dihapus !!!');
		redirect('rekam_medis');
	}
}

/* End of file Controllername.php */

