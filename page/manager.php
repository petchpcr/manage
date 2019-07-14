<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- CSS Script-->
  <?php require_once 'script_css.php';?>

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
              <i class="fas fa-user-tie"></i>
            </div>
          </div>
          <h1 class="text-center h3 mb-4">จัดการข้อมูลผู้บริหาร</h1>
            
            <!-- DataTales Example -->
          <div class="card shadow mx-4">
            <div class="card-header py-3 text-right">
               <div class="row">
                  <div class="col-6 text-left d-flex align-items-center">
                        <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>DataTables Manager</h6>
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
                      <th>ตำแหน่ง</th>
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

  <!-- Large modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
