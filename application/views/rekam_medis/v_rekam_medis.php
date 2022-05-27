<!-- RECENT ORDERS START -->
<div class="recent-orders">
<h2><?= $sub_title?></h2>
<?php 
     if ($this->session->flashdata('pesan')) {
               echo '<div class="alert alert-sm-xl sukses" id="alert">
               <button type="button" class="closeBtn">&times;</button>
               <h5><i class="fa-solid fa-circle-check"></i> Success!</h5>';
               echo $this->session->flashdata('pesan');
               echo '</h5></div>';
     }
     ?>
<div class="tambah-data">
     <a href="<?= base_url('rekam_medis/add')?>" class="tambahdata">Add</a>
</div>
<table id="example" class="compact">
     <thead>
          <tr>
               <th>No</th>
               <th>Tgl Periksa</th>
               <th>Poli</th>
               <th>Nama Pasien</th>
               <th>Keluhan</th>
               <th>Nama Dokter</th>
               <th>Diagnosa</th>
               <th>Obat</th>
               <th>Actions</th>

          </tr>
     </thead>
     <tbody>
               <?php
               $no = 1;
                    foreach ($rm as $key => $value) {?>
               <tr>         
                              <td><?= $no++?></td>
                              <td><?= $value->tgl_periksa?></td>
                              <td><?= $value->gedung?></td>
                              <td><?= $value->nama_pasien?></td>
                              <td><?= $value->keluhan?></td>
                              <td><?= $value->nama_dokter?></td>
                              <td><?= $value->diagnosa?></td>
                              <td><?= $value->nama_obat?></td>
                              <td class="primary">
                                        <a href="<?= base_url('rekam_medis/update/'.$value->id_rm)?>"><i class="uil uil-pen"></i></a>
                                        <a href="<?= base_url('rekam_medis/delete/'.$value->id_rm)?>" onclick="return confirm('Apakah anda yakin ?')"><i class="uil uil-trash"></i></a>
                              </td>
               </tr>                         
               <?php }?> 

     </tbody>
</table>
</div>
<!-- RECENT ORDERS END -->