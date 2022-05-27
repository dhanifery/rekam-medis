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
     <a href="<?= base_url('poliklinik/add')?>" class="tambahdata">Add</a>
</div>
<table id="datatable" class="compact">
     <thead>
          <tr>
               <th>No</th>
               <th>Nama Poli</th>
               <th>Lokasi</th>
               <th>Actions</th>

          </tr>
     </thead>
     <tbody>
               <?php
               $no = 1;
                    foreach ($poli as $key => $value) {?>
               <tr>         
                              <td><?= $no++?></td>
                              <td><?= $value->nama_poli?></td>
                              <td><?= $value->gedung?></td>
                              <td class="primary">
                                        <a href="<?= base_url('poliklinik/update/'.$value->id_poli)?>"><i class="uil uil-pen"></i></a>
                                        <a href="<?= base_url('poliklinik/delete/'.$value->id_poli)?>" onclick="return confirm('Apakah anda yakin ?')"><i class="uil uil-trash"></i></a>
                              </td>
               </tr>                         
               <?php }?> 

     </tbody>
</table>
</div>
<!-- RECENT ORDERS END -->