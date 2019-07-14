<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Prompt:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    <?php require_once 'menu.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" calss="p-4">

        <!-- Topbar -->
        <?php require_once 'navbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="col text-center" style="display: block">
            <div class="btn btn-warning btn-circle btn-xl shadow-lg m-4 ">
              <i class="fas fa-user-graduate"></i>
            </div>
          </div>
          <h1 class="text-center h3 mb-4">จัดการข้อมูลนักศึกษา</h1>
            
            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
              <div class="row">
                <div class="col-6 text-left d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>DataTables Student</h6>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-plus mr-2"></i>Add</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>รหัสประจำตัว</th>
                      <th>รหัสประชาชน</th>
                      <th>คำนำหน้า</th>
                      <th>ชื่อ</th>
                      <th>นามสกุล</th>
                      <th>ชื่อผู้ใช้</th>
                      <th>รหัสผ่าน</th>
                      <th>อีเมล</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>ที่อยู่</th>
                      <th>คณะ</th>
                      <th>สาขา</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
                    <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>


</body>

</html>
