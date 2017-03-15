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

    <?php $this->load->view('welcome/include/headerlayanan'); ?>

    <div class="ui grid container">
			<div class="seventeen wide computer column">
				<div id="title" style="margin-top: 30px;">
					<span class="first">Layanan</span>
					<span>PENS</span>
				</div>

          <br>

        <div class="ui link divided items">
				  <div class="item">
				    <div class="image">
				      <img width="245" height="140" src="<?php echo base_url('/assets/uploads/layanan/jas.jpg'); ?>" />
				    </div>
				    <div class="content">
				      <a class="header" href="https://jas.pens.ac.id/">Job Arrangement System PENS</a>
				      <div class="description">
				        <p>
                  Job Arrangement System PENS atau biasa disingkat dengan JAS, merupakan suatu wadah bagi alumni, PENS, dan dunia kerja. Dengan JAS diharapkan mampu mempererat tali silaturahim dan saling bertukar informasi yang bermanfaat
				        </p>
				      </div>
				    </div>
				  </div>
				</div>
				<br>

        <div class="ui link divided items">
				  <div class="item">
				    <div class="image">
				      <img width="245" height="140" src="<?php echo base_url('/assets/uploads/layanan/mahasiswa.jpg'); ?>" />
				    </div>
				    <div class="content">
				      <a class="header" href="http://student.pens.ac.id/">Mahasiswa PENS</a>
				      <div class="description">
				        <p>
                  Merupakan layanan satu pintu, untuk memudahkan mahasiswa mengakses berbagai layanan aplikasi Online yang ada di PENS seperti Akses Internet, Daftar Ulang, Pendaftaran Beasiswa, Pendaftaran Kegiatan Mahasiswa, Melihat Nilai, Ujian Online, dll.
				        </p>
				      </div>
				    </div>
				  </div>
				</div>
				<br>

        <div class="ui link divided items">
				  <div class="item">
				    <div class="image">
				      <img width="245" height="140" src="<?php echo base_url('/assets/uploads/layanan/dosendankaryawan.jpg'); ?>" />
				    </div>
				    <div class="content">
				      <a class="header" href="http://lecturer.pens.ac.id/">Dosen dan Karyawan PENS</a>
				      <div class="description">
				        <p>
                  Merupakan layanan satu pintu, untuk memudahkan Dosen dan Karyawan mengakses berbagai layanan aplikasi Online yang ada di PENS seperti Akses Internet, Pengisian Kinerja, Absensi, Input Nilai, dll.
				        </p>
				      </div>
				    </div>
				  </div>
				</div>
				<br>

			</div>
		</div>


		<!-- Footer Start -->
    <?php $this->load->view("welcome/include/footer");?>
		<!-- Footer Stop-->
		<script src="<?php echo base_url('dist/costum.js'); ?>"></script>
		<script src="<?php echo base_url('dist/addition.js'); ?>"></script>
	</body>
</html>
