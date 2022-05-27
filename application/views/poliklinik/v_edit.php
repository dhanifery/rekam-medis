<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('poliklinik/update/'.$poli->id_poli) ?>
                              <h3>Form Edit Poli</h3>
                              <div class="form2">
                                   <div class="form2 form-label">
                                        <label for="">#Nama Poli</label>
                                        <input type="text" name="nama_poli" class="form-input" value="<?= $poli->nama_poli?>" autocomplete="off" placeholder="Nama Poli">
                                   </div>
                                   <div class="form2 form-label">
                                        <label for="">#Lokasi</label>
                                        <input type="text" name="gedung" class="form-input" value="<?= $poli->gedung?>" autocomplete="off" placeholder="Lokasi">

                                   </div>
                              </div>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>