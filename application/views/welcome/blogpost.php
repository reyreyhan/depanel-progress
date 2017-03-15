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

		<div id="fb-root"></div>
			<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1429029553796686";
			fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
			</script>

			<div id="fb-root"></div>
			<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1240565009321735";
			  fjs.parentNode.insertBefore(js, fjs);
				}
			(document, 'script', 'facebook-jssdk'));
			</script>

<!--			<div id="fb-root"></div>
			<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=1429029553796686";
			  fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));
		</script> -->

	<?php $this->load->view('welcome/include/header'); ?>

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
							<p>Image by <b><?php echo $post->id_fotografer ?></b></p>
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
						<div class="content-desc">
							<p><?php echo $post->isi_id?> </p>
							<!-- -->
							<?php
							echo '<div class="fb-like"
						    data-href="';
							echo base_url('news/post/'. $post->url_id);
							echo '"
						    data-layout="standard"
						    data-action="like"
						    data-show-faces="true">
						  </div>';
							?>


							<?php
							echo '<div class="ui comments">';
							echo '<div class="fb-comments" ';
							echo 'data-href="';
							echo base_url('news/post/' . $post->url_id);
							echo '" ';
							echo 'data-width="500" data-numposts="10">';
							echo '</div>';
							echo '</div>';
							?>


						</div>
					</div>
					<div id="side-content" class="five wide column">
						<span class="costum1">Written by</span><br />
						<span class="costum2"><?php echo $post->id_editor ?></span><br />
						<div class="ui divider"></div>
						<a href="<?php echo "https://www.facebook.com/sharer/sharer.php?u=" . base_url("/news/post/" . $post->url_id);?>"><i class="facebook f icon"></i></a>
						<a href="https://www.youtube.com/user/penseepis"><i class="youtube icon"></i></a>
						<a href="<?php echo base_url('/news/posten/'.$post->url_en); ?>"><i class="flag icon"></i></a>
						<a href="<?php echo base_url("/news/pdf/" . $post->url_id);?>"><i class="print icon"></i></a>
						<span class="costum2">Category:</span>
						<br />

						<?php
						if($post->id_kategori==2) {
						echo'<a href="';
						echo base_url('/news/kampus/');
						echo '">
							<span class="tag tag1">Kegiatan Kampus</span>
						</a>';
						} else {
						echo'<a href="';
						echo base_url('/news/mahasiswa/');
						echo'">
							<span class="tag tag1">Kegiatan Kemahasiswaan</span>
						</a>';
						}
						?>
					</div>
				</div>
			<?php } ?>
			</div><!-- stop $post-->
			<div class="four wide computer column">
				<div id="news-list" class="ui segment">
					<div class="ui list">
						<div class="custom">
						<?php foreach($post_F as $BU) {
						?>
							<div id="side-content" class="five wide column">
							<h1>Berita Utama</h1>
							<p class="link"><a href="<?php echo base_url('/news/post/'.$BU->url_id); ?>"><?php echo $BU->judul_id ?></a></p>
							<p>

								<?php
									//echo $BU->isi_id;
									$string = $BU->isi_id;
									$out = word_limiter($string, 25);
									echo $out;
								?>
								<br>
								<a href="<?php echo base_url('/news/post/'.$BU->url_id); ?>">
								<span class="tag tag1">Read More</span>
								</a>
							</p>
							</div>


						<?php
						}
						?>
						</div>
						<br>

						<?php foreach($post_ALL as $all) { ?>

						<?php

						$last = new DateTime($all->tanggal);
						$now = new  DateTime(date( 'Y-m-d h:i:s'));
						$interval = $last->diff($now);

						$days = (int)$interval->format('%d');
						$hours = (int)$interval->format('%H');

						if($days <= 30) {
						echo'<div class="item">
							<div class="content">
					    		<a href="';
					    echo base_url('/news/post/'.$all->url_id);
					    echo'" class="header">';
					    echo $all->judul_id;
					    echo'</a>
					    		<div class="description">';
					    		//echo $days . ' days ago' .  $hours . ' hours ago';
					    echo'		</div>
					    	</div>
						</div>';

						} else {
							//echo "lebih dari 7"; echo "<br>";
						}

						?>

						<?php } ?>
							<a href="<?php echo base_url('/news/allpost/'); ?>">
								<span class="tag tag1">More Post</span>
							</a>
					</div>
				</div>
			</div>

		</div> <!-- stop-->
		<!-- Footer Start -->
		<?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
	</body>
</html>
