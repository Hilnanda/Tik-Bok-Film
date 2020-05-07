<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("head_link") ?>

		
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Tix-Bok</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Fasilitas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Beli Tiket</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo base_url().'login'; ?>">Login Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="mastheadindex" style="padding-bottom:200px">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end" style="padding-top:20px">
                        <h1 class="text-uppercase text-white font-weight-bold">Beli Tiket Bioskop Murah Gak Pake Ribet</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Website resmi pembelian tiket bioskop, memberikan anda pengalaman baru pembelian tiket bioskop kesayangan anda.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kita punya yang kamu inginkan!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Selalu update informasi dunia perfilman. Tunggu apa lagi! Beli tiketnya, nonton bareng temen, pacar, atau kekasih bayangan juga boleh.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Mulai!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Fasilitas</h2>
                <hr class="divider my-4" />
                <div class="row justify-content-center">              
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-toilet text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Toilet</h3>                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-hamburger text-primary mb-4"></i>
							<i class="fas fa-4x fa-ice-cream text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Makanan & Minuman</h3>                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-mosque text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Mushola</h3>                            
                        </div>
                    </div>
					<div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="far fa-4x fa-credit-card text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Pembayaran dengan Kartu Kredit</h3>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                <?php
              $no = 1 ;
              foreach ($film as $film) : ?>
					
                    
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?php echo base_url(); ?>upload/<?php echo $film->POSTER_FILM ?>"
                            ><img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $film->POSTER_FILM ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Judul Film</div>
                                <div class="project-name"><?php echo $film->JUDUL_FILM ?></div>
                            </div></a
                        >
                    </div>
                    <?php endforeach ?>
                                 
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="page-section bg-dark text-white">
            <div class="container">
				<div class="row justify-content-center">
					<a class="btn btn-light btn-xl" href="<?php echo base_url().'Pesan_tiket'; ?>">Beli Tiketnya Sekarang!</a>
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
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Abdullah Wisanggeni</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php $this->load->view("footer_link") ?>
    </body>
</html>
