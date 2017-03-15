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

    <?php $this->load->view('welcome/include/headerabout'); ?>

    <div class="ui grid container">
			<div class="eleven wide computer column">
				<div id="title" style="margin-top: 30px;">
					<span class="first">Tentang</span>
					<span>PENS</span>
				</div>

				<?php foreach($about_pens as $u) { ?>
          <br>
				<div class="ui link divided items">
				  <div class="item">
				    <div class="image">
				      <img width="245" height="140" src="<?php echo base_url('/assets/uploads/page/' . $u->gambar_url); ?>" />
				    </div>
				    <div class="content">
				      <a class="header"><?php echo $u->judul_id; ?></a>
				      <div class="description">
				        <p>
						<?php
							$string = $u->gambar_keterangan;
							$out = word_limiter($string, 50);
							echo $out;


							/*$string = $u->isi_id;
							$out = word_limiter($string, 50);
							echo $out;*/
						?>
				        </p>
				      </div>
				    </div>
				  </div>
				</div>

				<?php } ?>

				<br><br>

			</div>
			<div class="five wide computer column">
				<div id="title" style="margin-top: 30px;">
					<span class="first">Akses ke</span>
					<span>PENS</span>
				</div>
				<div class="ui fluid card">
			      <div class="image">
			        <img src="assets/image/img1.jpg" />
			      </div>
			      <div class="content">
			        <a class="header">Banyak jalan menuju PENS</a>
			      </div>
			    </div>
			</div>
		</div>


		<!-- Footer Start -->
    <?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
	</body>
</html>
