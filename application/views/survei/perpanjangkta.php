<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Form Perpanjangan KTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="<?= base_url() ?>template_form/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

	<!-- DATE-PICKER -->
	<link rel="stylesheet" href="<?= base_url() ?>template_form/vendor/date-picker/css/datepicker.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template_form/css/style.css">
</head>

<body>
	<div class="wrapper">
		<form action="<?= base_url('survei/perpanjangkta/create') ?>" method="post" id="wizard">
			<input type="hidden" name="submit_checker" value="true">
			<!-- SECTION 1 -->
			<h4></h4>
			<section>
				<div class="inner">
					<div class="form-row">
						<div class="form-holder">
							<input name="umur" type="number" class="form-control" placeholder="Umur">
						</div>
					</div>
					<div class="form-row">
						<h4>Jenis Kelamin</h4>
						<input type="radio" name="jk" value="L" />Laki-laki
						<input type="radio" name="jk" value="P" />Perempuan
					</div>
					<div class="form-row">
						<h4>Pendidikan</h4>
						<input type="radio" name="pendidikan" value="SD" />SD
						<input type="radio" name="pendidikan" value="SMP" />SMP
						<input type="radio" name="pendidikan" value="SMA" />SMA
						<input type="radio" name="pendidikan" value="DIPLOMA" />DIPLOMA
						<input type="radio" name="pendidikan" value="S1" />S1
						<input type="radio" name="pendidikan" value="S2/S3" />S2/S3
					</div>
					<div class="form-row">
						<h4>Pekerjaan</h4>
						<input type="radio" name="pekerjaan" value="PNS" />PNS
						<input type="radio" name="pekerjaan" value="TNI" />TNI
						<input type="radio" name="pekerjaan" value="POLRI" />POLRI
						<input type="radio" name="pekerjaan" value="DOSEN" />DOSEN
						<input type="radio" name="pekerjaan" value="SWASTA" />SWASTA <br>
						<input type="radio" name="pekerjaan" value="PELAJAR" />PELAJAR
						<input type="radio" name="pekerjaan" value="LAINNYA" />LAINNYA
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelanyanannya</h4>
						<input type="radio" name="q1" value="1" />Tidak sesuai
						<input type="radio" name="q1" value="2" />Kurang sesuai
						<input type="radio" name="q1" value="3" />Sesuai <br>
						<input type="radio" name="q1" value="4" />Sangat sesuai
					</div>
					<div class="form-row">
						<h4>Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini</h4>
						<input type="radio" name="q2" value="1" />Tidak mudah
						<input type="radio" name="q2" value="2" />Kurang mudah
						<input type="radio" name="q2" value="3" />Mudah <br>
						<input type="radio" name="q2" value="4" />Sangat mudah
					</div>
				</div>
			</section>

			<!-- SECTION 2 -->
			<h4></h4>
			<section>
				<div class="inner">
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan</h4>
						<input type="radio" name="q3" value="1" />Tidak cepat
						<input type="radio" name="q3" value="2" />Kurang cepat
						<input type="radio" name="q3" value="3" />Cepat <br>
						<input type="radio" name="q3" value="4" />Sagat cepat
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang kewajaran biaya atau tarif dalam pelayanan</h4>
						<input type="radio" name="q4" value="1" />Sangat mahal
						<input type="radio" name="q4" value="2" />Cukup mahal
						<input type="radio" name="q4" value="3" />Murah <br>
						<input type="radio" name="q4" value="4" />Gratis
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan</h4>
						<input type="radio" name="q5" value="1" />Tidak sesuai
						<input type="radio" name="q5" value="2" />Cukup sesuai
						<input type="radio" name="q5" value="3" />Sesuai <br>
						<input type="radio" name="q5" value="4" />Sangat sesuai
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang kompetensi atau kemampuan petugas dalam pelayanan</h4>
						<input type="radio" name="q6" value="1" />Tidak kompeten
						<input type="radio" name="q6" value="2" />Cukup kompeten <br>
						<input type="radio" name="q6" value="3" />Kompeten
						<input type="radio" name="q6" value="4" />Sangat kompeten
					</div>
				</div>
			</section>

			<!-- SECTION 3 -->
			<h4></h4>
			<section>
				<div class="inner">
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan</h4>
						<input type="radio" name="q7" value="1" />Tidak sopan dan tidak ramah <br>
						<input type="radio" name="q7" value="2" />Kurang sopan dan kurang ramah <br>
						<input type="radio" name="q7" value="3" />Sopan dan ramah <br>
						<input type="radio" name="q7" value="4" />Sangat sopan dan sangat ramah
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang tersedianya Maklumat Pelayanan</h4>
						<input type="radio" name="q8" value="1" />Tidak ada <br>
						<input type="radio" name="q8" value="2" />Ada tetapi tidak diterapkan <br>
						<input type="radio" name="q8" value="3" />Diterapkan tetapi kurang maksimal <br>
						<input type="radio" name="q8" value="4" />Diterapkan sepenuhnya
					</div>
					<div class="form-row">
						<h4>Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan</h4>
						<input type="radio" name="q9" value="1">Tidak ada <br>
						<input type="radio" name="q9" value="2">Ada tetapi tidak berfungsi <br>
						<input type="radio" name="q9" value="3">Berfunsi tetapi kurang maksimal <br>
						<input type="radio" name="q9" value="4">Dikelola dengan baik
					</div>
				</div>
			</section>
		</form>
	</div>

	<script src="<?= base_url() ?>template_form/js/jquery-3.3.1.min.js"></script>

	<!-- JQUERY STEP -->
	<script src="<?= base_url() ?>template_form/js/jquery.steps.js"></script>

	<!-- DATE-PICKER -->
	<script src="<?= base_url() ?>template_form/vendor/date-picker/js/datepicker.js"></script>
	<script src="<?= base_url() ?>template_form/vendor/date-picker/js/datepicker.en.js"></script>

	<script src="<?= base_url() ?>template_form/js/main.js"></script>

	<script>
		$(document).ready(function() {
			$('#wizard').submit(function(e) {
				if (
					$('input[name="jk"]').is(':checked') &&
					$('input[name="pendidikan"]').is(':checked') &&
					$('input[name="pekerjaan"]').is(':checked') &&
					$('input[name="q1"]').is(':checked') &&
					$('input[name="q2"]').is(':checked') &&
					$('input[name="q3"]').is(':checked') &&
					$('input[name="q4"]').is(':checked') &&
					$('input[name="q5"]').is(':checked') &&
					$('input[name="q6"]').is(':checked') &&
					$('input[name="q7"]').is(':checked') &&
					$('input[name="q8"]').is(':checked') &&
					$('input[name="q9"]').is(':checked')
				) {

				} else {
					alert('Semua field harus di isi!');
					return false;
				}
			});
		})
	</script>

	<!-- Template created and distributed by Colorlib -->
</body>

</html>