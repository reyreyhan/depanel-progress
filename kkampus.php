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

		<div class="ui grid container">
			<div class="sixteen wide computer column">
				<div id="title" style="margin-top: 30px;">
					<span class="first">Hasil</span>
					<span>Pencarian</span>
				</div>

				<?php foreach($ok as $u) { ?>
				<hr size="30">
				<div class="ui link divided items">
				  <div class="item">
				    <div class="image">
							<?php
								if($u->gambar==NULL) {
									echo '<img width="245" height="140" src="';
									echo base_url('/assets/uploads/post/PENS.jpg');
									echo '" />';
								} else {
									echo '<img width="245" height="140" src="';
									echo base_url('/assets/uploads/post/' . $u->gambar);
									echo '" />';
								}
							?>
				    </div>
				    <div class="content">
              <a href="<?php echo base_url('news/post/' . $u->url_id); ?>" class="header"><?php echo $u->judul_id; ?></a>
				      <div class="description">
				        <p>
						<?php
							$string = $u->isi_en;
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
		</div>

		<!-- Footer Start -->
    <?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
	</body>
</html>
