<!DOCTYPE html>
<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<title>Politeknik Elektronika Negeri Surabaya</title>
		<?php $this->load->view('welcome/include/seo'); ?>

		<?php $this->load->view('welcome/include/ac'); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="<?php echo base_url('/dist/semantic.min.css'); ?>" type="text/css">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/style.css'); ?>">
		<script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

		<?php $this->load->view('welcome/include/ac'); ?>

	</head>
	<body>
		<?php $this->load->view('welcome/include/header'); ?>

		<br>
		<div class="ui container">
			<div id="title">
				<span class="first">HASIL</span>
				<span>PENCARIAN</span>
			</div>
			<br />
			<div class="ui three column doubling stackable masonry grid">
		<?php foreach($ok as $u) { ?>
				<div class="column">
					<div class="ui fluid woww card">
						<div class="blurring dimmable image">
							<div class="ui dimmer">
								<div class="content">
									<div class="center">
										<div class="ui inverted button">
											<a href="<?php echo base_url('news/post/' . $u->url_id); ?>"> Read More </a>
										</div>
									</div>
								</div>
							</div>
							<img src="<?php if($u->gambar == NULL){ echo base_url('/assets/uploads/post/PENS.png'); } else { echo base_url('/assets/uploads/post/' . $u->gambar); } ?>">
		          		</div>
		          		<div class="content">
		          			<a href="<?php echo base_url('news/post/' . $u->url_id); ?>" class="header"><?php echo $u->judul_id; ?></a>
		      				<div class="meta">
		      					<span class="date">
		      						<?php
										$date = $u->tanggal;
										$jam = $u->tanggal;
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
		</div>

<br>

		<!-- Footer Start -->
		<?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
		<script type="text/javascript">
			$('.woww.card .image').dimmer({
			  on: 'hover'
			});
		</script>
	</body>
</html>
