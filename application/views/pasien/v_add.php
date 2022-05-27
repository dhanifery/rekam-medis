<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('pasien/add') ?>
                              <h3>Form Pasien</h3>
                                <input type="text" name="no_identitas" class="form-input" value="<?= set_value('no_identitas')?>" autocomplete="off" placeholder="No Identitas">
                                <input type="text" class="form-input"  name="nama_pasien"  value="<?= set_value('nama_pasien')?>"autocomplete="off" placeholder="Nama Pasien" required>
                                <div class="form2">
                                   <input type="text" name="no_telp" class="form-input" value="<?= set_value('no_telp')?>" autocomplete="off" placeholder="No telp">
                                   <select name="jenis_kelamin">
                                        <option> Jenis Kelamin </option>
                                        <option value="Laki-laki">  Laki-laki  </option>
                                        <option value="Perempuan"> Perempuan </option>
                                   </select>
                              </div>
                              <textarea placeholder="Alamat" name="alamat" value="<?= set_value('alamat')?>" class="form-input"></textarea>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>