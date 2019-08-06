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

  <script>
    $(document).ready(function (e) {
      $('.dropify').dropify();
    });
  </script>
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
          <h1 class="text-center h3 mb-4">จัดการข้อมูลแจ้งซ่อม</h1>
          
          <!-- <div class="col-12 p-0 mb-4">
            <div class="input-group">
              <input type="text" id="" class="form-control"  placeholder="ระบุคำที่ต้องการค้นหา">
              <div class="input-group-append">
                <button class="btn btn-info" type="button"><i class="fas fa-search mr-2"></i>ค้นหา</button>
              </div>
            </div>
          </div> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-2">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลแจ้งซ่อม</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>รายการ</th>
                      <th>สถานะ</th>
                      <th>ชื่อผู้แจ้ง</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                    <tr>
                      <td>ประตู</td>
                      <td>รออนุมัติ</td>
                      <td>นางสาวธัญญลักษณ์ สุขจันทร์</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-auto">ข้อมูลการแจ้งซ่อม</div>
            <div class="col"><hr></div>
          </div>

          <div class="card card-body mb-4">
            <div class="row">
              <div class="col-lg-5 col-md-12 mb-2 text-center">
                <img id="show_dorm_img" class="img-thumbnail" src="../img/Default.png">
              </div>
              <div class="col-lg-7 col-md-12 mb-2">
                <p id="show_dorm_id"><b>รายการ :</b> ประตู</p>
                <p id="show_dorm_name"><b>รายละเอียด :</b> ประตูห้องน้ำชั้น 2 กระจกแตก</p>
                <p id="show_dorm_detail"><b>สถานที่ :</b> ตึกอำนวยการ</p>
                <p id="show_dorm_date"><b>ผู้แจ้ง :</b> นางสาวธัญญลักษณ์ สุขจันทร์</p>
                <p id="show_dorm_date"><b>วันที่ :</b> 2018-12-26 14:00:00</p>
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
    <button onclick="" type="button" class="btn btn-block btn-success p-2" data-toggle="modal" data-target="#md_mtn">
      <i class="fas fa-plus mr-1"></i>แจ้งซ่อม
    </button>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>

  <div class="modal fade bd-example-modal-lg" id="md_mtn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-edit mr-2"></i>เพิ่มการแจ้งซ่อม</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body">
          <div class="form-group px-4">
            <label>รูปภาพ</label>
            <div class="custom-file">
              <input type="file" id="new_dorm_img" accept="image/x-png,image/jpeg" class="dropify" />
              <small class="form-text text-muted">- สนับสนุนไฟล์ประเภท .jpg .png -</small>
            </div>

            <label class="mt-3">รายการ</label>
            <input type="text" id="new_dorm_name" class="form-control form-control-user" maxlength="50" placeholder="กรอกรายการ">
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 50 ตัวอักษร -</small>
            
            <label class="mt-3">ชื่อผู้แจ้ง</label>
            <input type="text" id="" class="form-control form-control-user" maxlength="100" placeholder="กรอกชื่อผู้แจ้ง" value="นางสาวธัญญลักษณ์ สุขจันทร์" disabled>
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 100 ตัวอักษร -</small>

            <label class="mt-3">รายละเอียดความเสียหาย</label>
            <textarea id="new_dorm_detail" class="form-control mb-3" rows="5" placeholder="กรอกรายละเอียดความเสียหาย"></textarea>

            <label class="mt-3">สถานที่</label>
            <input type="text" id="new_dorm_name" class="form-control form-control-user" maxlength="50" placeholder="กรอกสถานที่">
          </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
            <button onclick="" class="btn btn-success btn-user">ตกลง</button>
        </div>

      </div>
    </div>
  </div>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
