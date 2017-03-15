		<div id="footer-container">
			<div class="ui container">
				<footer class="ui equal width grid">
					<div class="column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								DEPARTEMEN
							</h3>
							<div class="divid"></div>
							<ul>
							<?php foreach($departemen as $dprt) { 
							?>
								<li>
									<a href="<?php echo base_url('/departemen/index/'.$dprt->link)?>"><?php echo $dprt->nama_dp ?></a>
								</li>
							<?php } ?>
								<li>
									<a href="<?php echo base_url('/departemen/pasca/')?>')?>">Pasca Sarjana</a>
								</li>	
							</ul>
							<h3 class="header">
								PROGRAM STUDI
							</h3>
							<div class="divid"></div>
							<ul>
							<?php foreach($jurusan as $jrs) { ?>
								<li>
									<a href="<?php echo $jrs->url ?>"><?php echo $jrs->nama?></a>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
					<div class="column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								DOSEN
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://lecturer.pens.ac.id">Website Dosen</a>
								</li>
								<li>
									<a href="http://mail.pens.ac.id">Email Dosen</a>
								</li>
								<li>
									<a href="http://video.pens.ac.id">Modul Ajar Video</a>
								</li>
								<li>
									<a href="http://dosenjaga.pens.ac.id">Dosen Jaga</a>
								</li>
							</ul>
							<h3 class="header">
								MAHASISWA
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://web.student.pens.ac.id">Website Mahasiswa</a>
								</li>
								<li>
									<a href="http://mail.student.pens.ac.id">Email Mahasiswa</a>
								</li>
								<li>
									<a href="http://bem.pens.ac.id">Badan Eksekutif Mahasiswa</a>
								</li>
								<li>
									<a href="http://himaelka.pens.ac.id">Hima Elektronika</a>
								</li>
								<li>
									<a href="http://himatel.pens.ac.id">Hima Telkom</a>
								</li>
								<li>
									<a href="http://himaelin.pens.ac.id">Hima Elin</a>
								</li>
								<li>
									<a href="http://himit.pens.ac.id">Hima IT</a>
								</li>
								<li>
									<a href="http://himameka.pens.ac.id">Hima Mekatronika</a>
								</li>
								<li>
									<a href="">Hima Multimedia Broadcasting</a>
								</li>
								<li>
									<a href="http://hmce.pens.ac.id">Hima (Students' Union of) Computer Engineering</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								UNIT
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://mis.eepis-its.edu" target="blank_">EEPIS Information System</a>
								</li>
								<li>
									<a href="http://umm.pens.ac.id" target="blank_">Unit Manajemen Mutu</a>
								</li>
								<li>
									<a href="http://online.mis.pens.ac.id" target="blank_">Unit Perencanaan dan Pengembangan</a>
								</li>
								<li>
									<a href="http://online.pens.ac.id" target="blank_">Unit Suku Cadang </a>
								</li>
								<li>
									<a href="http://kemahasiswaan.pens.ac.id" target="blank_">Unit Kegiatan Mahasiswa</a>
								</li>
								<li>
									<a href="http://jas.pens.ac.id" target="blank_">Job Arrangement System</a>
								</li>
								<li>
									<a href="http://p3m.pens.ac.id" target="blank_">P3M</a>
								</li>
								<li>
									<a href="http://tc.pens.ac.id" target="blank_">Training dan Sertifikasi</a>
								</li>
								<li>
									<a href="http://tc.pens.ac.id" target="blank_">Kemitraan dan Bisnis</a>
								</li>
								<li>
									<a href="http://online.mis.eepis-its.edu" target="blank_">Perpustakaan</a>
								</li>
								<li>
									<a href="http://tefl.pens.ac.id" target="blank_">Pusat Bahasa</a>
								</li>
								<li>
									<a href="http://online.mis.pens.ac.id" target="blank_">Pengadaan Barang dan Jasa</a>
								</li>
								<li>
									<a href="http://noc.pens.ac.id" target="blank_">Jaringan Komputer</a>
								</li>
								<li>
									<a href="http://edp.pens.ac.id" target="blank_">EDP</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="column">
						<div id="footer-menu" class="ui basic segment">
							<h3 class="header">
								INFORMASI
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://online.mis.pens.ac.id">Online MIS</a>
								</li>
								<li>
									<a href="http://komurindo.pens.ac.id">Tim Komurindo PENS</a>
								</li>
								<li>
									<a href="http://pmb.pens.ac.id">Penerimaan Mahasiswa Baru</a>
								</li>
								<li>
									<a href="http://ies.pens.ac.id">Industrial Electronics Seminar</a>
								</li>
								<li>
									<a href="http://repo.pens.ac.id">EEPIS Repository</a></li>
								<li>
									<a href="http://emitter.pens.ac.id">EMITTER Int. Journal of Eng. Tech.</a>
								</li>
								<li>
									<a href="http://peduliyatim.pens.ac.id">Peduli Yatim</a>
								</li>
								<li>
									<a href="/research">Tugas Akhir Mahasiswa</a>
								</li>
							</ul>
							<h3 class="header">
								LINK LUAR
							</h3>
							<div class="divid"></div>
							<ul>
								<li>
									<a href="http://www.politeknik.or.id">Website Politeknik Bersama</a>
								</li>
								<li>
									<a href="http://www.its.ac.id">Institut Teknologi Sepuluh Nopember</a>
								</li>
								<li>
									<a href="http://www.dikti.go.id">Dikti</a>
								</li>
								<li>
									<a href="http://garuda.dikti.go.id/">Garuda Dikti</a>
								</li>
								<li>
									<a href="http://www.kemdiknas.go.id/">Kemendiknas</a>
								</li>
								<li>
									<a href="http://bidikmisi.dikti.go.id">Bidikmisi Nasional</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="column">
						<div id="footer-menu" class="ui basic segment">
							<h4>Politeknik Elektronika Negeri Surabaya</h4><br />
							Jl. Raya ITS - Kampus PENS Sukolilo<br />
							Surabaya 60111, Indonesia<br />
							Telp: 62 31 594 7280<br />
							Fax: 62 31 594 6114
						</div>
					</div>
				</footer>
			</div>
		</div>