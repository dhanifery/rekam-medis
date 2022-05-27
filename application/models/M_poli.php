<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_poli extends CI_Model {

        public function get_all_data()
        {
                $this->db->select('*');
                $this->db->from('tbl_poli');
                $this->db->order_by('id_poli', 'desc');
                return $this->db->get()->result();
                
                
                
        }
        public function add($data)
        {
                $this->db->insert('tbl_poli', $data);
                
        }

        public function get_data($id_poli)
        {
                $this->db->select('*');
                $this->db->from('tbl_poli');
                $this->db->where('id_poli', $id_poli);
                return $this->db->get()->row();
                
                
        }

        public function update($data)
        {
                $this->db->where('id_poli', $data['id_poli']);
                
                $this->db->update('tbl_poli', $data);
                
        }

        // hapus data
        public function delete($data)
        {
                $this->db->where('id_poli', $data['id_poli']);   
                $this->db->delete('tbl_poli', $data);
        }

}

/* End of file M_dokter.php */
