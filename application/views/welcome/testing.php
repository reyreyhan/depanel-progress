<!DOCTYPE html>
<html>
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <title>Politeknik Elektronika Negeri Surabaya</title>

    <link rel="stylesheet" href="<?php echo base_url('/dist/semantic.min.css'); ?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/styleslide.css'); ?>">
    <script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
    <script src="<?php echo base_url('dist/jquery.glide.min.js'); ?>"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <style>
      #grid-news {
        max-width: 845px;
      }
    </style>
    </head>
    <body>
      <div id="wrapper-grid-newsflash">
        <div class="ui container">
          <div class="column" id="grid-newsflash">
            <div class="grid-sizer-nf"></div>
            <div class="grid-item-nf grid-item-main-nf">
              <div class="slider slider1" id="sliderr">
                <div class="slides">
                <?php $i=0; foreach ($newsflash as $nf) { ?>
                    <div class="slide-item item<?php echo $i++; ?>" style="background: url(<?php echo base_url('/assets/uploads/newsflash/' . $nf->gambar); ?>);"></div>
                <?php } ?>
                </div>
              </div>
            </div>
            <?php $i=0; foreach ($newsflash as $nf) { ?> 
            <a href='#' onclick="gotoslide(<?php echo $i++; ?>)">
              <div class="grid-item-nf grid-item-item-nf">
                <?php echo $nf->judul; ?>
              </div>
            </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      $('#sliderr').glide({
        autoplay: 3000,
        arrowsWrapperClass: 'slider-arrows',
        arrowRightText: '',
        arrowLeftText: ''
      });

      function gotoslide (i) {
        var glide = $('#sliderr').glide().data('api_glide');
        glide.jump(i+1, console.log("I'm here"));
      }
      </script>
    </body>
</html>