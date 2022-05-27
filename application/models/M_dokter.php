<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokter extends CI_Model {

        public function get_all_data()
        {
                $this->db->select('*');
                $this->db->from('tbl_dokter');
                $this->db->order_by('id_dokter', 'desc');
                return $this->db->get()->result();
                
                
                
        }
        public function add($data)
        {
                $this->db->insert('tbl_dokter', $data);
                
        }

        public function get_data($id_dokter)
        {
                $this->db->select('*');
                $this->db->from('tbl_dokter');
                $this->db->where('id_dokter', $id_dokter);
                return $this->db->get()->row();
                
                
        }

        public function update($data)
        {
                $this->db->where('id_dokter', $data['id_dokter']);
                
                $this->db->update('tbl_dokter', $data);
                
        }

        // hapus data
        public function delete($data)
        {
                $this->db->where('id_dokter', $data['id_dokter']);
                $this->db->delete('tbl_dokter', $data);
        }

}

/* End of file M_dokter.php */
