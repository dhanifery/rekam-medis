<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('poliklinik/add') ?>
                              <h3>Form Poli</h3>
                                <div class="form2">
                                   <input type="text" name="nama_poli" class="form-input" value="<?= set_value('nama_poli')?>" autocomplete="off" placeholder="Nama Poli">
                                   <input type="text" name="gedung" class="form-input" value="<?= set_value('gedung')?>" autocomplete="off" placeholder="Lokasi">
                              </div>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>