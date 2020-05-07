<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("head_link") ?>
    <script>
        $(document).ready(function() {
            $('select.ID_FILM').change(function() {
                var selectedJenis = $(this).children('option:selected').val();
                for (var i = 0; i < selectedJenis.split('_')[2]; i++) {
                    if (selectedJenis.split('_')[0] == i) {
                        document.getElementById(i + '_pilihanAcara').style.display = 'block';
                        // $("#ID_FILM").val(selectedJenis.split('_')[1]);
                    } else {
                        document.getElementById(i + '_pilihanAcara').style.display = 'none';
                    }
                }
                // document.getElementById('id' + selectedJenis).style.display = 'block';
            });
        });
    </script>
    <script type="text/javascript">
        ambilJenis();

        function ambilJenis() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() . "Pesan_tiket" ?>',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url() . 'Home_page'; ?>">Tix-Bok</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#belitiket">Beli Tiket</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead2" id="belitiket" style="padding-top:130px">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-4 text-white" style="padding-left:5px">
                    <h1>Pesan Tiket</h1>
                    <form method="post" action="<?php echo base_url() . 'Kursi'; ?>">
                        <div class="form-group row">
                            <label class="col-form-label" for="nama">Nama</label>
                            <input required type="text" class="form-control" id="NAMA" name="NAMA" placeholder="Nama">
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label" for="judulfilm">Judul Film</label>
                            <select class="form-control ID_FILM" id="ID_FILM" name="ID_FILM"  required>
                                <?php

                                echo '<option value="" disabled selected>---Pilih Judul Film---</option>';
                                $count_film = 0;
                                foreach ($film as $film1) {
                                    echo '<option value="' . $count_film . '_' . $film1->ID_FILM . '_' . count($film) . '">' . $film1->JUDUL_FILM . '</option>';
                                    
                                    $count_film++;
                                }
                                ?>
                                <!-- <input type="hidden" value="<?php echo $film1->ID_FILM ?>"> -->
                            </select>
                        </div>



                        <!-- <div class="form-group row">
                            <label class="col-form-label" for="jumlahtiket">Jumlah Tiket</label>
                            <input required type="number" class="form-control" id="JUMLAH_TIKET" name="JUMLAH_TIKET" placeholder="Jumlah Tiket">
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-form-label">Nomor Kursi</label>
                            <div class="col-md-4">
                                <select class="form-control" name="baris" id="baris" size="1">
                                    <option value="A"> A </option>
                                    <option value="B"> B </option>
                                    <option value="C"> C </option>
                                    <option value="D"> D </option>
                                    <option value="E"> E </option>
                                    <option value="F"> F </option>
                                    <option value="G"> G </option>

                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="nomor" id="nomor" size="1">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                    <option value="4"> 4 </option>
                                    <option value="5"> 5 </option>
                                    <option value="6"> 6 </option>

                                </select>
                            </div>
                        </div>-->
                        <?php
                        $count_jadwal = 0;
                        foreach ($film as $f1) {
                        ?>
                            <div class="form-group row" id="<?php echo $count_jadwal . '_' . 'pilihanAcara'; ?>" style="display: none;">
                                <label class="col-form-label" for="jadwalnonton">Jadwal Nonton</label>
                                
                                    <select class="form-control" name="JADWAL_NONTON" id="JADWAL_NONTON" size="1">
                                        <?php
                                        echo '<option value="" disabled selected>---Pilih Jadwal Nonton---</option>';
                                        foreach ($jadwal as $jd) {
                                            if ($f1->JUDUL_FILM == $jd->JUDUL_FILM) {
                                                echo '<option value="' . $jd->JADWAL_TAYANG . '">' . $jd->JADWAL_TAYANG;
                                                echo "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                

                            </div>
                        <?php
                            $count_jadwal++;
                        } ?>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-primary btn-xl js-scroll-trigger mt-3">
                        </div>

                    </form>
                </div>

            </div>
            </>
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

    <!-- Third party plugin JS-->
    <?php $this->load->view("footer_link") ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tglnonton').datepicker({
                format: 'dd-mm-yyyy',
                startDate: '01-04-2020',
                todayBtn: 'linked',
                autoclose: true
            });
        });
    </script>

<!-- <script type="text/javascript">
function yesnoCheck(that) {
    var selectedJenis = $(this).children("option:selected").val();
    // if (that.value != "") {
      //   alert("check");
      selectedJenis.split('_')[1];
        document.getElementById("ifYes").style.display = "block";
//   } else {
//       document.getElementById("ifYes").style.display = "none";
//   }
}
</script> -->
</body>

</html>