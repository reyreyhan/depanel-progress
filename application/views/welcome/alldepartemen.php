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
	<?php $this->load->view('welcome/include/headerakademik'); ?>

		<br>
		<div id="wrapper-department">
			<div class="ui container">
				<div class="ui two column grid">
					<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="<?php echo base_url('assets/image/logoweb.png'); ?>" class="">
								<!-- <img src="<?php //echo base_url('assets/image/img1.jpg'); ?>" class="hidden content"> -->
							</div>
							<div class="header" style="background:#FFF000; padding: 20px;">
						    	<h1>
						    	Teknik Elektro
						    	</h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<?php foreach($dp_elka as $elka) { ?>
						    	<div class="description">
						        	<div class="ui list">
						        		<a href="<?php echo $elka->url?>" class="item">
										   <i class="right triangle icon"></i>
										   <div class="content">
												<div class="header">
												<?php echo $elka->nama?>
												</div>
												<br>
										    	<div class="description"><?php echo $elka->deskripsi?></div>
										    	<br>
										    </div>
										</a>
						        	</div>
						    	</div>
						    	<?php } ?>
						    </div>
						</div>
					</div>

					<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="<?php echo base_url('assets/image/logoweb.png'); ?>" class="">
								<!-- <img src="<?php //echo base_url('assets/image/img1.jpg'); ?>" class="hidden content"> -->
							</div>
							<div class="header" style="background:#4286f4; padding: 20px;">
						    	<h1>
						    	Teknik Informatika & Komputer
						    	</h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<?php foreach($dp_itce as $itce) { ?>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item" href="<?php echo $itce->url?>">
										   <i class="right triangle icon"></i>
										   <div class="content">
												<div class="header"><?php echo $itce->nama?></div>
												<br>
										    	<div class="description"><?php echo $itce->deskripsi?></div>
										    	<br>
										    </div>
										</a>
						        	</div>
						    	</div>
						    	<?php } ?>
						    </div>
						</div>
					</div>

					<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="<?php echo base_url('assets/image/logoweb.png'); ?>" class="">
							</div>
							<div class="header" style="background:#35e819; padding: 20px;">
						    	<h1>
						    	Mekanika & Energi
						    	</h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<?php foreach($dp_me as $me) { ?>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item" href="<?php echo $me->url?>">
										   <i class="right triangle icon"></i>
										   <div class="content">
												<div class="header"><?php echo $me->nama?></div>
												<br>
										    	<div class="description"><?php echo $me->deskripsi?></div>
										    	<br>
										    </div>
										</a>
						        	</div>
						    	</div>
						    	<?php } ?>
						    </div>
						</div>
					</div>

					<div class="column">
						<div class="ui fluid card">
							<div class="ui slide masked reveal image">
								<img src="<?php echo base_url('assets/image/logoweb.png'); ?>" class="">
							</div>
							<div class="header" style="background:#4b0082; padding: 20px;">
						    	<h1>
						    	Teknik Multimedia Kreatif
						    	</h1>
						    </div>
							<div class="content">
						    	<div class="meta">Program Studi :</div>
						    	<?php foreach($dp_mmk as $mmk) { ?>
						    	<div class="description">
						        	<div class="ui list">
						        		<a class="item" href="<?php echo $mmk->url?>">
										   <i class="right triangle icon"></i>
										   <div class="content">
												<div class="header"><?php echo $mmk->nama?></div>
												<br>
										    	<div class="description"><?php echo $mmk->deskripsi?></div>
										    	<br>
										    </div>
										</a>
						        	</div>
						    	</div>
						    	<?php } ?>
						    </div>
						</div>
					</div>

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
