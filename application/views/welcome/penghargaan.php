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
		<style>
		@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

		body {
		  font-family: "Roboto", helvetica, arial, sans-serif;
		  font-size: 16px;
		  font-weight: 400;
		  text-rendering: optimizeLegibility;
		}

		div.table-title {
		   display: block;
		  margin: auto;
		  max-width: 600px;
		  padding:5px;
		  width: 100%;
		}

		.table-title h3 {
		   color: #fafafa;
		   font-size: 30px;
		   font-weight: 400;
		   font-style:normal;
		   font-family: "Roboto", helvetica, arial, sans-serif;
		   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
		   text-transform:uppercase;
		}


		/*** Table Styles **/

		.table-fill {
		  background: white;
		  border-radius:3px;
		  border-collapse: collapse;
		  height: 320px;
		  margin: auto;
		  max-width: 600px;
		  padding:5px;
		  width: 100%;
		  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
		  animation: float 5s infinite;
		}

		th {
		  color:#D5DDE5;;
		  background:#1b1e24;
		  border-bottom:4px solid #9ea7af;
		  border-right: 1px solid #343a45;
		  font-size:23px;
		  font-weight: 100;
		  padding:24px;
		  text-align:left;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
		  vertical-align:middle;
		}

		th:first-child {
		  border-top-left-radius:3px;
		}

		th:last-child {
		  border-top-right-radius:3px;
		  border-right:none;
		}

		tr {
		  border-top: 1px solid #C1C3D1;
		  border-bottom-: 1px solid #C1C3D1;
		  color:#666B85;
		  font-size:16px;
		  font-weight:normal;
		  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
		}

		tr:hover td {
		  background:#4E5066;
		  color:#FFFFFF;
		  border-top: 1px solid #22262e;
		  border-bottom: 1px solid #22262e;
		}

		tr:first-child {
		  border-top:none;
		}

		tr:last-child {
		  border-bottom:none;
		}

		tr:nth-child(odd) td {
		  background:#EBEBEB;
		}

		tr:nth-child(odd):hover td {
		  background:#4E5066;
		}

		tr:last-child td:first-child {
		  border-bottom-left-radius:3px;
		}

		tr:last-child td:last-child {
		  border-bottom-right-radius:3px;
		}

		td {
		  background:#FFFFFF;
		  padding:20px;
		  text-align:left;
		  vertical-align:middle;
		  font-weight:300;
		  font-size:18px;
		  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
		  border-right: 1px solid #C1C3D1;
		}

		td:last-child {
		  border-right: 0px;
		}

		th.text-left {
		  text-align: left;
		}

		th.text-center {
		  text-align: center;
		}

		th.text-right {
		  text-align: right;
		}

		td.text-left {
		  text-align: left;
		}

		td.text-center {
		  text-align: center;
		}

		td.text-right {
		  text-align: right;
		}

		</style>
	</head>
	<body>
	<?php $this->load->view('welcome/include/headerpenghargaan'); ?>
<br>
	<div class="ui grid container">
		<div class="sixteen wide computer column">
        <table class="table table-bordered table-hover prestasi">
        <tbody><tr class="title">
        <th width="4%">No</th>
        <th width="40%">Nama</th>
        <th width="17%">Jenis</th>
        <th width="17%">Skala</th>
        <th width="12%">Juara</th>
        <th width="10%">Tahun</th>
        </tr>

        <tr>
        <td>1</td>
        <td>Kategori Division, Fire Fighting Robot Contest 2014 di Trinity College, Hartford, Amerika Serikat</td>
        <td>Institusi</td>
        <td>Internasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>2</td>
        <td>World Skills ASEAN Competition, Hanoi Vietnam</td>
        <td>Institusi</td>
        <td>Internasional</td>
        <td>Gold Medal</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>3</td>
        <td>e-Health, Indonesia ICT Award (INAICTA) 2014</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>4</td>
        <td>RoboCup 2014, Sao Paulo, Brazil</td>
        <td>Institusi</td>
        <td>Internasional</td>
        <td>2nd runner up</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>5</td>
        <td>Asia Pasific ICT Alliance Awards (APICTA) 2014, Jakarta</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Merit Winner - Kategori Student</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>6</td>
        <td>Engineering Education Fiesta 2014, Seoul, Korea</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Finalist</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>7</td>
        <td>Ambassador of Youth Camp for Asia's Future, National Council of Youth Organisation Korea</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Ambassador</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>8</td>
        <td>Ambassador of Youth Camp for Asia's Future, National Council of Youth Organisation Korea</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Ambassador</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>9</td>
        <td>Kategori Wheeled, Fire Fighting Robot Contest 2014 di Trinity College, Hartford, Amerika Serikat</td>
        <td>Institusi</td>
        <td>Internasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>10</td>
        <td>Aplicative Robot, Indonesia ICT Award (INAICTA) 2014</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>11</td>
        <td>Kontes Robot Sepak Bola Indonesia 2014</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>12</td>
        <td>Kontes Robot Seni Indonesia 2014</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>13</td>
        <td>Kontes Kapal Cepat Tak Berawak Nasional 2014</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>14</td>
        <td>Education and Culture, Indonesia ICT Award (INAICTA) 2014/td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Juara 1</td>
        <td>2014</td>
        </tr>
        <tr>
        <td>15</td>
        <td>Rohm, Co,Ltd Special Award in Abu Robocon 2013 Da Nang, Vietnam</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Rohm, Co,Ltd Special Award</td>
        <td>2013</td>
        </tr>
        <tr>
        <td>16</td>
        <td>2nd Runner Up in Abu Robocon 2013 Da Nang, Vietnam</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>2nd Runner Up</td>
        <td>2013</td>
        </tr>
        <tr>
        <td>17</td>
        <td>Special Mention kategori Games (Perguruan Tinggi)</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Special Mention</td>
        <td>2013</td>
        </tr>
        <tr>
        <td>18</td>
        <td>Pemenang pertama kategori Student Project Applications di INAICTA 2013</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Pemenang pertama</td>
        <td>2013</td>
        </tr>
        <tr>
        <td>19</td>
        <td>Abu Robocon Award in Abu Robocon 2013 Da Nang, Vietnam</td>
        <td>Student</td>
        <td>Internasional</td>
        <td>Abu Robocon Award</td>
        <td>2013</td>
        </tr>
        <tr>
        <td>20</td>
        <td>Penghargaan Ide Kreatif Komurindo</td>
        <td>Student</td>
        <td>Nasional</td>
        <td>Ide Kreatif</td>
        <td>2013</td>
        </tr>


        </tbody></table>

		<br>
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
