
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
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php echo base_url('bs/bootstrap.min.css');?>">
		<script src="<?php echo base_url('bs/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('bs/bs.js'); ?>"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/semantic.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/style.css'); ?>">
		<script src="<?php echo base_url('dist/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
		<script src="<?php echo base_url('dist/masonry.pkgd.js'); ?>"></script>

		<?php $this->load->view('welcome/include/ac'); ?>
	</head>

<br>

			<div class="ui three column doubling stackable masonry grid">
		<?php foreach($post_kampus as $u) { ?>
				<div class="column">
					<div class="ui fluid woww card">
						<div class="blurring dimmable image">
							<div class="ui dimmer">
								<div class="content">
									<div class="center">
										<div class="ui inverted button">
											<a
											data-toggle="modal" data-target="#wkwk" > Read More </a>
										</div>
									</div>
								</div>
							</div>
							<img width="400" height="400" src="<?php if($u->gambar == NULL){ echo base_url('/assets/uploads/post/PENS.png'); } else { echo base_url('/assets/uploads/post/' . $u->gambar); } ?>">
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

		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
		<script type="text/javascript">
			$('.woww.card .image').dimmer({
			  on: 'hover'
			});
		</script>

<!-- Modal -->
  <div class="modal fade" id="wkwk" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Data Anggota</h4>
        </div>
        <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Nama Anggota</p>
                                                <input type="text" id="title_id" class="form-control" name="nama" value="" placeholder="Nama Anggota" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="InputName">Job</label>
                                        <select class="form-control" id="sel1" name="jabatan">
                                        <div class="input-group">
                                            <option>Penulis</option>
                                            <option>Editor</option>
                                            <option>Fotografer</option>
                                        </div>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Email</p>
                                                <input type="text" id="title_id" class="form-control" name="email" value="" placeholder="Nama Email" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p>Password</p>
                                                <input type="password" id="title_id" class="form-control" name="password" value="" placeholder="Isi Password" id="InputName" required>
                                            </div>
                                        </div>
                                    </div>


        </div>
        <div class="modal-footer">
        <tr>
          <td>
            <button class="btn btn-danger btn-fill btn-sm" data-dismiss="modal">Close</button>
          </td>
            <td>
              <button type="submit" class="btn btn-success btn-fill btn-sm" name="upload" value="upload">Post</button>
          </td>
        </tr>
        </div>

 		</div>
	</div>
  </div>
