<?php
  require 'functions.php';
  include '../session.php';
  session_start();
  $pasien = query("SELECT * FROM tb_user WHERE id_akses=2");
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'assets/header.php'; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'assets/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       <?php include 'assets/navbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Foto</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>No. HP</th>
                      <th>Alamat</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Foto</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>No. HP</th>
                      <th>Alamat</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
                    <?php
                      foreach ($pasien as $data) {
                    ?>
                    <tr>
                      <td><?php echo $data ['no_identitas'];?></td>
                      <td><?php echo $data ['nama'];?></td>
                      <td><img src="../img/<?php echo $data ['foto'];?>" width="80" height="80"></td>
                      <td><?php if($data ['jenis_kelamin']=='L'){
                          echo "Laki-laki";
                        }else{
                          echo "Perempuan";
                        } ;?></td>
                      <td><?php echo $data ['tempat_lahir'];?>, <?php echo $data ['tanggal_lahir'];?></td>
                      <td><?php echo $data ['no_hp'];?></td>
                      <td><?php echo $data ['alamat'];?></td>
                      <td><a href="edit-dpasien.php?id=<?php echo $data['id_user'];?>" class="btn btn-warning" name="edit-dpasien"><i class="fas fa-edit"></i></a> || <a href="hapus-dpasien.php?id=<?php echo $data['id_user'];?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger" name="hapus-dpasien"><i class="fas fa-trash"></i></a></td>
                    </tr><?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     <?php include 'assets/footer.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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

  <?php include 'assets/js.php'; ?>
  <!-- <script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "http://localhost/datatables_php/view.php", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "no_identitas" }, // Tampilkan nis
                { "data": "nama" },  // Tampilkan nama
                { "render": function ( data, type, row ) {  // Tampilkan jenis kelamin
                        var html = ""
                        if(row.jenis_kelamin == L){ // Jika jenis kelaminnya 1
                            html = 'Laki-laki' // Set laki-laki
              }else{ // Jika bukan 1
                            html = 'Perempuan' // Set perempuan
                        }
                        return html; // Tampilkan jenis kelaminnya
                    }
                },
                { "data": "no_hp" }, // Tampilkan telepon
                { "data": "alamat" }, // Tampilkan alamat
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = "<a href=''>EDIT</a> | "
                        html += "<a href=''>DELETE</a>"
                        return html
                    }
                },
            ],
        });
    });
    </script> -->


</body>

</html>
