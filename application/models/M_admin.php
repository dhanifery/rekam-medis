<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

        public function total_pasien()
        {
                return $this->db->get('tbl_pasien')->num_rows();
        } 

        public function total_dokter()
        {
                return $this->db->get('tbl_dokter')->num_rows();
        } 
        
        public function total_rekam_medis()
        {
                return $this->db->get('tbl_rekam_medis')->num_rows();
        }


        public function cek_data($where = null)
        {
             return $this->db->get_where('tbl_admin', $where);
        }
}

/* End of file ModelName.php */
