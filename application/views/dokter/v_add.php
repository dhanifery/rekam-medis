<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('dokter/add') ?>
                              <h3>Form Dokter</h3>
                                <input type="text" class="form-input"  name="nama_dokter"  value="<?= set_value('nama_dokter')?>"autocomplete="off" placeholder="Nama Dokter" required>                                
                                <div class="form2">
                                <input type="text" name="spesialis_dokter" class="form-input" value="<?= set_value('spesialis_dokter')?>" autocomplete="off" placeholder="Spesialis Dokter">
                                   <input type="text" name="no_telp" class="form-input" value="<?= set_value('no_telp')?>" autocomplete="off" placeholder="No telp">
                              </div>
                              <textarea placeholder="Alamat" name="alamat" value="<?= set_value('alamat')?>" class="form-input"></textarea>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>