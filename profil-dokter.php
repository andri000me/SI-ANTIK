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
					<a class="navbar-brand logo_h" href="profil-dokter.php">
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
									<li class="nav-item active">
										<a class="nav-link" href="profil-dokter.php">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="antrian.php">Antrian</a>
									</li>
									<li class="nav-item">
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
		<div class="container">
			<br>
			<h3 style="color:rgb(0,0,255)">Hai Dokter, Selamat datang di website kami</h3>
			<br>
			<div class="row">
				<div class="col-lg-8">
					<div class="table-responsive">
		               	<table  id="dataTable" width="100%" cellspacing="0">
		                  	<?php
		                    $query = mysqli_query($koneksi, "SELECT * FROM tb_user where id_akses=3");
		                    while($data = mysqli_fetch_array($query)) {
		                 	?>

			                <tr>
			                	<td rowspan="5"><center><img src="img/<?php echo $data ['foto'];?>" width="150" height="225"></center></td>
			                    <td>ID</td>
			                    <td>: <?php echo $data ['no_identitas'];?></td>
			                </tr>
			                <tr>
			                    <td>Nama</td>
			                    <td>: <?php echo $data ['nama'];?></td>
			                </tr>
			                <tr>
			                    <td>Jenis Kelamin</td>
			                    <td>: <?php echo $data ['jenis_kelamin'];?></td>
			                </tr>
			                <tr>
			                    <td>Tempat, Tanggal Lahir</td>
			                    <td>: <?php echo $data ['tempat_lahir'];?>, <?php echo $data ['tanggal_lahir'];?></td>
			                </tr>
			                <tr>
			                    <td>No Handphone</td>
			                    <td>: <?php echo $data ['no_hp'];?></td>
			                </tr>
			                <tr>
			                	<td><center></center></td>
			                    <td>Alamat</td>
			                    <td>: <?php echo $data ['alamat'];?></td>			                    
			                </tr>
			                <tr>
			                	<td><center><a href="" class="btn btn-warning"><i class="fas fa-edit"></i>Edit Profil</a></center></td>
			                    <td>Pekerjaan</td>
			                    <td>: <?php echo $data ['pekerjaan'];?></td>
			                </tr>
		                  <?php } ?>
                </table>
              </div>
	</div>
</div>
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

	<!--================ start footer Area =================-->
	<footer class="footer-area">
		<center>Copyright @2019 by <a href="https://www.instagram.com/iwarsofficial/?hl=id">iWARS</a></center>
	</footer>
	<!--================ End footer Area =================-->



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