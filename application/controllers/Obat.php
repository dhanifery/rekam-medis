
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model(['m_obat','m_admin']);
		$this->user_login->proteksi_halaman();


        }

	public function index()
	{
		$data = array(
			'title' => 'Obat',
			'sub_title' => 'Data Obat',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'obat'=> $this->m_obat->get_all_data(),
			'isi' => 'obat/v_obat',
		);
		$this->load->view('layout/v_wrapper_backend', $data ,FALSE);
	}

        public function add()
        {
                $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('keterangan_obat', 'Keterangan Obat', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Obat',
                                'sub_title'=> 'Tambah Data Obat',
                                'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                                'obat'=> $this->m_obat->get_all_data(),
                                'isi' => 'obat/v_add',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
                                'nama_obat' => $this->input->post('nama_obat'),
                                'keterangan_obat' => $this->input->post('keterangan_obat'),
                        );
                        $this->m_obat->add($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan !!!!');
                        redirect('obat'); 
                }
                $data = array(
                        'title' => 'Obat',
                        'sub_title'=> 'Tambah Data Obat',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'isi' => 'obat/v_add',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }


	public function update($id_obat = NULL)
        {
                $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required|min_length[3]',
                array('required'=>'%s Harus Diisi !!!!',
                'min_length'=> '%s Minimal 3 karakter !'
        ));
                $this->form_validation->set_rules('keterangan_obat', 'Keterangan Obat', 'required',
                array('required'=>'%s Harus Diisi !!!!'
        ));
                if($this->form_validation->run() == FALSE) {

                        $data = array(
                                'title' => 'Obat',
                                'sub_title'=> 'Edit Data Obat',
                                'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                                'obat'=> $this->m_obat->get_data($id_obat),
                                'isi' => 'obat/v_edit',
                        );
                        $this->load->view('layout/v_wrapper_backend', $data ,FALSE);

                }else{
                        $data = array(
				'id_obat'=> $id_obat,
                                'nama_obat' => $this->input->post('nama_obat'),
                                'keterangan_obat' => $this->input->post('keterangan_obat'),
                        );
                        $this->m_obat->update($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diubah !!!!');
                        redirect('obat'); 
                }
                $data = array(
                        'title' => 'Obat',
                        'sub_title'=> 'Edit Data Obat',
                        'admin' => $this->m_admin->cek_data(['nama_user' => $this->session->userdata('nama_user')])->row_array(),
                        'obat'=> $this->m_obat->get_data($id_obat),
                        'isi' => 'obat/v_edit',
                );
                $this->load->view('layout/v_wrapper_backend', $data ,FALSE);
        }

	//Delete one item
	public function delete($id_obat = NULL)
	{

		$data = array('id_obat' => $id_obat);
		$this->m_obat->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil dihapus !!!');
		redirect('obat');
	}
}

/* End of file Controllername.php */

