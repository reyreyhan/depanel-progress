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
		<script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
	</head>
	<body>
	<?php $this->load->view('welcome/include/header'); ?>

		<br>
		<div id="wrapper-department">
			<div class="ui container">
				<div class="ui two column grid">

				<?php foreach($detail_departemen as $dp) { ?>
				<?php
				if($dp->id==28) {

				foreach($dp_elka as $elka) {
				echo'<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="';
				echo base_url("assets/image/logoweb.png");
				echo'" class="">
								<img src="';
				echo base_url("assets/image/img1.jpg");
				echo'"class="hidden content">
							</div>
							<div class="header" style="background:';
				echo $elka->warna;
				echo'; padding: 20px;">
						    	<h1><a href="';
				echo $elka->url;
				echo '">';
			 	echo $elka->nama;
				echo'</a></h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item">

										   <div class="content">
												<div class="header">';
				//echo $elka->nama;
				echo'</div>
										    	<div class="description">';
				echo $elka->deskripsi;
				echo'</div>
										    </div>
										</a>
						        	</div>
						    	</div>
						    </div>
						</div>
					</div>';
				}

				} else if($dp->id==29) {

				foreach($dp_itce as $itce) {
				echo'<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="';
				echo base_url("assets/image/logoweb.png");
				echo'" class="">
								<img src="';
				echo base_url("assets/image/img1.jpg");
				echo'"class="hidden content">
							</div>
							<div class="header" style="background:';
				echo $itce->warna;
				echo'; padding: 20px;">
						    	<h1><a href="';
				echo $itce->url;
				echo '">';
			 	echo $itce->nama;
				echo'</a></h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item">

										   <div class="content">
												<div class="header">';
				//echo $itce->nama;
				echo'</div>
										    	<div class="description">';
				echo $itce->deskripsi;
				echo'</div>
										    </div>
										</a>
						        	</div>
						    	</div>
						    </div>
						</div>
					</div>';
				}

				} else if($dp->id==30) {

				foreach($dp_me as $me) {
				echo'<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="';
				echo base_url("assets/image/logoweb.png");
				echo'" class="">
								<img src="';
				echo base_url("assets/image/img1.jpg");
				echo'"class="hidden content">
							</div>
							<div class="header" style="background:';
				echo $me->warna;
				echo'; padding: 20px;">
						    	<h1><a href="';
				echo $me->url;
				echo '">';
			 	echo $me->nama;
				echo'</a></h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item">

										   <div class="content">
												<div class="header">';
				//echo $me->nama;
				echo'</div>
										    	<div class="description">';
				echo $me->deskripsi;
				echo'</div>
										    </div>
										</a>
						        	</div>
						    	</div>
						    </div>
						</div>
					</div>';
				}

				} else if($dp->id==34) {

				foreach($dp_mmk as $mmk) {
				echo'<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="';
				echo base_url("assets/image/logoweb.png");
				echo'" class="">
								<img src="';
				echo base_url("assets/image/img1.jpg");
				echo'"class="hidden content">
							</div>
							<div class="header" style="background:';
				echo $mmk->warna;
				echo'; padding: 20px;">
						    	<h1><a href="';
				echo $mmk->url;
				echo '">';
			 	echo $mmk->nama;
				echo'</a></h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item">

										   <div class="content">
												<div class="header">';
				//echo $mmk->nama;
				echo'</div>
										    	<div class="description">';
				echo $mmk->deskripsi;
				echo'</div>
										    </div>
										</a>
						        	</div>
						    	</div>
						    </div>
						</div>
					</div>';
				}

				}
				?>

				<?php } ?>


				</div>
			</div>
		</div>
		<br>
		<!-- Footer Start -->
		<?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
	</body>
</html>
