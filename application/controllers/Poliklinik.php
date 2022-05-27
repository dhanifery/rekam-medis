
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model(['m_poli','m_admin']);
		$this->user_login->proteksi_halaman();


        }

	public function index()
	{
		$data = array(
			'title' => 'Poliklinik',
			'sub_title' => 'Data Poli',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'poliklinik/v_poliklinik',
                        'poli'=> $this->m_poli->get_all_data(),
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
	}

	public function add()
        {
                $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('gedung', 'Lokasi', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Poliklinik',
                                'sub_title'=> 'Tambah Data Poli',
			        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                                'poli'=> $this->m_poli->get_all_data(),
                                'isi' => 'poliklinik/v_add',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
                                'nama_poli' => $this->input->post('nama_poli'),
                                'gedung' => $this->input->post('gedung'),
                        );
                        $this->m_poli->add($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                        redirect('poliklinik'); 
                }
                $data = array(
                        'title' => 'Poliklinik',
                        'sub_title'=> 'Tambah Data Poli',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'poli'=> $this->m_poli->get_all_data(),
                        'isi' => 'poliklinik/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }


	public function update($id_poli = NULL)
        {
                $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('gedung', 'Lokasi', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Poliklinik',
                                'sub_title'=> 'Edit Data Poli',
                                'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),

                                'poli'=> $this->m_poli->get_data($id_poli),
                                'isi' => 'poliklinik/v_edit',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
				'id_poli'=> $id_poli,
                                'nama_poli' => $this->input->post('nama_poli'),
                                'gedung' => $this->input->post('gedung'),
                        );
                        $this->m_poli->update($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diubah !!!!');
                        redirect('poliklinik'); 
                }
                $data = array(
                        'title' => 'Poliklinik',
                        'sub_title'=> 'Edit Data Poli',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),

                        'poli'=> $this->m_poli->get_data($id_poli),
                        'isi' => 'poliklinik/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

	//Delete one item
	public function delete($id_poli = NULL)
	{

		$data = array('id_poli' => $id_poli);
		$this->m_poli->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil dihapus !!!');
		redirect('poliklinik');
	}

}

/* End of file Controllername.php */

