<div id="wrapper-contact-bar">
  <div class="ui container">
    <div class="column" id="contact-bar">
      <a href="https://www.facebook.com/pens.eepis/"><i class="facebook icon"></i></a>
      <a href="https://twitter.com/penseepis"><i class="twitter icon"></i></a>
      <a href="https://www.youtube.com/user/penseepis"><i class="youtube play icon"></i></a>
    </div>
  </div>
</div>
<header>
  <div class="ui container">
    <div class="column" id="logo-image">
      <a href=""><img src="<?php echo base_url('assets/image/logoweb.png'); ?>" class="ui image"></a>
    </div>
  </div>
</header>
<div id="navbar">
  <div class="ui container">
    <div class="column">
      <div class="ui text menu">
        <div id="sub-item">
          <a class="item" href="<?php echo base_url('/'); ?>">Home</a>
        </div>
        <div id="sub-item">
          <a class="item" href="<?php echo base_url('/about'); ?>">Tentang PENS</a>
        </div>
        <div id="sub-item">
          <a class="item" href="<?php echo base_url('/akademik'); ?>" >Akademik</a>
        </div>
        <div id="sub-item">
          <a class="item">Penelitian</a>
        </div>
        <div id="sub-item" class="active">
          <a class="item" href="<?php echo base_url('/penghargaan'); ?>">Penghargaan</a>
        </div>
        <div id="sub-item">
          <a class="item" href="<?php echo base_url('/layanan'); ?>">Layanan</a>
        </div>
        <div id="sub-item">
          <a class="item">Informasi</a>
        </div>
        <div id="sub-item">
          <a class="item" href="http://faq.eepis-its.edu/" >FAQ</a>
        </div>

        <div class="item right menu">
            <div class="ui icon input" id="caributton">
              <form action="<?php echo base_url('/news/cari');?>" method = "post">
                <input class='autocomplete' id="judul_post" type="text" name="cari" placeholder="Cari Berita">
              </form>
                <i class="search icon"></i>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
