<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--  <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <title>Antrian Klinik</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link href="gantipassword.css" rel="stylesheet" text="text/css">

   
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-right">
                    <ul class="right_side">
                        <li>
                            <a href="login.php">
                                <i class="lnr lnr-phone-handset"></i>
                                012-6532-568-9746
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="lnr lnr-envelope"></i>
                                official.iwars@gmailcom
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="utama.php">
                        <img src="img/antik.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                     aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row ml-0 w-100">
                            <div class="col-lg-12 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="profil-dokter.php">Home</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="antrian.php">Antrian</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="gantipassword.php">Ganti Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="modal" data-target="#myModal">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
   <section class="feedback_area section_gap relative">
<div class="card shadow ganti">
   <form class="user" action="checklogin.php" method="post">
    <div class="row">
        <div class="col-xs-4">
            <h3>Ganti Password</h3>
            <br>
            <p> Password Lama :</p>
            <br>
            <p> Password Baru :</p> 
            <br>  
             <p> Konfirmasi Password : </p> 
             <br>
              <table>
            <tr>
            <td> <button type="submit" name="ganti" class="btn btn-primary btn-user btn-block btn-xs btn-danger">Batal</button></td>
            <td><button type="submit" name="ganti" class="btn btn-primary btn-user btn-block btn-xs btn-success">Simpan</button></td>
            </table>
        </div>

        <div class="col-lg-8">
             <input type="text" class="form-control form-control-user" name="plama" id="exampleInputPassword" placeholder="Masukkan Password Lama Anda">
             <br>
             <input type="text" class="form-control form-control-user" name="pbaru" id="exampleInputPassword" placeholder="Masukkan Password Baru">
             <br>
             <input type="password" class="form-control form-control-user" name="konfirmasi" id="exampleInputPassword" placeholder="Konfirmasi Password">       
        </div>
    </div>
   
   </form>
</div>
</section>

<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Anda yakin untuk keluar?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Keluar</button>
        </div>
      </div>
      
    </div>
</div>

<!-- end modal -->

    <!-- start footer Area -->
  <!--   <footer class="footer-area section_gap">
        <div class="container">
                    <div class="single-footer-widget">
                        <p class="col-lg-8 col-sm-12 footer-text m-0"> --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <!--       </p>
        </div>
                    </div>
    </footer> -->
    <!-- end footer area -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>