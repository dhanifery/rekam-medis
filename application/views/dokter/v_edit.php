<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('dokter/update/'.$dokter->id_dokter) ?>
                              <h3>Form dokter</h3>
                              <label for="">#Nama Dokter</label>
                                <input type="text" class="form-input"  name="nama_dokter"  value="<?= $dokter->nama_dokter?>"autocomplete="off" placeholder="Nama dokter" required>
                                <div class="form2">
                                   <div class="form2 form-label">
                                        <label for="">#Spesialis Dokter</label>
                                        <input type="text" name="spesialis_dokter" class="form-input" value="<?= $dokter->spesialis_dokter?>" autocomplete="off" placeholder="Spesialis Dokter">
                                   </div>
                                   <div class="form2 form-label">
                                        <label for="">#No Telp</label>
                                        <input type="text" name="no_telp" class="form-input" value="<?= $dokter->no_telp?>" autocomplete="off" placeholder="No telp">
                                   </div>
                              </div>
                              <label for="">#Alamat</label>
                              <textarea placeholder="Alamat" name="alamat" value="" class="form-input"><?= $dokter->alamat?></textarea>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>