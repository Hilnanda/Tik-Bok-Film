<?php
if (isset($_GET['nama_film'])) {
    $nama_film = $_GET['nama_film'];
} else {
    $nama_film = '';
}
?>
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

                <div class="col text-white" style="padding-left:100px">
                    <h1 style="text-align: center">Screen</h1>
                    <div class="row mb-5 justify-content-center">
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                        <i class="fas fa-3x fa-tv"></i>
                    </div>
                    <div class="row mb-2 ml-4">
                        <!-- <table>
                            <tr style="text-align: center">
                                <th> </th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                                <th>F</th>
                                <th>G</th>

                            </tr> -->
                        <div class="container">
                            <div class="row">

                                <?php
                                // echo $pesan_kursi['NAMA'];
                                $no = 1;
                                $no_array = 0;
                                $id = array();
                                $boolean = true;
                                $boolean1 = true;
                                foreach ($transaksi as $tran) {
                                    // for ($i = 0; $i < 42; $i++) {

                                    $id[$no_array] = $tran->NO_KURSI;
                                    if ($id[$no_array]) {
                                        $boolean = false;
                                    }
                                    $no_array++;
                                    // }
                                }
                                foreach ($kursi as $krs) {
                                    $boolean1 = true;
                                ?>
                                    <div class="col-sm-2">
                                        <?php

                                        if ($boolean == false) {
                                            for ($i = 0; $i < $jumlah; $i++) {
                                                # code...
                                                // $boolean1 = true;
                                                if ($id[$i] == $krs->NO) {
                                                    # code...
                                                    $boolean1 = false;
                                                    // echo $id[$i];
                                        ?>
                                                    <a style="margin-bottom: 20px;width: 50px;height: 50px" value="<?php echo $krs->NO ?>" onclick="alert('Maaf Kursi Telah di Pesan!')" type="button" class="btn btn-danger mr-2"><b><?php echo $krs->ID_KURSI ?></b></a>
                                                    <!-- <input style="margin-bottom: 20px;width: 50px;height: 50px" value="<?php echo $krs->ID_KURSI ?>" onclick="alert('Maaf Kursi Telah di Pesan!')" type="button" class="btn btn-danger mr-2"> -->
                                                <?php

                                                }
                                            }
                                            if ($boolean1 == true) {
                                                # code...
                                                ?>
                                                <a href="<?php echo base_url() . 'pembayaran/sendKursi/' . substr($pesan_kursi['ID_FILM'],2,2) . '/' . $pesan_kursi['NAMA'] . '/' . $pesan_kursi['JADWAL_NONTON'] . '/' . $krs->NO.'/'.$krs->ID_KURSI; ?>" style="margin-bottom: 20px;width: 50px;height: 50px" value="<?php echo $krs->NO ?>" type="button" class="btn btn-success mr-2"><b><?php echo $krs->ID_KURSI ?></b></a>

                                                <!-- <input style="margin-bottom: 20px;width: 50px;height: 50px" value="<?php echo $krs->ID_KURSI ?>" type="button" class="btn btn-success mr-2"> -->
                                                <!-- <strong><?php echo $krs->ID_KURSI ?></strong> -->
                                            <?php
                                            }
                                            // }
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url() . 'pembayaran/sendKursi/' . substr($pesan_kursi['ID_FILM'],2,2) . '/' . $pesan_kursi['NAMA'] . '/' . $pesan_kursi['JADWAL_NONTON'] . '/' . $krs->NO.'/'.$krs->ID_KURSI; ?>" style="margin-bottom: 20px;width: 50px;height: 50px" value="<?php echo $krs->NO ?>" type="button" class="btn btn-success mr-2"><b><?php echo $krs->ID_KURSI ?></b></a>
                                            <!-- <strong><?php echo $krs->ID_KURSI ?></strong></input> -->
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                    $no++;
                                }

                                ?>

                            </div>
                        </div>


                        <!-- <tr>
                                <td>1</td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                                <td> <button type="button" class="btn btn-success mr-2"><i class="fas fa-2x fa-chair"></i></button>
                                </td>
                            </tr> -->

                        <!-- </table> -->
                    </div>

                </div>
                </v>
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


</body>

</html>