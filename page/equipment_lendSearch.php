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

  <!-- <script type="text/javascript">
    $(document).ready(function(){
    
      $('input[name=set]').click(function(){
    
        $('h2').insertAfter( $('h1') );
    
      });
    
    })
  </script> -->

  <script>
    function CallAppend(Active){
      if (Active == "equipLend") {
        $("#md_equipLend").append
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
          <h1 class="text-center h3 mb-4">จัดการข้อมูลการยืมครุภัณฑ์</h1>
          
          <!-- DataTales Example 
          <div class="card shadow mb-2">
            <div class="card-header py-3 text-right">
              <div class="row">
                  <div class="col-6 text-left d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลการยืมครุภัณฑ์</h6>
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
                      <th>รหัสการยืมครุภัณฑ์</th>
                      <th>รหัสผู้ยืม</th>
                      <th>ชื่อผู้ยืม</th>
                      <th>ตำแหน่ง</th>
                      <th>รหัสครุภัณฑ์</th>
                      <th>ชื่อครุภัณฑ์</th>
                      <th>จำนวนครุภัณฑ์ที่ยืม</th>
                      <th>หมวดหมู่</th>
                      <th>รหัสอาคาร</th>
                      <th>รหัสห้อง</th>
                      <th>วันที่ยืม</th>
                      <th>กำหนดการคืน</th>
                      <th>สถานะ</th>
                      <th>วันที่เพิ่มข้อมูล</th>
                      <th>แก้ไข</th>
                      <th>ลบ</th>
                    </tr>
                  </thead>
                  
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
                      <th>11111111111111</th>
                      <th>11111111111111</th>
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-body text-right">
              <div class="row">
                <div class="col-lg-none col-sm-12 mb-2">
                    <button type="button" class="btn btn-outline-warning mr-4"><i class="fas fa-print mr-2"></i>ออกรายงานสถิติข้อมูลการยืมครุภัณฑ์</button>
                </div>
              </div>
            </div>
          </div>-->

          <!-- Search -->
          <div class="row">
            <div class="col-6 mb-2">
              <input type="search" id="new_building" class="form-control form-control-md" maxlength="3" placeholder="รหัสอาคาร">
            </div>   
            <div class="col-6 mb-2">
              <input type="search" id="new_buildRoom" class="form-control form-control-md" maxlength="6" placeholder="รหัสห้อง">
            </div>           
          </div>
          <div class="row">
            <div class="col-6 mb-2">
              <select class="form-control" id="category">
                <option value="0">อุปกรณ์คอมพิวเตอร์</option>
                <option value="1">เครื่องใช้ไฟฟ้า</option>
                <option value="2">เครื่องเขียน</option>
              </select>
            </div>   
            <div class="col-6 mb-2">
              <input type="search" id="new_nameEquipment" class="form-control form-control-md" maxlength="6" placeholder="ชื่อครุภัณฑ์">
            </div>           
          </div>
          <div class="row">
            <div class="col-12 mb-2">
              <button onclick="equipLend()" class="btn btn-warning btn-block btn-md">ค้นหา</button>
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
