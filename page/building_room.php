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
      LoadBuilding();
      LoadRoom();
    });

    function LoadBuilding(){
      var BuildID = '<?php echo $BuildID ?>';
      var Data = {
        'BuildID': BuildID,
        'STATUS': 'LoadBuilding'
      };
      senddata(JSON.stringify(Data));
    }

    function LoadRoom(){
      var BuildID = '<?php echo $BuildID ?>';
      var Data = {
        'BuildID': BuildID,
        'STATUS': 'LoadRoom'
      };
      senddata(JSON.stringify(Data));
    }

    function CallModal(Active){
      if (Active == "Add") {
        $("#new_id").val("");
        $("#new_name").val("");
        $("#new_type").val("");
        $("#new_detail").val("");

        $("#btn_ok_add").show();
        $("#btn_ok_edit").hide();
      }
      else if (Active == "Edit") {
        $("#btn_ok_add").hide();
        $("#btn_ok_edit").show();
      }
      $("#md_room").modal("show");
    }

    function AddRoom(){
      var BuildID = '<?php echo $BuildID ?>';
      var RoomID = $("#new_id").val();
      var Name = $("#new_name").val();
      var Type = $("#new_type").val();
      var Detail = $("#new_detail").val();

      if (RoomID == "") {
        var Title = "ไม่สามรถเพิ่มข้อมูลได้";
        var Text = "โปรดตรวจสอบ รหัสห้อง !";
        var Type = "warning";
        AlertError(Title,Text,Type);
      }
      else {
        var Data = {
          'BuildID': BuildID,
          'RoomID': RoomID,
          'Name': Name,
          'Type': Type,
          'Detail': Detail,
          'STATUS': 'AddRoom'
        };
        senddata(JSON.stringify(Data));
        $("#md_room").modal("hide");
      }
    }

    function ShowEditRoom(RoomID){
      var Data = {
        'RoomID': RoomID,
        'STATUS': 'ShowEditRoom'
      };
      senddata(JSON.stringify(Data));
    }

    function EditRoom(){
      var RoomID = $("#new_id").val();
      
      if (RoomID == "") {
        var Title = "ไม่สามรถแก้ไขข้อมูลได้";
        var Text = "โปรดตรวจสอบ รหัสห้อง !";
        var Type = "warning";
        AlertError(Title,Text,Type);
      }
      else {
        var BuildID = '<?php echo $BuildID ?>';
        var RealID = $("#real_id").val();
        var RoomID = $("#new_id").val();
        var Name = $("#new_name").val();
        var Type = $("#new_type").val();
        var Detail = $("#new_detail").val();

        var Data = {
          'BuildID': BuildID,
          'RealID': RealID,
          'RoomID': RoomID,
          'Name': Name,
          'Type': Type,
          'Detail': Detail,
          'STATUS': 'EditRoom'
        };
        senddata(JSON.stringify(Data));
        $("#md_room").modal("hide");
      }
    }

    function DeleteRoom(RoomID){
      var SubID = RoomID.substring(4);
      var Title = "ยืนยันการลบข้อมูล";
      var Text = "ต้องการลบห้อง '"+SubID+"' หรือไม่ ?";
      var Type = "question";

      Swal.fire({
        title: Title,
        text: Text,
        type: Type,
        showConfirmButton: true,
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'ตกลง',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          
          var Data = {
            'RoomID': RoomID,
            'SubID': SubID,
            'STATUS': 'DeleteRoom'
          };
          senddata(JSON.stringify(Data));
        }
      })
      
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
              $("#show_build_name").append(temp['Name']);
              $("#show_build_detail").append(temp['Detail']);
              $("#show_build_date").append(temp['Date']);
              var Picture = temp['Picture'];

              if (temp['Picture'] == null || temp['Picture'] == "") {
                Picture = "Default.png";
              }

              $("#show_build_img").attr("src","../img/Building/" + Picture);
            }
            else if(temp["form"] == 'LoadRoom'){
              var count = temp['count'];
              if (count == 0) {
                Title = "ข้อมูลว่างเปล่า";
                Text = "ยังไม่มีข้อมูลห้อง !";
                Type = "info";
                AlertError(Title,Text,Type);
              }
              else {
                $("#show_room").empty();
                for (var i = 0; i < count; i++) {
                  var Str = "<tr><td>"+temp[i]['RoomID']+"</td><td>"+temp[i]['Name']+"</td><td>"+temp[i]['Type']+"</td><td>"+temp[i]['Date']+"</td>";
                      Str += "<td class='py-1 px-2'><button onclick='ShowEditRoom(\""+temp[i]['RoomID']+"\")' class='btn btn-block btn-outline-warning'><i class='fas fa-edit'></i></button></td>";
                      Str += "<td class='py-1 px-2'><button onclick='DeleteRoom(\""+temp[i]['RoomID']+"\")' class='btn btn-block btn-outline-danger'><i class='fas fa-trash-alt'></i></button></td></tr>";
                  $("#show_room").append(Str);
                }
              }
            }
            else if(temp["form"] == 'AddRoom'){
              LoadRoom();
            }
            else if(temp["form"] == 'ShowEditRoom'){
              var SubID = temp['RoomID'].substring(4);
              $("#real_id").val(temp['RoomID']);
              $("#new_id").val(SubID);
              $("#new_name").val(temp['Name']);
              $("#new_type").val(temp['Type']);
              $("#new_detail").val(temp['Detail']);

              CallModal('Edit');
            }
            else if(temp["form"] == 'EditRoom'){
              LoadRoom();              
            }
            else if(temp["form"] == 'DeleteRoom'){
              LoadRoom();              
            }
            else if(temp["form"] == 'Logout'){
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
            else if(temp["form"] == 'LoadRoom'){
              Text = "การเรียกดูข้อมูลห้องทั้งหมดเกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'AddRoom'){
              Text = "การเพิ่มห้อง '"+temp['RoomID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'ShowEditRoom'){
              var SubID = temp['RoomID'].substring(4);
              Text = "เรียกดูข้อมูลห้อง '"+SubID+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'EditRoom'){
              Text = "แก้ไขข้อมูลห้อง '"+temp['RoomID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'DeleteRoom'){
              Text = "การลบห้อง '"+temp['SubID']+"' เกิดปัญหา";
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
                      <th>วันที่เพิ่มข้อมูล</th>
                      <th width="50px">แก้ไข</th>
                      <th width="50px">ลบ</th>
                    </tr>
                  </thead>
                  <tbody id="show_room">
                    <!-- <tr>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                    <tr>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td>11111111111111</td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-warning"><i class="fas fa-edit"></i></button></td>
                      <td class="py-1 px-2"><button class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> -->
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
  <div class="fix-btn">
    <button onclick="CallModal('Add')" type="button" class="btn btn-block btn-success p-3">
      <i class="fas fa-plus mr-1"></i>เพิ่ม
    </button>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>

  <div class="modal fade bd-example-modal-lg" id="md_room" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus mr-2"></i>เพิ่มห้องใหม่</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body">
          <div class="form-group px-4">
            <input type="text" id="real_id" hidden>
            <label>รหัสห้อง</label>
            <input type="text" id="new_id" class="form-control form-control-user" maxlength="3" placeholder="กรอกรหัสห้อง">
            <small class="form-text text-muted mb-3">- ตัวเลข 3 หลัก -</small>
            
            <label>ชื่อห้อง</label>
            <input type="text" id="new_name" class="form-control form-control-user" maxlength="30" placeholder="กรอกชื่อห้อง">
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 30 ตัวอักษร -</small>

            <label>ประเภทห้อง</label>
            <input type="text" id="new_type" class="form-control form-control-user" maxlength="30" placeholder="กรอกประเภทห้อง">
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 30 ตัวอักษร -</small>

            <label>รายละเอียดห้อง</label>
            <textarea id="new_detail" class="form-control mb-3" rows="5" placeholder="กรอกรายละเอียดห้อง"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
          <button onclick="AddRoom()" id="btn_ok_add" class="btn btn-success btn-user">เพิ่ม</button>
          <button onclick="EditRoom()" id="btn_ok_edit" class="btn btn-warning btn-user">แก้ไข</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
