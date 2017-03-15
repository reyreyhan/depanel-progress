<!DOCTYPE html>
<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<title>Politeknik Elektronika Negeri Surabaya</title>
<!--
		<link rel="stylesheet" type="text/css" href="<?php //echo base_url('dist/semantic.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php //echo base_url('dist/style.css'); ?>">
		<script src="<?php //echo base_url('dist/jquery.min.js'); ?>"></script>
		<script src="<?php //echo base_url('dist/semantic.js'); ?>"></script>
		<script src="<?php //echo base_url('dist/masonry.pkgd.js'); ?>"></script>
-->
	</head>
	<body>

		<div class="ui grid container">
			<div class="twelve wide computer column">
			<?php foreach($post as $post) { ?>
				<div id="content" class="ui segment grid">

					<?php
					if($post->gambar==NULL) {
					echo '<div id="head-content" class="sixteen wide column"
					style="background-image: url(../../assets/uploads/post/PENS.png); background-size: 100% 100%;">
						<div class="black">
						</div>
					</div>';
					} else {
					echo '<div id="head-content" class="sixteen wide column"
					style="background-image: url(../../assets/uploads/post/';
					echo $post->gambar;
					echo '); background-size: 100% 100%;">
						<div class="black">
						</div>
					</div>';
					}
					?>

					<div id="inner-content" class="eleven wide column">
						<div class="title-head">

							<h1><?php echo $post->judul_id ?></h1>
							<p>Written By <b><?php echo $post->id_editor ?></b> || Image by <b><?php echo $post->id_fotografer ?></b></p>
							<a class="item">

							<?php
								$date = $post->tanggal;
								$jam = $post->tanggal;
								echo date("d F, Y", strtotime($date));
								//echo "<br>";
								echo " Jam ".date("h:ia", strtotime($date));

							?>
							</a>
						</div>

						<br>
						<center>
						<?php

						if($post->gambar==NULL) {
							echo '<img height="280" width="580" src="' . base_url("/assets/uploads/post/PENS.png") . '">';
						} else {
							echo '<img height="280" width="580" src="' . base_url("/assets/uploads/post/") . '/' . $post->gambar . '">';
						}

						?>
					</center>
					<br>
						<div class="content-desc">
							<p><?php echo $post->isi_id?> </p>

							<div class="ui comments">

							<?php
							echo '<div class="fb-comments" ';
							echo 'data-href="';
							echo base_url('news/post/' . $post->url_id);
							echo '" ';
							echo 'data-width="500" data-numposts="10">';
							?>

							</div>
							</div>
						</div>
					</div>
			<?php } ?>

			<!-- stop $post-->

		</div>
		<!-- stop-->
		<!-- Footer Start -->
		<!-- Footer Stop-->
<!--
		<script src="dist/costum.js"></script>
		<script src="dist/addition.js"></script>
-->
	</body>
</html>
