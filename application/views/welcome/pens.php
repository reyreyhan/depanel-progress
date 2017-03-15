<!DOCTYPE html>
<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<title>Politeknik Elektronika Negeri Surabaya</title>
		<?php $this->load->view('welcome/include/seo'); ?>

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
	<?php $this->load->view('welcome/include/header'); ?>
		<div id="wrapper-grid-headline">
			<div class="ui container">
				<div class="column" id="grid-headline">
					<div class="grid-sizer"></div>
					<?php foreach($post_F as $psF) {
					?>

					<?php if($psF->gambar==NULL) {

					echo'
					<div class="grid-item grid-item-main" style="background: url(assets/uploads/post/';
					echo 'PENS.png';
					echo '); background-size: 100% 100%;">';

					} else {

					echo'
					<div class="grid-item grid-item-main" style="background: url(assets/uploads/post/';
					echo $psF->gambar;
					echo '); background-size: 100% 100%;">';

					}
					?>

						<div class="caption-headline">
							<p>
								<a href="<?php echo base_url('/news/post/
								'.$psF->url_id); ?>"><?php echo $psF->judul_id ?></a>
							</p>
						</div>
					</div>
					<?php } ?>

					<?php foreach($post_NF as $psNF)
					{ ?>

					<?php

					if($psNF->gambar==NULL) {

					echo '<div class="grid-item grid-item-item" style="background: url(assets/uploads/post/';
					echo 'PENS.png';
					echo'); background-size: 100% 100%; ">';

					} else {

					echo '<div class="grid-item grid-item-item" style="background: url(assets/uploads/post/';
					echo $psNF->gambar;
					echo'); background-size: 100% 100%; ">';

					}

					?>

						<div class="caption-headline2 itemm">
							<p>
								<a href="<?php echo base_url('/news/post/'.$psNF->url_id); ?>"><?php echo $psNF->judul_id ?></a>
							</p>
						</div>
					</div>


					<?php } ?>

				</div>
			</div>
		</div>
      <div id="wrapper-grid-newsflash">
        <div class="ui container">
          <div class="column" id="grid-newsflash">
            <div class="grid-sizer-nf"></div>
            <div class="grid-item-nf grid-item-main-nf">
              <div class="slider slider1" id="sliderr">
                <div class="slides">
                <?php $i=0; foreach ($newsflash as $nf) { ?>
                    <div class="slide-item item<?php echo $i++; ?>">
                    	<img src="<?php echo base_url('/assets/uploads/newsflash/');
                    	echo  '/' . $nf->gambar;
                    	?>" height="300" width="845">
                    </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <?php $i=0; foreach ($newsflash as $nf) { ?>
              <div class="grid-item-nf grid-item-item-nf" onclick="gotoslide(<?php echo $i++; ?>)">
                <?php echo $nf->judul; ?>
              </div>
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
		<div id="wrapper-grid-news">
			<div class="ui container">
				<div id="title">
					<span class="first">LATEST</span>
					<span>NEWS</span>
				</div>
				<br />
				<div class="ui three column doubling stackable masonry grid">
					<?php foreach($post_ALL as $all) { ?>
					<div class="column">
						<div class="ui fluid test card">
							<div class="blurring dimmable image">
								<div class="ui dimmer">
									<div class="content">
										<div class="center">
											<a href="<?php echo base_url('news/post/' . $all->url_id); ?>">
												<div class="ui inverted button">
												 Read More
												</div>
											</a>
										</div>
									</div>
								</div>
								<img src="<?php if($all->gambar == NULL){ echo base_url('/assets/uploads/post/PENS.png'); } else { echo base_url('/assets/uploads/post/' . $all->gambar); } ?>">
			          		</div>
			          		<div class="content">
			          			<a href="<?php echo base_url('news/post/' . $all->url_id); ?>" class="header"><?php echo $all->judul_id; ?></a>
			      				<div class="meta">
			      					<span class="date">
			      						<?php
											$date = $all->tanggal;
											$jam = $all->tanggal;
											echo date("d F Y", strtotime($date));
											//echo "<br>";
											echo " Jam ".date("h:ia", strtotime($date));
											?>
									</span>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<br />
				<br />
			</div>
		</div>
		<!-- Footer Start -->
		<?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
		<script>
			$('.test.card .image').dimmer({
			  on: 'hover'
			});


			$(document).ready(function(){
				var scrollPoss = 0;
			    var Counter = 0;
			    $(window).on('scroll', function(){
			        var scrolled = 0;
					var lastScrolled = 0;
					$(document).on('scroll', function (evt) {
					    var pos = $(document).scrollTop();
					    scrolled += Math.abs(pos - lastScrolled);
					    lastScrolled = pos;
					    $('#scrollplace').html(scrolled);
					});
    			});
			});
	</script>
	</body>
</html>
