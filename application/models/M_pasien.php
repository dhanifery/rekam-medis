<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {

        public function get_all_data()
        {
                $this->db->select('*');
                $this->db->from('tbl_pasien');
                $this->db->order_by('id_pasien', 'desc');
                return $this->db->get()->result();
                
                
                
        }
        public function add($data)
        {
                $this->db->insert('tbl_pasien', $data);
                
        }

        public function get_data($id_pasien)
        {
                $this->db->select('*');
                $this->db->from('tbl_pasien');
                $this->db->where('id_pasien', $id_pasien);
                return $this->db->get()->row();
                
                
        }

        public function update($data)
        {
                $this->db->where('id_pasien', $data['id_pasien']);
                
                $this->db->update('tbl_pasien', $data);
                
        }

        // hapus data
        public function delete($data)
        {
                $this->db->where('id_pasien', $data['id_pasien']);
                $this->db->delete('tbl_pasien', $data);
        }

}

/* End of file M_pasien.php */
