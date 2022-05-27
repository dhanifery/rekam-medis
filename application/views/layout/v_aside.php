<body>
          <div class="container">
               <!-- aside start -->
               <aside>
                    <div class="top">
                         <div class="logo">
                              <img  src="<?= base_url()?>assets/images/logo.png">
                              <h2>R<span class="danger">-Medis</span></h2>
                         </div>
                         <div class="close" id="close-btn"> 
                              <span class="material-icons-sharp">close</span>
                         </div>
                    </div>
                    <div class="sidebar">
                    <p>Home</p>
                         <a href="<?= base_url('admin'); ?>" class="<?php if($this->uri->segment(1)== 'admin'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">grid_view</span>
                              <h3>Dashboard</h3>
                         </a>
                         <p>Master Data</p>
                         <a href="<?= base_url('pasien'); ?>" class="<?php if($this->uri->segment(1)== 'pasien'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">person_outline</span>
                              <h3>Data Pasien</h3>
                         </a>
                         <a href="<?= base_url('dokter'); ?>" class="<?php if($this->uri->segment(1)== 'dokter'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">group</span>
                              <h3>Data Dokter</h3>
                         </a>
                         <p>Obat dan Poliklinik</p>
                         <a href="<?= base_url('poliklinik'); ?>" class="<?php if($this->uri->segment(1)== 'poliklinik'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">location_city</span>
                              <h3>Data Poliklinik</h3>
                         </a>
                         <a href="<?= base_url('obat'); ?>" class="<?php if($this->uri->segment(1)== 'obat'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">medical_services</span>
                              <h3>Data Obat</h3>
                              <!-- <span class="message-count">20</span> -->
                         </a>
                         <p>Rekam Medis</p>

                         <a href="<?= base_url('rekam_medis'); ?>" class="<?php if($this->uri->segment(1)== 'rekam_medis'){
                         echo "active";
                         }?>"><span class="material-icons-sharp">medication</span>
                              <h3>Rekam Medis</h3>
                              <!-- <span class="message-count">20</span> -->
                         </a>

                         <a href="<?= base_url('auth/logout_user');?>"><span class="material-icons-sharp">logout</span>
                              <h3>Logout</h3>
                         </a>
                    </div>
               </aside>
               <!-- aside end -->

               <!-- MAIN START -->
               