<?php 
        if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-sm-xm sukses" id="alert">
                <button type="button" class="closeBtn">&times;</button>
                <h5><i class="fa-solid fa-circle-check"></i> Success!</h5>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
        }
        ?>
 <!-- INSIGHTS START -->

 <div class="insights">
                         <!-- SALES START -->
                         <div class="sales">
                              <span class="material-icons-sharp">person</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Pasien</h3>
                                        <h1><?= $total_pasien;?></h1>
                                   </div>
                              </div>
                              <small class="text-muted">Last 24 Hours</small>
                         </div>

                         <!-- SALES END -->

                         <!-- EXPENSES START -->
                         <div class="expenses">
                              <span class="material-icons-sharp">groups</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Dokter</h3>
                                        <h1><?= $total_dokter;?></h1>
                                   </div>
                              </div>
                              <small class="text-muted">Last 24 Hours</small>
                         </div>
                         <!-- EXPENSES END -->

                         <!-- INCOME START -->
                         <div class="income">
                              <span class="material-icons-sharp">medication</span>
                              <div class="middle">
                                   <div class="left">
                                        <h3>Total Rekam Medis</h3>
                                        <h1><?= $total_rekam_medis;?></h1>
                                   </div>
                              </div>
                              <small class="text-muted">Last 24 Hours</small>
                         </div>
                         <!-- INCOME END -->
 
                    </div>
                    <!-- INSIGHTS END -->

                    <!-- RECENT ORDERS START -->
              <!-- RECENT ORDERS START -->
               <div class="recent-orders">
               <h2><?= $sub_title?></h2>

               <table id="datatable" class="compact">
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
                    <!-- RECENT ORDERS END -->
