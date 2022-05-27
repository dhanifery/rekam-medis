<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('pasien/update/'.$pasien->id_pasien) ?>
                              <h3>Form Pasien</h3>
                                   <label for="">#No Identitas</label>
                                   <input type="text" name="" class="form-input" value="<?= $pasien->no_identitas?>" autocomplete="off" placeholder="No Identitas" readonly>
                                   <label for="">#Nama Pasien</label>
                                   <input type="text" class="form-input"  name="nama_pasien"  value="<?= $pasien->nama_pasien?>"autocomplete="off" placeholder="Nama Pasien" required>
                                   <div class="form2">
                                     <div class="form2 form-label">
                                        <label for="">#No Telp</label>
                                        <input type="text" name="no_telp" class="form-input" value="<?= $pasien->no_telp?>" autocomplete="off" placeholder="No telp">
                                   </div>
                                   <div class="form2 form-label">
                                        <label for="">#Jenis Kelamin</label>
                                        <select name="jenis_kelamin">
                                             <option><?= $pasien->jenis_kelamin?></option>
                                             <option value="Laki-laki">  Laki-laki  </option>
                                             <option value="Perempuan"> Perempuan </option>
                                   </select>
                                   </div>

                              </div>
                              <label for="">#Alamat</label>
                              <textarea placeholder="Alamat" name="alamat" value="" class="form-input"><?= $pasien->alamat?></textarea>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>