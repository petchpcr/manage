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
              <i class="fas fa-wrench"></i>
            </div>
          </div>
          <h1 class="text-center h3 mb-4">จัดการข้อมูลค่าใช้จ่ายการแจ้งซ่อม</h1>
          
          <div class="col-12 p-0 mb-4">
            <div class="input-group">
              <input type="text" id="" class="form-control"  placeholder="ระบุคำที่ต้องการค้นหา">
              <div class="input-group-append">
                <button class="btn btn-info" type="button"><i class="fas fa-search mr-2"></i>ค้นหา</button>
              </div>
            </div>
          </div>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลค่าใช้จ่ายการแจ้งซ่อม</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                      <th>รหัสแบบประเมิณค่าแจ้งซ่อมม</th>
                      <th>รหัสการแจ้งซ่อม</th>
                      <th>รายการ</th>
                      <th>ค่าวัสดุ</th>
                      <th>ค่าแรง</th>
                      <th>ราคารวม</th>
                      <th>วันที่เพิ่มข้อมูล</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>ME0001</td>
                      <td>MT0001</td>
                      <td>ประตู</td>
                      <td>1,100</td>
                      <td>200</td>
                      <td>1,300</td>
                      <td>2018-12-26 14:00:00</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card-body text-right">
              <div class="row">
                <div class="col-lg-none col-sm-12 mb-2">
                    <button type="button" class="btn btn-outline-warning mr-4"><i class="fas fa-print mr-2"></i>ออกรายงานสถิติค่าใช้จ่ายการแจ้งซ่อม</button>
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
  <div class="fix-btn-mtn">
    <button onclick="" type="button" class="btn btn-block btn-success p-2">
      <i class="fas fa-plus mr-1"></i>ค่าใช้จ่าย
    </button>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
