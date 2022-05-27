<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('obat/update/'.$obat->id_obat) ?>
                              <h3>Form Edit Obat</h3>
                              <div class="form2">
                                   <div class="form2 form-label">
                                        <label for="Nama Poli">#Nama Obat</label>
                                        <input type="text" name="nama_obat" class="form-input" value="<?= $obat->nama_obat?>" autocomplete="off" placeholder="Nama Obat">
                                   </div>
                                   <div class="form2 form-label">
                                        <label for="Nama Poli">#Keterangan Obat</label>
                                        <input type="text" name="keterangan_obat" class="form-input" value="<?= $obat->keterangan_obat?>" autocomplete="off" placeholder="Keterangan Obat">

                                   </div>
                              </div>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>