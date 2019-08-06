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
      if (Active == "EditEquipment") {
        $("#md_edit_equipment").modal("show");
      }
      else if (Active == "AddEquipment") {
        $("#new_id").val("");
        $("#new_name").val("");
        $("#new_count").val("");
        $("#new_category").val("");
        $("#md_view_add_edit_head").text("เพิ่มครุภัณฑ์");

        $("#group_edit_del").hide();
        $("#group_status").hide();
        $("#group_update").hide();
        $("#md_equipment_foot").show();
        $("#btn_ok_add").show();
        $("#btn_ok_edit").hide();
        $("#md_add_equipment").modal("show");
      }
      else if (Active == "ViewEquipment") {
        $("#md_view_add_edit_head").text("เรียกครุภัณฑ์");

        $("#new_img").prop("disabled",true);
        $("#new_id").prop("disabled",true);
        $("#new_detail").prop("disabled",true);
        $('#equipment_status').prop("disabled",true);
        $("#equipment_update").prop("disabled",true);

        $("#group_edit_del").show();
        $("#group_status").show();
        $("#group_update").show();
        $("#md_equipment_foot").hide();
        $("#md_equipment").modal("show");
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
          <h1 class="text-center h3 mb-4">จัดการข้อมูลครุภัณฑ์</h1>
              
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
              <div class="row">
                <div class="col-6 text-left d-flex align-items-center">
                  <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลครุภัณฑ์</h6>
                </div>
                <div class="col-6">
                  <!-- <button type="button" class="btn btn-outline-warning"><i class="fas fa-plus mr-2"></i>Add</button> -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>รหัสครุภัณฑ์</th>
                      <th>ชื่อครุภัณฑ์</th>
                      <th>จำนวน</th>
                      <th>หมวดหมู่</th>
                      <th>รหัสอาคาร</th>
                      <th>รหัสห้อง</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>E0001</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>E0001</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>E0001</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>E0001</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>E0001</td>
                      <td>โน้ตบุ๊ค</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>E0002</td>
                      <td>สาย USB</td>
                      <td>25</td>
                      <td>อุปกรณ์คอมพิวเตอร์</td>
                      <td>B01</td>
                      <td>B01-R304</td>
                      <td><button onclick="CallModal('EditEquipment')" class="btn btn-outline-warning btn-block mr-2"><i class="fas fa-edit"></i></button></td>
                      <td><button onclick="" class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-body text-right">
                <div class="row">
                  <div class="col-md-9 col-sm-12 mt-2">
                      
                  </div>
                  <div class="col-md-3 col-sm-12 mt-2">
                      <button onclick="CallModal('AddEquipment')" class="btn btn-warning"><i class="fas fa-plus"></i> เพิ่มข้อมูล</button>
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
  
    <!-- Add -->
    <div class="modal fade bd-example-modal-lg" id="md_add_equipment" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title w-100 d-flex">
              <div class="d-flex align-items-center">
                <i class="fas fa-plus mr-2"></i>
                <label id="md_view_add_edit_head" class="m-0"></label>
              </div>
            </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group px-4">
              <input type="text" id="real_id" hidden>

              <label class="mt-3">ชื่อครุภัณฑ์</label>
              <input type="text" id="new_name" class="form-control form-control-user" maxlength="3" placeholder="กรอกชื่อครุภัณฑ์">
              
              <div id="group_status">
                <label>หมวดหมู่</label>
                <select class="form-control" id="category">
                  <option value="0">อุปกรณ์คอมพิวเตอร์</option>
                  <option value="1">เครื่องใช้ไฟฟ้า</option>
                  <option value="2">เครื่องเขียน</option>
                </select>
              </div>

              <label class="mt-3">จำนวน</label>
              <input type="text" id="new_count" class="form-control form-control-user" maxlength="3" placeholder="กรอกจำนวนครุภัณฑ์">

              <label class="mt-3">รหัสอาคาร</label>
              <input type="text" id="new_building" class="form-control form-control-user" maxlength="3" placeholder="กรอกรหัสอาคาร">

              <label class="mt-3">รหัสห้อง</label>
              <input type="text" id="new_buildingroom" class="form-control form-control-user" maxlength="3" placeholder="กรอกรหัสห้อง">

              <div id="group_status">
                <label>สถานะห้อง</label>
                <select class="form-control" id="equipment_status">
                  <option value="0">ว่าง</option>
                  <option value="1">ไม่ว่าง</option>
                </select>
              </div>

              <div id="group_update">
                <label class="mt-3">แก้ไขล่าสุด</label>
                <input type="text" id="equipment_update" class="form-control form-control-user">
              </div>
            </div>
          </div>

          <div id="md_equipment_foot" class="modal-footer">
            <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
            <button onclick="AddEquipment()" id="btn_ok_add" class="btn btn-success btn-user">เพิ่ม</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit -->
    <div class="modal fade bd-example-modal-lg" id="md_edit_equipment" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"><i class="fas fa-edit mr-2"></i>แก้ไขหอพัก</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>

          <div class="modal-body">
            <div class="form-group px-4">
            <label class="mt-3">ชื่อครุภัณฑ์</label>
              <input type="text" id="new_name" class="form-control form-control-user" maxlength="3" placeholder="โน้ตบุ๊ค">
              
              <div id="group_status">
                <label>หมวดหมู่</label>
                <select class="form-control" id="category">
                  <option value="0">อุปกรณ์คอมพิวเตอร์</option>
                  <option value="1">เครื่องใช้ไฟฟ้า</option>
                  <option value="2">เครื่องเขียน</option>
                </select>
              </div>

              <label class="mt-3">จำนวน</label>
              <input type="text" id="new_count" class="form-control form-control-user" maxlength="3" placeholder="25">

              <label class="mt-3">รหัสอาคาร</label>
              <input type="text" id="new_building" class="form-control form-control-user" maxlength="3" placeholder="B01">

              <label class="mt-3">รหัสห้อง</label>
              <input type="text" id="new_buildingroom" class="form-control form-control-user" maxlength="3" placeholder="B01-R304">

              <div id="group_status">
                <label>สถานะห้อง</label>
                <select class="form-control" id="equipment_status">
                  <option value="0">ว่าง</option>
                  <option value="1">ไม่ว่าง</option>
                </select>
              </div>

            </div>
          </div>

          <div class="modal-footer">
              <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
              <button onclick="EditEquipment()" class="btn btn-warning btn-user">แก้ไข</button>
          </div>

        </div>
      </div>
    </div>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
