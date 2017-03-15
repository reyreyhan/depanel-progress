<link rel="stylesheet type="text/css" href="<?php echo base_url('assets/css.css'); ?>">


<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
          <h1>Login</h1>
          <input type="text" name="nama" placeholder="Masukkan Nama"/>
          <input type="password" name="password" placeholder="Masukkan Password"/>
            <button>Login</button>
          <p>Selamat Datang, <span>Silahkan Login!</span></p>
      </form>
    </div>
  </div>
</div>