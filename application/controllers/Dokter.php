
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model(['m_dokter','m_admin']);
		$this->user_login->proteksi_halaman();


        }

	public function index()
	{
		$data = array(
			'title' => 'Dokter',
			'sub_title' => 'Data Dokter',
                        'dokter'=> $this->m_dokter->get_all_data(),
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
			'isi' => 'dokter/v_dokter',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
	}

        public function add()
        {
                $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('spesialis_dokter', 'Spesialis Dokter', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('no_telp', 'No Telp', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('alamat', 'ALamat', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Dokter',
                                'sub_title'=> 'Tambah Data Dokter',
                                'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                                'dokter'=> $this->m_dokter->get_all_data(),
                                'isi' => 'dokter/v_add',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
                                'nama_dokter' => $this->input->post('nama_dokter'),
                                'spesialis_dokter' => $this->input->post('spesialis_dokter'),
                                'alamat' => $this->input->post('alamat'),
                                'no_telp' => $this->input->post('no_telp'),
                        );
                        $this->m_dokter->add($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                        redirect('dokter'); 
                }
                $data = array(
                        'title' => 'Dokter',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'dokter'=> $this->m_dokter->get_all_data(),
                        'isi' => 'dokter/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }


        public function update($id_dokter = NULL)
        {
                $this->form_validation->set_rules('nama_dokter', 'Nama Dokter', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('spesialis_dokter', 'Spesialis Dokter', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('no_telp', 'No Telp', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('alamat', 'ALamat', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));

        if($this->form_validation->run() == FALSE) {

                $data = array(
                        'title' => 'Dokter',
                        'sub_title'=> 'Edit Data Dokter',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'dokter'=> $this->m_dokter->get_data($id_dokter),
                        'isi' => 'dokter/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

        }else{
                $data = array(
                        'id_dokter'=> $id_dokter,
                        'nama_dokter' => $this->input->post('nama_dokter'),
                        'spesialis_dokter' => $this->input->post('spesialis_dokter'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                );
                $this->m_dokter->update($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diubah !!!!');
                redirect('dokter');
        }
                $data = array(
                        'title' => 'Dokter',
                        'sub_title'=> 'Edit Data Dokter',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'dokter'=> $this->m_dokter->get_data($id_dokter),
                        'isi' => 'dokter/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

        //Delete one item
        public function delete($id_dokter = NULL)
        {

                $data = array('id_dokter' => $id_dokter);
                $this->m_dokter->delete($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil dihapus !!!');
                redirect('dokter');
        }

}

/* End of file Controllername.php */

