<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("head_link") ?>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() . 'Home_page'; ?>">Tix-Bok</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tambahfilm">Tambah Film</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daftarfilm">Daftar Film</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#daftarhistory">Daftar History</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="mastheadlogin" id="tambahfilm">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-md-5 text-white">
					<?php echo form_open_multipart('film/tambah_aksi'); ?>
					<div class="form-group row">
						<label class="col-form-label" for="judulfilm">Judul Film</label>
						<input type="text" class="form-control" id="JUDUL_FILM" name="JUDUL_FILM" placeholder="Judul Film">
					</div>
					<div class="form-group row">
						<label class="col-form-label" for="tahunfilm">Tahun</label>
						<input type="text" class="form-control" id="TAHUN_FILM" name="TAHUN_FILM" placeholder="Tahun Film">
					</div>
					<div class="form-group row">
						<label class="col-form-label" for="sinopsis">Sinopsis</label>
						<input type="text" class="form-control" id="SINOPSIS_FILM" name="SINOPSIS_FILM" placeholder="Sinopsis">
					</div>
					<div class="form-group row">
						<label class="col-form-label" for="jadwaltayang">Jadwal Tayang</label>
						<input type="text" class="form-control" id="JADWAL_TAYANG" name="JADWAL_TAYANG" placeholder="Jadwal Tayang">
					</div>
					<div class="form-group row">
						<label class="col-form-label" for="jadwaltayang">Keterangan</label>
						<textarea class="form-control" id="KETERANGAN_FILM" name="KETERANGAN_FILM" placeholder="Keterangan" id="" cols="30" rows="10"></textarea>
						<!-- <input type="text" > -->
					</div>
					<div class="form-group row">
						<label class="col-form-label" for="jadwaltayang">Upload Gambar</label>
						<input type="file" class="form-control" id="POSTER_FILM" name="POSTER_FILM">
					</div>
					<input class="btn btn-primary btn-xl js-scroll-trigger mt-3" class="form-group" type="submit">

					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</header>

	<section class="page-section" id="daftarfilm">
		<h3 style="margin-left: 30px">Daftar Film</h3>
		<div class="box-body">
			<div class="table-responsive">
				<table id="tblfilm" class="table table-striped table-bordered table-hover">
					<thead class="thead-inverse">
						<tr>
							<th> # </th>
							<th> Judul Film </th>
							<th> Tahun </th>
							<th> Sinopsis </th>
							<th> Poster </th>
							<th> Jadwal Tayang </th>
							<th> Keterangan </th>
							<th> Aksi </th>
						</tr>
						<?php
						$no = 1;
						foreach ($film as $film) : ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td> <?php echo $film->JUDUL_FILM ?> </td>
								<td> <?php echo $film->TAHUN_FILM ?> </td>
								<td> <?php echo $film->SINOPSIS_FILM ?> </td>
								<td style="text-align: center"><img src="
								<?php echo base_url(); ?>upload/
								<?php echo $film->POSTER_FILM ?>" 
								width="150" height="auto" alt=""></td>
								<td> <?php echo $film->JADWAL_TAYANG ?> </td>
								<td> <?php echo $film->KETERANGAN_FILM ?> </td>
								<td onclick="return confirm('Apakah Yakin Anda ingin menghapus?')">
									<?php echo anchor('film/hapus/' . $film->ID_FILM, '<div class="btn btn-danger btn-sm"><i class ="fa fa-trash"></i></div>') ?>
								</td>
							</tr>
					</thead>
					<tbody>
					</tbody>
				<?php endforeach ?>
				</table>
			</div>
		</div>
	</section>


	<section class="page-section" id="daftarhistory">
		<h3 style="margin-left: 30px">Daftar History Transaksi</h3>
		<div class="box-body">
			<div class="table-responsive">
				<table id="tblfilm" class="table table-striped table-bordered table-hover">
					<thead class="thead-inverse">
						<tr>
							<th> # </th>
							<th> Judul Film </th>
							<th> Nama </th>
							<th> Harga Total </th>
							<th> Jumlah Tiket </th>
							<th> Jadwal Menonton </th>
							<th> No Kursi </th>
							<th> Kode Pembayaran </th>
							<th> Detail </th>
							<th> Aksi </th>
						</tr>
						<?php
						$no = 1;
						foreach ($transaksi as $transaksi) : 
							$arr = array( "%20" => " ");
						?>
						
							<tr>
								<td><?php echo $no++ ?></td>
								<td> <?php echo $transaksi->JUDUL_FILM ?> </td>
								<td> <?php echo strtr($transaksi->NAMA,$arr) ?> </td>
								<td> <?php echo $transaksi->HARGA ?> </td>
								<td> <?php echo $transaksi->JUMLAH_TIKET ?> </td>
								<td> <?php echo $transaksi->JADWAL_NONTON ?> </td>
								<td> <?php echo $transaksi->ID_KURSI ?> </td>
								<td> <?php echo $transaksi->RANDOM ?> </td>
								<td> <a id="modal-524329" href="#modal-container-524329<?php echo $transaksi->ID_TRANSAKSI ?>" role="button" class="btn btn-primary" data-toggle="modal">Detail</a> </td>
								<td onclick="return confirm('Apakah Yakin Anda ingin menghapus?')">
									<?php echo anchor('film/hapus_history/' . $transaksi->ID_TRANSAKSI . '/' . $transaksi->NO_KURSI, '<div class="btn btn-danger btn-sm"><i class ="fa fa-trash"></i></div>') ?>

								</td>

							</tr>
					</thead>
					<tbody>
					</tbody>
					<div class="modal fade" id="modal-container-524329<?php echo $transaksi->ID_TRANSAKSI ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel">
									Detail Pembayaran
								</h5>
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="row">
										<div class="col-md-4">
											<p>Judul Film</p>
											<p>Nama</p>
											<p>Harga </p>
											<p>Jumlah Tiket</p>
											<p>Jadwal Nonton</p>
											<p>No Kursi</p>
											<p>Kode Pesan</p>
										</div>
										<div class="col-md-8">
											<p>: <?php echo $transaksi->JUDUL_FILM ?></p>
											<p>: <?php echo strtr($transaksi->NAMA,$arr) ?></p>
											<p>: <?php echo $transaksi->HARGA ?></p>
											<p>: <?php echo $transaksi->JUMLAH_TIKET ?></p>
											<p>: <?php echo $transaksi->JADWAL_NONTON ?></p>
											<p>: <?php echo $transaksi->ID_KURSI ?></p>
											<p>: <b><?php echo $transaksi->RANDOM ?></b></p>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">

								
								<button type="button" class="btn btn-secondary" data-dismiss="modal">
									Close
								</button>
							</div>
						</div>

					</div>

				</div>
				<?php endforeach ?>
				</table>
			</div>
		</div>
	</section>
	

				

		

	<!-- Contact section-->
	<section class="page-section" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="mt-0">Let's Get In Touch!</h2>
					<hr class="divider my-4" />
					<p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
					<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
					<div>+62 812-5343-3043</div>
					<div>+62 877-6324-3309</div>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
					<a class="d-block" href="mailto:abdullahalkarimamrullah01@gmail.com">abdullahalkarimamrullah01@gmail.com</a>
					<a class="d-block" href="mailto:Lhogwtell@gmail.com">Lhogwtell@gmail.com</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Copyright © 2020 - Abdullah Wisanggeni</div>
		</div>
	</footer>
	<?php $this->load->view("footer_link") ?>

	<!-- Third party plugin JS-->

	<!-- <script type="text/javascript">
			$(document).ready(function(){
				var dataTable = $('#tblfilm').DataTable( {
					"processing": true,
					"serverSide": true,
					"bSort" : false,					
				});
			});
		</script> -->
</body>

</html>