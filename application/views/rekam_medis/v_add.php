<div class="recent-orders">
        
        <h2><?= $sub_title;?></h2>
                         <div action="" class="contact-form form-mobil">
                         <?php 
                         
                         // notifikasi form kosong
                        echo validation_errors('<div class="alert alert-sm-fl gagal" id="alert">
                        <button type="button" class="closeBtn">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Info!</h5>','
                        </div>');
                         
                         echo form_open_multipart('rekam_medis/add') ?>
                              <h3>Form Rekam Medis</h3>
                                <label for="">Tgl Periksa</label>
                                <input type="date" name="tgl_periksa" class="form-input" value="<?= date('Y-m-d') ?>" autocomplete="off" placeholder="Tanggal Periksa">

                                <label for="">Poli</label>
                                <select name="id_poli">
                                        <option> - Pilih - </option>
                                        <?php 
                                                foreach ($poli as $key => $value) {?>
                                                <option value="<?=$value->id_poli?>"><?= $value->nama_poli?></option>

                                        <?php }?>
                                </select>

                                <label for="">Nama Pasien</label>
                                <select name="id_pasien">
                                        <option> - Pilih - </option>
                                        <?php 
                                                foreach ($pasien as $key => $value) {?>
                                                <option value="<?=$value->id_pasien?>"><?= $value->nama_pasien?></option>

                                        <?php }?>
                                </select>
                                <label for="">Keluhan</label>
                                <textarea id="konten" placeholder="Keluhan" name="keluhan" value="<?= set_value('keluhan')?>" class="form-input"></textarea>

                                <label for="">Nama Dokter</label>
                                <select name="id_dokter">
                                        <option> - Pilih - </option>
                                        <?php 
                                                foreach ($dokter as $key => $value) {?>
                                                <option value="<?=$value->id_dokter?>"><?= $value->nama_dokter?></option>

                                        <?php }?>
                                </select>
                                <label for="">Diagnosa</label>
                                <textarea placeholder="Diagnosa" name="diagnosa" value="<?= set_value('diagnosa')?>" class="form-input"></textarea>

                                <label for="">Obat</label>
                                <select name="id_obat">
                                        <option>- Pilih -</option>
                                        <?php 
                                                foreach ($obat as $key => $value) {?>
                                                <option value="<?= $value->id_obat?>"><?= $value->nama_obat?></option>
                                        <?php }?>
                                </select>
                              <input type="submit" value="Save" class="btn">
                              <!-- <a href=""><span class="material-icons-sharp">send</span></a> -->
                         </div>
               <?php echo form_close() ?>    
</div>

<script src="<?= base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script>
        CKEDITOR.replace('konten',{
                uiColor:'#7380ec'
        });
</script>