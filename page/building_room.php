<?php
    $BuildID = $_GET['BuildID'];
?>
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
      var BuildID = '<?php echo $BuildID ?>';
      LoadBuilding(BuildID);
    });

    function LoadBuilding(BuildID){
      var Data = {
        'BuildID': BuildID,
        'STATUS': 'LoadBuilding'
      };
      senddata(JSON.stringify(Data));
    }

    function AlertError(Title,Text,Type){
      Swal.fire({
        title: Title,
        text: Text,
        type: Type,
        showConfirmButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'ตกลง'
      })
    }

    function senddata(Data) {
      var form_data = new FormData();
      form_data.append("DATA", Data);
      var URL = '../process/building_room.php';
      $.ajax({
        url: URL,
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (result) {
          try {
            var temp = $.parseJSON(result);
          } catch (e) {
            console.log('Error#542-decode error');
          }

          if (temp["status"] == 'success') {
            if(temp["form"] == 'LoadBuilding'){
              $("#show_build_id").append(temp['BuildingID']);
              $("#show_build_name").append(temp['BuildingName']);
              $("#show_build_detail").append(temp['Detail']);
              $("#show_build_date").append(temp['Date']);
              $("#show_build_img").attr("src","../img/Building/"+temp['Picture'])
            }
            else if(temp["form"] == 'logout'){
                window.location.href='login.html';
            }

          } else if (temp['status'] == "failed") {
              var Title = "พบข้อผิดพลาด";
              var Text = "";
              var Type = "error";
            if(temp["form"] == 'LoadBuilding'){
              Text = "เรียกดูอาคาร '"+temp['BuildID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            
          } else if (temp['status'] == "error") {
              alert("$_POST is NULL");
          }
        }
      });
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
          <div class="row m-3">
            <div class="col-lg-4 col-md-12 mb-2">
              <img id="show_build_img" class="img-thumbnail " style="width: auto" alt="Responsive image">
            </div>
            <div class="col-lg-8 col-md-12 mb-2">
              <p id="show_build_id">รหัสอาคาร : </p>
              <p id="show_build_name">ชื่ออาคาร : </p>
              <p id="show_build_detail">รายละเอียดอาคาร : </p>
              <p id="show_build_date">วันที่เพิ่มข้อมูล : </p>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
              <div class="row">
                <div class="col-6 text-left d-flex align-items-center">
                  <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลห้อง</h6>
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
                      <th>รหัสห้อง</th>
                      <th>ชื่อห้อง</th>
                      <th>ประเภทห้อง</th>
                      <th>รายละเอียดห้อง</th>
                      <th>วันที่เพิ่มข้อมูล</th>
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
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
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
                      <th><center><i class="fas fa-edit"></i></center></th>
                      <th><center><i class="fas fa-trash-alt"></i></center></th>
                    </tr>
                    <tr>
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

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
