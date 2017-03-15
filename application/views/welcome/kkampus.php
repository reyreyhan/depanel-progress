<!DOCTYPE html>
<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<title>Politeknik Elektronika Negeri Surabaya</title>
		<?php $this->load->view('welcome/include/seo'); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/semantic.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/style.css'); ?>">
		<script src="<?php echo base_url('dist/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
		<script src="<?php echo base_url('dist/masonry.pkgd.js'); ?>"></script>

	</head>
	<body>

    <?php $this->load->view('welcome/include/header'); ?>

		<br>
		<div class="ui container">
			<div id="title">
				<span class="first">KEGIATAN</span>
				<span>KAMPUS</span>
			</div>
			<br />
			<div class="ui three column doubling stackable masonry grid">
		<?php foreach($post_kampus as $u) { ?>
				<div class="column">
					<div class="ui fluid woww card">
						<div class="blurring dimmable image">
							<div class="ui dimmer">
								<div class="content">
									<div class="center">
										<a href="<?php echo base_url('news/post/' . $u->url_id); ?>">
											<div class="ui inverted button">
											Read More
											</div>
										</a>
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
		<center>
		<ul class="pagination">
<!-- 		  <li><a href="#">1</a></li>
		  <li><a href="#">2</a></li>
		  <li><a href="#">3</a></li>
		  <li><a href="#">4</a></li>
		  <li><a href="#">5</a></li> -->
		  <?php echo $halaman ?>
		</ul>
		</center>

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
