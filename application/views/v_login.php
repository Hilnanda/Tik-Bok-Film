<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("head_link") ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url().'Film'; ?>">Tix-Bok</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">					
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">                        
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#login">Login Admin</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="mastheadlogin" style="padding-bottom:225px" id="login">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-5 text-white">
                    <form method="post" 
        action="<?php echo base_url().'login/aksi_login'; ?>">
							<div class="form-group row">
								<label class="col-form-label" for="nama">Username</label>
								<input type="text" class="form-control" id="USERNAME" name="USERNAME" placeholder="Username">
							</div>
							<div class="form-group row">
								<label class="col-form-label" for="password">Password</label>
								<input type="password" class="form-control" id="PASSWORD" name="PASSWORD" placeholder="Password">
							</div>
							<div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-xl js-scroll-trigger mt-3">
							</div>
						</form>
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
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Abdullah Wisanggeni</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php $this->load->view("footer_link") ?>
    </body>
</html>
