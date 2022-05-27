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
     <a href="<?= base_url('pasien/add')?>" class="tambahdata">Add</a>
</div>
<table id="example" class="compact">
     <thead>
          <tr>
               <th>No.Identitas</th>
               <th>Nama Pasien</th>
               <th>Jenis Kelamin</th>
               <th>Alamat</th>
               <th>No.telp</th>
               <th>Actions</th>

          </tr>
     </thead>
     <tbody>
               <?php
                    foreach ($pasien as $key => $value) {?>
               <tr>         
                              <td><?= $value->no_identitas?></td>
                              <td><?= $value->nama_pasien?></td>
                              <td><?= $value->jenis_kelamin?></td>
                              <td><?= $value->alamat?></td>
                              <td><?= $value->no_telp?></td>
                              <td class="primary">
                                        <a href="<?= base_url('pasien/update/'.$value->id_pasien)?>"><i class="uil uil-pen"></i></a>
                                        <a href="<?= base_url('pasien/delete/'.$value->id_pasien)?>" onclick="return confirm('Apakah anda yakin ?')"><i class="uil uil-trash"></i></a>
                              </td>
               </tr>                         
               <?php }?> 

     </tbody>
</table>
</div>
<!-- RECENT ORDERS END -->