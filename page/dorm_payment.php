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
                  <i class="far fa-money-bill-alt"></i>
                </div>
              </div>
              <h1 class="text-center h3 mb-4">จัดการข้อมูลรายจ่ายค่าหอพัก</h1>
                
                
                <!-- DataTales Example -->
              <div class="card shadow mb-2">
                <div class="card-header py-3 text-right">
                  <div class="row">
                      <div class="col-6 text-left d-flex align-items-center">
                        <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลรายจ่ายค่าหอพัก</h6>
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
                          <th>All</th>
                          <th>รหัสการชำระเงิน</th>
                          <th>รหัสหอพัก</th>
                          <th>รหัสห้องพัก</th>
                          <th>รหัสผู้พัก</th>
                          <th>ชื่อผู้พัก</th>
                          <th>ค่าห้อง</th>
                          <th>ค่าไฟฟ้า</th>
                          <th>ค่าน้ำ</th>
                          <th>อื่นๆ</th>
                          <th>รายจ่ายทั้งหมด</th>
                          <th>สถานะการชำระเงิน</th>
                          <th>วันที่ชำระเงิน</th>
                          <th>วันที่ออกใบแจ้งหนี้</th>
                          <th>แก้ไข</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                          <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                        <tr>
                        <th><center><i class="far fa-square"></i></center></th>
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
                          <th>11111111111111</th>
                          <th><center><i class="fas fa-edit"></i></center></th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> 
              
                <div class="card-body text-right">
                  <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 mb-3">
                        <button type="button" class="btn btn-outline-warning"><i class="fas fa-print mr-2"></i>พิมพ์ที่เลือก</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <button type="button" class="btn btn-outline-warning"><i class="fas fa-print mr-2"></i>พิมพ์รายงาน</button>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <button type="button" class="btn btn-outline-warning"><i class="fas fa-print mr-2"></i>ออกรายงานสถิติการชำระเงิน</button>
                    </div>
                  </div>
                </div>

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

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
