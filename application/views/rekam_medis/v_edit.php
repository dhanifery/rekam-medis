<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open('rekam_medis/update/' .$rekam_medis->id_rm) ?>
                              <h3>Form Rekam Medis</h3>
                                <label for="">Tgl Periksa</label>
                                <input type="hidden" name="id_rm" class="form-input" value="<?= $rekam_medis->id_rm?>" autocomplete="off" >
                                <input type="date" name="tgl_periksa" class="form-input" value="<?= $rekam_medis->tgl_periksa?>" autocomplete="off" placeholder="Tanggal Periksa">

                                <label for="">Poli</label>
                                <select name="id_poli">
                                        <option value="<?= $rekam_medis->id_poli?>"><?= $rekam_medis->nama_poli?></option>
                                        <?php 
                                                foreach ($poli as $key => $value) {?>
                                                <option value="<?=$value->id_poli?>"><?= $value->nama_poli?></option>

                                        <?php }?>
                                </select>

                                <label for="">Nama Pasien</label>
                                <select name="id_pasien">
                                        <option value="<?= $rekam_medis->id_pasien?>"><?= $rekam_medis->nama_pasien?></option>
                                        <?php 
                                                foreach ($pasien as $key => $value) {?>
                                                <option value="<?=$value->id_pasien?>"><?= $value->nama_pasien?></option>

                                        <?php }?>
                                </select>
                                <label for="">Keluhan</label>
                                <textarea id="konten" placeholder="Keluhan" name="keluhan" value="" class="form-input"><?= $rekam_medis->keluhan?></textarea>

                                <label for="">Nama Dokter</label>
                                <select name="id_dokter">
                                        <option value="<?= $rekam_medis->id_dokter?>"><?= $rekam_medis->nama_dokter?></option>

                                        <?php 
                                                foreach ($dokter as $key => $value) {?>
                                                <option value="<?=$value->id_dokter?>"><?= $value->nama_dokter?></option>

                                        <?php }?>
                                </select>
                                <label for="">Diagnosa</label>
                                <textarea placeholder="Diagnosa" name="diagnosa" value="" class="form-input"><?= $rekam_medis->diagnosa?></textarea>

                                <label for="">Obat</label>
                                <select name="id_obat">
                                        <option value="<?= $rekam_medis->id_obat?>"><?= $rekam_medis->nama_obat?></option>

                                        <?php 
                                                foreach ($obat as $key => $value) {?>
                                                <option value="<?= $value->id_obat?>"><?= $value->nama_obat?></option>
                                        <?php }?>
                                </select>
                                <div class="form3">
                                <input type="submit" value="Save" class="btn btn-primary">
                                <a href="<?= base_url('rekam_medis')?>" class="btn btn-password">Back</a>
                                </div>

                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>