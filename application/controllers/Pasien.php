
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model(['m_pasien','m_admin']);
		$this->user_login->proteksi_halaman();


        }

	public function index()
	{
		$data = array(
			'title' => 'Pasien',
                        'sub_title'=> 'Data pasien',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'pasien'=> $this->m_pasien->get_all_data(),
			'isi' => 'pasien/v_pasien',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
	}

        public function add()
        {
                $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('no_identitas', 'No Identitas', 'required|is_unique[tbl_pasien.no_identitas]',
                array('required'=>'%s Harus Diisi !!!!',
                'is_unique'=>'%s Sudah terdaftar....!'
        ));
                $this->form_validation->set_rules('no_telp', 'No Telp', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                $this->form_validation->set_rules('alamat', 'ALamat', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Pasien',
                                'sub_title'=> 'Tambah Data pasien',
                                'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                                'pasien'=> $this->m_pasien->get_all_data(),
                                'isi' => 'pasien/v_add',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
                                'nama_pasien' => $this->input->post('nama_pasien'),
                                'no_identitas' => $this->input->post('no_identitas'),
                                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                                'alamat' => $this->input->post('alamat'),
                                'no_telp' => $this->input->post('no_telp'),
                        );
                        $this->m_pasien->add($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                        redirect('pasien'); 
                }
                $data = array(
                        'title' => 'Pasien',
                        'sub_title'=> 'Tambah Data pasien',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'pasien'=> $this->m_pasien->get_all_data(),
                        'isi' => 'pasien/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

        public function update($id_pasien = NULL)
        {
                $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',
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
                        'title' => 'Pasien',
                        'sub_title'=> 'Edit Data pasien',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'pasien'=> $this->m_pasien->get_data($id_pasien),
                        'isi' => 'pasien/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

        }else{
                $data = array(
                        'id_pasien'=> $id_pasien,
                        'nama_pasien' => $this->input->post('nama_pasien'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'alamat' => $this->input->post('alamat'),
                        'no_telp' => $this->input->post('no_telp'),
                );
                $this->m_pasien->update($data);
                $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                redirect('pasien');
        }
                $data = array(
                        'title' => 'Pasien',
                        'sub_title'=> 'Edit Data pasien',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'pasien'=> $this->m_pasien->get_data($id_pasien),
                        'isi' => 'pasien/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

        //Delete one item
        public function delete($id_pasien = NULL)
        {

                $data = array('id_pasien' => $id_pasien);
                $this->m_pasien->delete($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil dihapus !!!');
                redirect('pasien');
        }
}

/* End of file Controllername.php */

