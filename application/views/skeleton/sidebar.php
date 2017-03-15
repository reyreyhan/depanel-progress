<div class="sidebar" data-color="blue" data-image="<?php echo base_url('assets/img/sidebar-5.jpg'); ?>">

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?php echo base_url('home'); ?>" class="simple-text">
                EEPIS ONLINE
            </a>
        </div>

        <ul class="nav">
<!--             <li class="post">
                <a href="<?php //echo base_url('post'); ?>">
                    <i class="pe-7s-note"></i>
                    <p>Posts</p>
                </a>
            </li> -->

<!--             <li class="home">
                <a href="<?php //echo base_url(); ?>">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="post">
                <a href="<?php //echo base_url('post'); ?>">
                    <i class="pe-7s-note"></i>
                    <p>Posts</p>
                </a>
            </li> -->

<!--            <li class="pages">
                <a href="<?php //echo base_url('pages'); ?>">
                    <i class="pe-7s-ribbon"></i>
                    <p>Pages</p>
                </a>
            </li> -->
            <li class="post">
                <a href="<?php echo base_url('post'); ?>">
                    <i class="pe-7s-note"></i>
                    <p>Tulis Berita</p>
                </a>
            </li>
<!--             <li class="menu">
                <a href="<?php //echo base_url('kategori'); ?>">
                    <i class="pe-7s-menu"></i>
                    <p>Kategori Berita</p>
                </a>
            </li> -->

<!--             <li class="post">
                <a href="<?php //echo base_url('agenda'); ?>">
                    <i class="pe-7s-note"></i>
                    <p>Tulis Agenda</p>
                </a>
            
            </li> -->
            <?php 

            if($this->session->userdata('nama') != "superadmin"){
              
            } else {

            echo'<li class="tmeline">
                <a href="';
            echo base_url('timeline');
            echo'">
                    <i class="pe-7s-date"></i>
                    <p>Timeline</p>
                </a>
            </li>';

            echo '<li class="post">
                <a href="';
            echo base_url('page'); 
            echo'">
                    <i class="pe-7s-note"></i>
                    <p>Page</p>
                </a>
            </li>';

            echo '<li class="menu">
                <a href="';
            echo base_url('anggota'); 
            echo'">
                    <i class="pe-7s-menu"></i>
                    <p>Anggota</p>
                </a>
            </li>';

            echo'<li class="theme">
                <a href="';
            echo base_url('dp'); 
            echo'">
                    <i class="pe-7s-cloud"></i>
                    <p>Departement</p>
                </a>
            </li>';

            echo'<li class="menu">
                <a href="';
            echo base_url('jurusan'); 
            echo'">
                    <i class="pe-7s-menu"></i>
                    <p>Jurusan</p>
                </a>
            </li>';

            }

            ?>
            


            <li class="others">
                <a href="<?php echo base_url('selected'); ?>">
                    <i class="pe-7s-menu"></i>
                    <p>Selected</p>
                </a>
            </li>
<!--             <li class="others">
                <a href="<?php //echo base_url('banner'); ?>">
                    <i class="pe-7s-cloud"></i>
                    <p>Banner</p>
                </a>
            </li>
            <li class="others">
                <a href="<?php //echo base_url('kartun'); ?>">
                    <i class="pe-7s-cloud"></i>
                    <p>Kartun</p>
                </a>
            </li>
            <li class="others">
                <a href="<?php //echo base_url('upload'); ?>">
                    <i class="pe-7s-cloud"></i>
                    <p>Newsflash</p>
                </a>
            </li> -->
        </ul>
  </div>
</div>
