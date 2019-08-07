<?php
   // $DormID = $_GET['DormID'];
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
      LoadDorm();
      LoadFloor();
      LoadRoom();
      $('.dropify').dropify();
    });

    function LoadDorm(){
      var DormID = '<?php echo $DormID ?>';
      var Data = {
        'DormID': DormID,
        'STATUS': 'LoadDorm'
      };
      senddata(JSON.stringify(Data),0);
    }

    function LoadFloor(){
      var DormID = '<?php echo $DormID ?>';
      var Data = {
        'DormID': DormID,
        'STATUS': 'LoadFloor'
      };
      senddata(JSON.stringify(Data),0);
    }

    function LoadRoom(){
      var DormID = '<?php echo $DormID ?>';
      var Data = {
        'DormID': DormID,
        'STATUS': 'LoadRoom'
      };
      senddata(JSON.stringify(Data),0);
    }

    function ShowEmpty(){
      var Str = "<tr class='odd'><td valign='top' colspan='6' class='dataTables_empty'>No data available in table</td></tr>";
      $("#show_room").append(Str);
    }

    function CallModal(Active){
      if (Active == "EditDorm") {
        $("#md_edit_dorm").modal("show");
      }
      else if (Active == "AddRoom") {
        $("#new_id").val("");
        $("#new_name").val("");
        $("#new_type").val("");
        $("#new_detail").val("");
        $("#md_view_add_edit_head").text("เพิ่มห้อง");

        $("#new_img").prop("disabled",false);
        var drEvent = $('#new_img').dropify();
        drEvent = drEvent.data('dropify');
        drEvent.resetPreview();
        drEvent.clearElement();
        drEvent.settings.defaultFile = "";
        drEvent.destroy();
        drEvent.init();
        $("#new_id").prop("disabled",false);
        $("#new_detail").prop("disabled",false);

        $("#group_edit_del").hide();
        $("#group_status").hide();
        $("#group_update").hide();
        $("#md_room_foot").show();
        $("#btn_ok_add").show();
        $("#btn_ok_edit").hide();
        $("#md_room").modal("show");
      }
      else if (Active == "ViewRoom") {
        $("#md_view_add_edit_head").text("เรียกดูห้อง");

        $("#new_img").prop("disabled",true);
        $("#new_id").prop("disabled",true);
        $("#new_detail").prop("disabled",true);
        $('#room_status').prop("disabled",true);
        $("#room_update").prop("disabled",true);

        $("#group_edit_del").show();
        $("#group_status").show();
        $("#group_update").show();
        $("#md_room_foot").hide();
        $("#md_room").modal("show");
      }
      else if (Active == "EditRoom") {
        $("#md_view_add_edit_head").text("แก้ไขห้อง");

        $("#new_img").prop("disabled",false);
        $("#new_id").prop("disabled",false);
        $("#new_detail").prop("disabled",false);
        $('#room_status').prop("disabled",false);
        $("#room_update").prop("disabled",false);

        $("#group_status").hide();
        $("#group_update").hide();
        $("#md_room_foot").show();
        $("#btn_ok_add").hide();
        $("#btn_ok_edit").show();
        $("#md_room").modal("show");
      }
    }

    function EditDorm() {
      var DormID = '<?php echo $DormID ?>';
      var Name = $("#new_dorm_name").val();
      var Detail = $("#new_dorm_detail").val();
      
      if (Name == "" || Detail == "") {
        var Title = "ไม่สามรถแก้ไขข้อมูลได้";
        var Text = "โปรดตรวจสอบ รูปภาพ, ชื่อ และ รายละเอียด ของหอพัก !";
        var Type = "warning";
        AlertError(Title,Text,Type);

      } else {
        var Data = {
          'DormID': DormID,
          'Name': Name,
          'Detail': Detail,
          'STATUS': 'EditDorm'
        };
        senddata(JSON.stringify(Data),"#new_dorm_img");
      }
    }

    function DeleteDorm(){
      var DormID = '<?php echo $DormID ?>';
      var Title = "ยืนยันการลบข้อมูล";
      var Text = "ต้องการลบหอพัก '"+DormID+"' หรือไม่ ?";
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
            'DormID': DormID,
            'STATUS': 'DeleteDorm'
          };
          senddata(JSON.stringify(Data),0);
        }
      })
    }

    function ViewRoom(RoomID){
      var Data = {
        'RoomID': RoomID,
        'STATUS': 'ViewRoom'
      };
      senddata(JSON.stringify(Data),0);
      $("#new_img").prop("disabled",true);
    }

    function AddRoom(){
      var File = $("#new_img").val();
      var DormID = '<?php echo $DormID ?>';
      var RoomID = $("#new_id").val();
      var Detail = $("#new_detail").val();
      
      if (RoomID == "" || Detail == "" || File == "") {
        var Title = "ไม่สามรถเพิ่มข้อมูลได้";
        var Text = "โปรดตรวจสอบ รูปภาพ, ชื่อ และ รายละเอียด ของห้องพัก !";
        var Type = "warning";
        AlertError(Title,Text,Type);

      } else {
        var Data = {
          'DormID': DormID,
          'RoomID': RoomID,
          'Detail': Detail,
          'STATUS': 'AddRoom'
        };
        senddata(JSON.stringify(Data),"#new_img");
      }
    }

    function ShowEditRoom(){
      $("#new_img").prop("disabled",false);
      var drEvent = $('#new_img').dropify();
      drEvent = drEvent.data('dropify');
      drEvent.resetPreview();
      drEvent.clearElement();
      drEvent.destroy();
      drEvent.init();
      $("#new_id").prop("disabled",false);
      $("#new_detail").prop("disabled",false);
      $("#room_status").prop("disabled",false);

      $("#group_update").hide();
      $("#md_room_foot").show();
      $("#btn_ok_add").hide();
      $("#btn_ok_edit").show();
    }

    function EditRoom(){
      var RoomID = $("#new_id").val();
      var Detail = $("#new_detail").val();
      var Image = $("#new_img").val();

      if (RoomID == "" || Detail == "") {
        var Title = "ไม่สามรถแก้ไขข้อมูลได้";
        var Text = "โปรดตรวจสอบ รหัสห้อง และรายละเอียด ของอาคาร !";
        var Type = "warning";
        AlertError(Title,Text,Type);
      }
      else {
        var DormID = '<?php echo $DormID ?>';
        var RealID = $("#real_id").val();
        var Status = $("#room_status").val();

        var Data = {
          'DormID': DormID,
          'RealID': RealID,
          'RoomID': RoomID,
          'Status': Status,
          'Detail': Detail,
          'STATUS': 'EditRoom'
        };
        senddata(JSON.stringify(Data),"#new_img");
      }
    }

    function DeleteRoom(){
      var RoomID = $("#real_id").val();
      var Title = "ยืนยันการลบข้อมูล";
      var Text = "ต้องการลบห้อง '"+RoomID+"' หรือไม่ ?";
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
            'STATUS': 'DeleteRoom'
          };
          senddata(JSON.stringify(Data),0);
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

    function senddata(Data,Img) {
      console.log(Data);
      console.log(Img);
      var form_data = new FormData();
      if (Img != 0) {
        var FileData = $(Img).prop("files")[0];
        form_data.append("file", FileData);
      }
      form_data.append("DATA", Data);
      var URL = '../process/dorm_room.php';
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
            if(temp["form"] == 'LoadDorm'){
              var imagenUrl = "../img/dorm/"+temp['Picture'];
              var drEvent = $('#new_dorm_img').dropify({});
              drEvent = drEvent.data('dropify');
              drEvent.resetPreview();
              drEvent.clearElement();
              drEvent.settings.defaultFile = imagenUrl;
              drEvent.destroy();
              drEvent.init();

              $("#new_dorm_id").val(temp['DormID']);
              $("#new_dorm_name").val(temp['Name']);
              $("#new_dorm_detail").val(temp['Detail']);

              $("#show_dorm_id").text("รหัสหอพัก : "+temp['DormID']);
              $("#show_dorm_name").text("ชื่อหอพัก : "+temp['Name']);
              $("#show_dorm_detail").text("รายละเอียดหอพัก : "+temp['Detail']);
              $("#show_dorm_date").text("แก้ไขล่าสุด : "+temp['Date']);
              var Picture = temp['Picture'];

              if (temp['Picture'] == null || temp['Picture'] == "") {
                Picture = "Default.png";
              }

              $("#show_dorm_img").attr("src","../img/dorm/" + Picture);
            }
            else if(temp["form"] == 'LoadFloor'){
              $("#floor").show();
              $('#all_floor').nextAll().remove()
              for (var i = 0; i < temp['count']; i++) {
                var Str = "<option value="+temp[i]['Floor']+"> ชั้น "+temp[i]['Floor']+"</option>";
                $("#floor").append(Str);
              }              
            }
            else if(temp["form"] == 'LoadRoom'){
              var count = temp['count'];
              //table = $('#dataTable').DataTable(); // เรียกตาราง
              //table.destroy(); // ทำลายคุณสมบัติ
              $("#show_room").empty();
              for (var i = 0; i < count; i++) {
                var Floor = $("#floor").val();
                var Room_floor = temp[i]['RoomID'].substring(4,5);
                var Status_class = "free";
                var Status_text = "ว่าง";

                if (temp[i]['Status'] == 1) {
                  Status_class = "lend";
                  Status_text = "จองแล้ว";
                }
                else if (temp[i]['Status'] == 2) {
                  Status_class = "live";
                  Status_text = "มีผู้พัก";
                }
                // var Str = "<tr><td>"+temp[i]['RoomID']+"</td><td>"+Status_text+"</td><td>"+temp[i]['Date']+"</td>";
                //     Str += "<td class='py-1 px-2'><button onclick='ShowEditRoom(\""+temp[i]['RoomID']+"\")' class='btn btn-block btn-outline-warning'><i class='fas fa-edit'></i></button></td>";
                //     Str += "<td class='py-1 px-2'><button onclick='DeleteRoom(\""+temp[i]['RoomID']+"\")' class='btn btn-block btn-outline-danger'><i class='fas fa-trash-alt'></i></button></td></tr>";
                
                var Str = "<div class='col-xl-2 col-lg-3 col-md-4 col-sm-6 px-2 mb-3'><button onclick='ViewRoom(\""+temp[i]['RoomID']+"\")' class='btn btn-outline-warning btn-block shadow'>";
                    Str += "<div class='col-12'><img class='img_list_room' src='../img/dorm/room/"+temp[i]['Picture']+"'></div>";
                    Str += "<div class='col-12'><div class='list-head'>"+temp[i]['RoomID']+"</div><div class='list-"+Status_class+"'>"+Status_text+"</div></div></button></div>";

                if (Floor == 0) {
                  $("#show_room").append(Str);
                }
                else {
                  if (Floor == Room_floor) {
                    $("#show_room").append(Str);
                  }
                }
              }
              //table = $('#dataTable').DataTable(); // สร้างคุณสมบัติใหม่
              
            }
            else if(temp["form"] == 'EditDorm'){
              $("#md_edit_dorm").modal("hide");
              LoadDorm();
            }
            else if(temp["form"] == 'DeleteDorm'){
              window.location.href='dorm.php';              
            }
            else if(temp["form"] == 'ViewRoom'){
              var imagenUrl = "../img/dorm/room/"+temp['Picture'];
              var drEvent = $('#new_img').dropify({});
              drEvent = drEvent.data('dropify');
              drEvent.resetPreview();
              drEvent.clearElement();
              drEvent.settings.defaultFile = imagenUrl;
              drEvent.destroy();
              drEvent.init();
              
              var SubID = temp['RoomID'].substring(4);
              $("#real_id").val(temp['RoomID']);
              $("#new_id").val(SubID);
              $("#new_detail").val(temp['Detail']);
              $('#room_status').val(temp['Status']).change();
              $("#room_update").val(temp['Date']);

              CallModal('ViewRoom');
            }
            else if(temp["form"] == 'AddRoom'){
              $("#md_room").modal("hide");
              LoadFloor();
              LoadRoom();              
            }
            else if(temp["form"] == 'EditRoom'){
              $("#md_room").modal("hide");
              LoadFloor();
              LoadRoom();              
            }
            else if(temp["form"] == 'DeleteRoom'){
              $("#md_room").modal("hide");
              LoadFloor();
              LoadRoom();              
            }
            else if(temp["form"] == 'Logout'){
              window.location.href='login.html';
            }

          } else if (temp['status'] == "failed") {
            var Title = "พบข้อผิดพลาด";
            var Text = "";
            var Type = "error";
            
            if(temp["form"] == 'LoadDorm'){
              Text = "เรียกดูหอพัก '"+temp['DormID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'LoadFloor'){
              $("#floor").hide();              
            }
            else if(temp["form"] == 'LoadRoom'){
              $("#show_room").empty();
              // ShowEmpty();
              Title = "ข้อมูลว่างเปล่า";
              Text = "ยังไม่มีข้อมูลห้อง !";
              Type = "info";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'EditDorm'){
              Text = "แก้ไขข้อมูลหอพัก '"+temp['DormID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'DeleteDorm'){
              Text = "การลบหอพัก '"+temp['DormID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'ViewRoom'){
              Text = "เรียกดูข้อมูลหอพัก '"+temp['RoomID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'AddRoom'){
              Text = "การเพิ่มห้องพัก '"+temp['RoomID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'EditRoom'){
              Text = "แก้ไขข้อมูลห้องพัก '"+temp['RoomID']+"' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'DeleteRoom'){
              var SubID = temp['RoomID'].substring(4);
              Text = "การลบห้องพัก '"+SubID+"' เกิดปัญหา";
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
            <div class="col-lg-4 col-md-12 mb-2 text-center">
              <img id="show_dorm_img" class="img-thumbnail">
            </div>
            <div class="col-lg-8 col-md-12 mb-2">
              <div class="d-flex justify-content-end w-100 position-absolute pr-3">
                <button onclick="CallModal('EditDorm')" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></button>
                <button onclick="DeleteDorm()" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </div>
              <p id="show_dorm_id"></p>
              <p id="show_dorm_name"></p>
              <p id="show_dorm_detail"></p>
              <p id="show_dorm_date"></p>
            </div>
          </div>
          
          <div class="row px-3 mb-4">
            <select onchange="LoadRoom()" class="form-control shadow mx-2" id="floor" style="text-align-last:center;">
              <option id="all_floor" value="0" selected>ทุกชั้น</option>
            </select>
          </div>

          <div id="show_room" class="row px-3">

            <!-- <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 px-2 mb-3">
              <button class="btn btn-outline-warning btn-block shadow">
                <div class="col-12">
                  <img class="img_list_room" src="../img/building/B01.jpg">
                </div>
                <div class="col-12">
                  <div class="list-head">D01-102</div>
                  <div class="list-lend">จองแล้ว</div>
                </div>
              </button>
            </div> -->

          </div>
          
          <!-- DataTales Example -->
          <!-- <div class="card shadow mb-4">
            <div class="card-header py-3 text-right">
              <div class="row">
                <div class="col-6 text-left d-flex align-items-center">
                  <h6 class="m-0 font-weight-bold text-warning"><i class="fas fa-table mr-2"></i>ตารางข้อมูลห้องพัก</h6>
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
                      <th>รหัสห้องพัก</th>
                      <th>สถานะห้อง</th>
                      <th>แก้ไขล่าสุด</th>
                      <th width="50px">แก้ไข</th>
                      <th width="50px">ลบ</th>
                    </tr>
                  </thead>

                  <tbody id="show_room"></tbody>
                  
                </table>
              </div>
            </div>
          </div> -->

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
    <button onclick="CallModal('AddRoom')" type="button" class="btn btn-block btn-success p-3">
      <i class="fas fa-plus mr-1"></i>เพิ่ม
    </button>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>
  
  <div class="modal fade bd-example-modal-lg" id="md_edit_dorm" tabindex="-1" role="dialog" aria-hidden="true">
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
            <label>รหัสหอพัก</label>
            <input type="text" id="new_dorm_id" class="form-control form-control-user mb-3" disabled>

            <label>รูปภาพหอพัก</label>
            <div class="custom-file">
              <input type="file" id="new_dorm_img" accept="image/x-png,image/jpeg" class="dropify" />
              <small class="form-text text-muted">- สนับสนุนไฟล์ประเภท .jpg .png -</small>
            </div>

            <label class="mt-3">ชื่อหอพัก</label>
            <input type="text" id="new_dorm_name" class="form-control form-control-user" maxlength="30" placeholder="กรอกชื่อหอพัก">
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 30 ตัวอักษร -</small>
            
            <label>รายละเอียดหอพัก</label>
            <textarea id="new_dorm_detail" class="form-control mb-3" rows="5" placeholder="กรอกรายละเอียดหอพัก"></textarea>
          </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
            <button onclick="EditDorm()" class="btn btn-warning btn-user">แก้ไข</button>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade bd-example-modal-lg" id="md_room" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 d-flex">
            <div class="d-flex align-items-center">
              <i class="fas fa-plus mr-2"></i>
              <label id="md_view_add_edit_head" class="m-0"></label>
            </div>
            <div id="group_edit_del" class="ml-auto">
              <button onclick="ShowEditRoom()" id="btn_edit_room" class="btn btn-warning"><i class="fas fa-edit"></i></button>
              <button onclick="DeleteRoom()" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </div>
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-group px-4">
            <input type="text" id="real_id" hidden>
            <label>รูปภาพห้องพัก</label>
            <div class="custom-file">
              <input type="file" id="new_img" accept="image/x-png,image/jpeg" class="dropify" />
              <small class="form-text text-muted">- สนับสนุนไฟล์ประเภท .jpg .png -</small>
            </div>

            <label class="mt-3">รหัสห้อง</label>
            <input type="text" id="new_id" class="form-control form-control-user" maxlength="3" placeholder="กรอกรหัสห้อง">
            <small class="form-text text-muted mb-3">- ตัวเลข 3 หลัก -</small>

            <label>รายละเอียดห้อง</label>
            <textarea id="new_detail" class="form-control mb-3" rows="5" placeholder="กรอกรายละเอียดห้อง"></textarea>

            <div id="group_status">
              <label>สถานะห้อง</label>
              <select class="form-control" id="room_status">
                <option value="0">ว่าง</option>
                <option value="1">จองแล้ว</option>
                <option value="2">มีผู้พัก</option>
              </select>
            </div>

            <div id="group_update">
              <label class="mt-3">แก้ไขล่าสุด</label>
              <input type="text" id="room_update" class="form-control form-control-user">
            </div>
          </div>
        </div>

        <div id="md_room_foot" class="modal-footer">
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
