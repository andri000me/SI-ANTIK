<?php
require ("../koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Antrian Klinik</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
	<link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">

	<link href="antrian.css" rel="stylesheet" text="text/css">

	
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
								+62 8223 4121 604
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
					<a class="navbar-brand logo_h" href="index-apoteker.php">
						<img src="../img/antik.png" alt="">
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
									<li class="nav-item">
										<a class="nav-link" href="index-apoteker.php">Home</a>
									</li>
									<li class="nav-item">
										<li class="nav-item active">
										<a class="nav-link" href="apoteker-antrian.php">Antrian</a>
									</li>
									<!--<li class="nav-item">
										<a class="nav-link" href="apoteker-riwayat.php">Riwayat</a>
									</li>-->
								<li class="nav-item">
										<a class="nav-link" href="apoteker-gantipass.php">Ganti Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../logout.php" data-toggle="modal" data-target="#logoutModal">Logout </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<!-- Main Content -->
	
      <div id="content">

        <!-- Topbar -->
        <?php
        include "navbar.php";
        ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        	<section class="procedure_category section_gap_custom">

           <!-- DataTales DATA PASIEN -->
          <div class="card shadow mb-3">
          	<br>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Antrian </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>POLI</td>
                       <td>Status</td>
                      <td>Action</td>

                     
                    </tr>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_antrian, tb_user, tb_poli, tb_periksa, tb_status WHERE tb_antrian.id_poli=	tb_poli.id_poli AND tb_antrian.id_user=tb_user.id_user AND tb_user.id_user=tb_periksa.id_user AND tb_periksa.id_status_periksa=tb_status.id_status"); //digunakan untuk mengambil data dari database lalu menmapilkannya pada tabel
                    while($data = mysqli_fetch_array($query)) { //untuk memecahkan data menjadi array dan memasukkan ke dalam variabel data agar data bisa kita tampilkan dalam bentuk perulangan //aray dalam bentuk object menjadi array yang kita kenal

                    	$no_identitas = $data ['no_identitas'];
                    	$nama = $data ['nama'];
                    	$ketpoli = $data ['ket_poli'];
                    	$ketstatus = $data ['ket_status'];
                    ?>
                    <tr> <!-- untuk menampilakan data dari database ke tabel -->
                      <!-- <td><?php //echo $data ['id_user'];?></td> -->
                      <td><?php echo $no_identitas?></td>
                      <td><?php echo $nama?></td>
                      <td><?php echo $ketpoli?></td>
                      <td><?php echo $ketstatus?></td>
                      <td><a href="apoteker-riwayat.php?id_antrian=<?php echo $data ['no_identitas'];?>" style=’text-decoration:none’ onclick=\”return\”> Lihat </a> 
                  
                     
                      
                     
                     <!--  <td><a href="edit.php?id=<?php echo $data['id_user'];?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Edit</a>|<a href="hapus.php?id=<?php echo $data['id_user'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a></td> -->
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div></section>
</div>

</body>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 	

<!-- Logout Modal-->
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">×</span>
	          </button>
	        </div>
	        <div class="modal-body">Pilih "Logout" jika ingin Keluar.</div>
	        <div class="modal-footer">
	          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
	          <a class="btn btn-primary" href="../logout.php">Logout</a>
	        </div>
	      </div>
	    </div>
	  </div>

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