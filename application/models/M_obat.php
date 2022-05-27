<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {

        public function get_all_data()
        {
                $this->db->select('*');
                $this->db->from('tbl_obat');
                $this->db->order_by('id_obat', 'desc');
                return $this->db->get()->result();
                
                
                
        }
        public function add($data)
        {
                $this->db->insert('tbl_obat', $data);
                
        }

        public function get_data($id_obat)
        {
                $this->db->select('*');
                $this->db->from('tbl_obat');
                $this->db->where('id_obat', $id_obat);
                return $this->db->get()->row();
                
                
        }

        public function update($data)
        {
                $this->db->where('id_obat', $data['id_obat']);
                
                $this->db->update('tbl_obat', $data);
                
        }

        // hapus data
        public function delete($data)
        { 
                $this->db->where('id_obat', $data['id_obat']);
                
                $this->db->delete('tbl_obat', $data);
        }

}

/* End of file M_dokter.php */
