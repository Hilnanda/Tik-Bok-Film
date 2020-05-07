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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pembayaran">Metode Pembayaran</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" id="pembayaran">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-5 text-white">
                    <form method="post" action="<?php echo base_url() . 'pembayaran/tambah' ?>">

                        <?php
                        $this->load->helper('string');
                        $random = random_string('alnum', 5);
                        $arr = array("%20" => " ");

                        ?>




                        <h4>Hay, <?php echo  strtr($NAMA, $arr); ?> </h4><br>
                        <h5> Anda Membeli <?php echo $JUMLAH_TIKET; ?> Tiket seharga Rp. 25.000</h5><br>
                        <h5>Jadwal Nonton Anda <?php echo $JADWAL_NONTON; ?> </h5><br>
                        <h5>dengan Nomor Kursi <?php echo $ID_KURSI; ?> </h5><br>
                        <h5>Total Pembayaran Anda sebesar Rp. <?php echo $HARGA; ?></h5><br>
                        <h5>Segera Bayar dengan Kode <b><?php echo $random ?></b> </h5><br>
                        <input type="hidden" name="NAMA" value="<?php echo  strtr($NAMA, $arr); ?>">
                        <input type="hidden" name="ID_FILM" value="<?php echo $ID_FILM; ?>">
                        <input type="hidden" name="HARGA" value="<?php echo 25000; ?>">
                        <input type="hidden" name="JUMLAH_TIKET" value="<?php echo 1; ?>">
                        <input type="hidden" name="JADWAL_NONTON" value="<?php echo $JADWAL_NONTON; ?>">
                        <input type="hidden" name="NO_KURSI" value="<?php echo $NO_KURSI; ?>">
                        <input type="hidden" name="RANDOM" value="<?php echo $random; ?>">

                        <div class="form-group row" style="font-size: 20px">
                            <label class="col-form-label" for="metode">Pilih Metode Pembayaran</label>
                            <div class="radio col-md-6">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="metode" id="metode1" value="Indomart/Alfamart">
                                    <label class="form-check-label" for="metode1"> Indomart / Alfamart </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="metode" id="metode2" value="Transfer Bank">
                                    <label class="form-check-label" for="metode2"> Transfer Bank </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-primary btn-xl js-scroll-trigger mt-3" onclick="return alert('Terimakasih Telah Memesan Tiket di Website Kami!')" value="Cek Pembayaran">
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h5 class="display-4">Langkah Pembayaran</h5>
                            <h6 class="display-5">Metode Pembayaran di Indomart/Alfamart</h6>
                            1. Silahkan datang ke Indomart/Alfamart terdekat</br>
                            2. Tunjukkan nomor transaksi kepada petugas kasir</br>
                            3. Bayar sesuai total pembelian</br>
                            4. Jangan lupa untuk menyimpan bukti transaksi</br>
                            <hr class="my-4">
                            <h6 class="display-5">Metode Pembayaran transfer bank</h6>
                            1. Silahkan datang ke ATM terdekat</br>
                            2. Masukkan kartu ATM dan nomor pin dengan benar</br>
                            3. Pilih menu bayar, lalu multipayment</br>
                            4. Pilih perusahaan Tix-Bok</br>
                            5. Masukkan nomor transaksi dengan benar</br>
                            6. Bayar sesuai total pembelian</br>
                            7. Jangan lupa untuk menyimpan bukti transaksi</br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

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
    <!-- Bootstrap core JS-->
    <?php $this->load->view("footer_link") ?>


</body>

</html>