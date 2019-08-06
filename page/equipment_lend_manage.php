<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>จัดการข้อมูลครุภัณฑ์</title>

  <!-- CSS Script-->
  <?php require_once 'script_css.php';?>

  <script>

    function CallModal(Active){
      if (Active == "AddEquipmentStatus") {
        $("#md_add_equipmentStatus").modal("show");
      }
    }
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
              <i class="fas fa-cube"></i>
            </div>
          </div>
          <h1 class="text-center h3 mb-4">ข้อมูลการยืมครุภัณฑ์</h1>
              
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
              <div class="row">
                <div class="col-6 text-left d-flex align-items-center">
                  <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลการยืมครุภัณฑ์</h6>
                </div>
                <div class="col-6"> 
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>รหัสผู้ยืมครุภัณฑ์</th>
                      <th>ชื่อครุภัณฑ์</th>
                      <th>หมวดหมู่</th>
                      <th>รหัสอาคาร</th>
                      <th>วันที่ยืม</th>
                      <th>วันที่คืน</th>
                      <th>การอนุมัติ</th>
                      <th>แก้ไขสถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr>
                    <tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr><tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr><tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr><tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr><tr>
                      <td>58541204030-5</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01-R304</td>
                      <td>2018-12-26 10:00:00</td>
                      <td>2018-12-26 14:00:00</td>
                      <td>อนุมัติ</td>
                      <td><button onclick="CallModal('AddEquipmentStatus')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-body text-right">
              <div class="row">
                <div class="col-lg-none col-sm-12 mb-2">
                    <button type="button" class="btn btn-warning"><i class="fas fa-print mr-2"></i>ออกรายงานสถิติข้อมูลการยืมครุภัณฑ์</button>
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
  
    <!-- Add status -->
    <div class="modal fade bd-example-modal-lg" id="md_add_equipmentStatus" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"><i class="fas fa-edit mr-2"></i>แก้ไขสถานะ</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>

          <div class="modal-body">
            <div class="form-group px-4">

              <div class="row">
                <div class="col-6 mb-2">
                  <label>รหัสอาคาร :</label>
                  <input type="text" id="new_building" class="form-control form-control-user" maxlength="3" placeholder="B01" readonly>
                </div>   
                <div class="col-6 mb-2">
                  <label>รหัสห้อง :</label>
                  <input type="text" id="new_buildRoom" class="form-control form-control-user" maxlength="3" placeholder="B01-304" readonly>
                </div>           
              </div>

              <div class="row">
                <div class="col-3">
                  <label>รหัสครุภัณฑ์ :</label>
                  <input type="text" id="new_equipment" class="form-control form-control-user" maxlength="3" placeholder="E0001" readonly>
                </div>   
                <div class="col-9">
                  <label>ชื่อครุภัณฑ์ :</label>
                  <input type="text" id="new_nameEquipment" class="form-control form-control-user" maxlength="3" placeholder="โน้ตบุ๊ค" readonly>
                </div>           
              </div>
              
              <div class="row">
                <div class="col-9">
                  <label>หมวดหมู่ :</label>
                  <input type="text" id="new_category" class="form-control form-control-user" maxlength="3" placeholder="อุปกรณ์คอมพิวเตอร์" readonly>
                </div>   
                <div class="col-3">
                  <label>จำนวน :</label>
                  <input type="text" id="new_count" class="form-control form-control-user" maxlength="3" placeholder="3" readonly>
                </div>           
              </div>

              <div class="row">
                <div class="col-3">
                  <label>รหัสผู้ยืม :</label>
                  <input type="text" id="new_building" class="form-control form-control-user" maxlength="3" placeholder="58541204030-5" readonly>
                </div>   
                <div class="col-6">
                  <label>ชื่อผู้ยืม :</label>
                  <input type="text" id="new_buildRoom" class="form-control form-control-user" maxlength="3" placeholder="ธัญญลักษณ์ สุขจันทร์" readonly>
                </div>  
                <div class="col-3">
                  <label>ตำแหน่ง :</label>
                  <input type="text" id="new_buildRoom" class="form-control form-control-user" maxlength="3" placeholder="นักศึกษา" readonly>
                </div>          
              </div>

              <div class="row">
                <div class="col-6">
                  <label>วันที่ยืม :</label>
                  <input type="text" id="new_category" class="form-control form-control-user" maxlength="3" placeholder="2018-12-26 10:00:00" readonly>
                </div>   
                <div class="col-6">
                  <label>วันที่คืน :</label>
                  <input type="text" id="new_count" class="form-control form-control-user" maxlength="3" placeholder="2018-12-26 14:00:00" readonly>
                </div>           
              </div>

              <div class="row">
                <div class="col-6">
                  <label>การอนุมัติ :</label>
                  <input type="text" id="new_category" class="form-control form-control-user" maxlength="3" placeholder="อนุมัติ" readonly>
                </div>   
                <div class="col-6">
                  <label>สถานะ :</label>
                  <select class="form-control" id="category">
                    <option value="0">รับของแล้ว</option>
                    <option value="1">คืนของแล้ว</option>
                    <option value="2">ยังไม่ได้คืนของ</option>
                  </select>
                </div>           
              </div>

            </div>
          </div>

          <div class="modal-footer">
              <button onclick="AddEquipmentStatus()" class="btn btn-warning btn-user">บันทึก</button>
          </div>

        </div>
      </div>
    </div>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
