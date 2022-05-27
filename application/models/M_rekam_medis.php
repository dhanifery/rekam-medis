<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekam_medis extends CI_Model {

        public function get_all_data()
        {
                $this->db->select('*');
                $this->db->from('tbl_rekam_medis');
                $this->db->join('tbl_pasien', 'tbl_pasien.id_pasien = tbl_rekam_medis.id_pasien', 'left');
                $this->db->join('tbl_dokter', 'tbl_dokter.id_dokter = tbl_rekam_medis.id_dokter', 'left');
                $this->db->join('tbl_obat', 'tbl_obat.id_obat = tbl_rekam_medis.id_obat', 'left');
                $this->db->join('tbl_poli', 'tbl_poli.id_poli = tbl_rekam_medis.id_poli', 'left');
                
                $this->db->order_by('id_rm', 'desc');
                return $this->db->get()->result();
                
                
                
        }
        public function add($data)
        {
                $this->db->insert('tbl_rekam_medis', $data);
                
        }

        public function get_data($id_rm)
        {
                $this->db->select('*');
                $this->db->from('tbl_rekam_medis');
                $this->db->join('tbl_pasien', 'tbl_pasien.id_pasien = tbl_rekam_medis.id_pasien', 'left');
                $this->db->join('tbl_dokter', 'tbl_dokter.id_dokter = tbl_rekam_medis.id_dokter', 'left');
                $this->db->join('tbl_obat', 'tbl_obat.id_obat = tbl_rekam_medis.id_obat', 'left');
                $this->db->join('tbl_poli', 'tbl_poli.id_poli = tbl_rekam_medis.id_poli', 'left');
                $this->db->where('id_rm', $id_rm);
                return $this->db->get()->row();
                
                
        }

        public function update($data)
        {
                $this->db->where('id_rm', $data['id_rm']);
                
                $this->db->update('tbl_rekam_medis', $data);
                
        }

        // hapus data
        public function delete($data)
        {
                $this->db->where('id_rm', $data['id_rm']);   
                $this->db->delete('tbl_rekam_medis', $data);
        }

}

/* End of file M_dokter.php */
