<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dorm</title>

  <!-- CSS Script-->
  <?php require_once 'script_css.php';?>

  <script>
    $(document).ready(function (e) {
      LoadDorm();
      $('.dropify').dropify();
    });

    function LoadDorm(){
      var Data = {
        'STATUS': 'LoadDorm'
      };
      senddata(JSON.stringify(Data));
    }

    function AddDorm(){
      var File = $("#new_img").val();
      var Name = $("#new_name").val();
      var Detail = $("#new_detail").val();
      
      if (Name == "" || Detail == "" || File == "") {
        var Title = "ไม่สามรถเพิ่มข้อมูลได้";
        var Text = "โปรดตรวจสอบ รูปภาพ, ชื่อ และ รายละเอียด ของหอพัก !";
        var Type = "warning";
        AlertError(Title,Text,Type);

      } else {
        var FileData = $("#new_img").prop("files")[0];
        var form_data = new FormData();
        var Data = JSON.stringify({
          'Name': Name,
          'Detail': Detail,
          'STATUS': 'AddDorm'
        });
        form_data.append("file", FileData);
        form_data.append("DATA", Data);
        $.ajax({
            url: '../process/dorm.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(result){
              $("#md_add_dorm").modal("hide");
              LoadDorm();
            }
        });
      }
    }

    function To_DormRoom(DormID){
      var GET = '?DormID='+DormID;
      window.location.href = 'dorm_room.php'+GET;
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
      var URL = '../process/dorm.php';
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
              $("#show_dorm").empty();
              var count = temp['count'];

              if (count == 0) {
                Title = "ข้อมูลว่างเปล่า";
                Text = "ยังไม่มีข้อมูลหอพัก !";
                Type = "info";
                AlertError(Title,Text,Type);

              } else {
                for (var i = 0; i < count; i++) {
                  var Num = i+1;
                  var Picture = temp[i]['Picture'];
                  console.log(temp[i]['Picture']);
                  if (temp[i]['Picture'] == null || temp[i]['Picture'] == "") {
                    Picture = "Default.png";
                  }
                  var Str = "<button onclick='To_DormRoom(\""+temp[i]['DormID']+"\")' type='button' id='B"+Num+"' class='btn btn-block btn-outline-warning shadow mb-3' data-DormID='"+temp[i]['DormID']+"'>";
                      Str += "<div class='row'><div class='col-md-3 col-sm-none'></div><div class='col-md-3 col-sm-12'><img class='img_list' src='../img/dorm/"+Picture+"'>";
                      Str += "</div><div class='col-md-6 col-sm-12 d-flex align-items-center p-0'><div class='row w-100 m-0'><div class='col-list-text list-head'>"+temp[i]['DormID']+"</div>";
                      Str += "<div class='col-list-text list-text'>"+temp[i]['Name']+"</div></div></div></div></button></form>";

                  $("#show_dorm").append(Str);
                }
              }
            }
            else if(temp["form"] == 'Logout'){
                window.location.href='login.html';
            }

          } else if (temp['status'] == "failed") {
              var Title = "พบข้อผิดพลาด";
              var Text = "";
              var Type = "error";
            if(temp["form"] == 'LoadDorm'){
              Title = "ข้อมูลว่างเปล่า";
              Text = "ยังไม่มีข้อมูลหอพัก !";
              Type = "info";
              AlertError(Title,Text,Type);
            }
            else if(temp["form"] == 'AddDorm'){
              Text = "การเพิ่มข้อมูล '" + temp['Name'] + "' เกิดปัญหา";
              AlertError(Title,Text,Type);
            }
            
          } else if (temp['status'] == "error") {
            Title = "พบข้อผิดพลาด";
            Text = "ไม่สามารถส่งข้อมูลได้ !";
            Type = "error";
            AlertError(Title,Text,Type);
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
      <div id="content">

        <!-- Topbar -->
        <?php require_once 'navbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid mb-4">
          <div class="col text-center" style="display: block">
            <div class="btn btn-warning btn-circle btn-xl shadow-lg m-4 ">
              <i class="fas fa-home"></i>
            </div>
          </div>
          <h1 class="text-center text-truncate h3 mb-4">จัดการข้อมูลหอพัก</h1>
          
          <div id="show_dorm"></div>

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
    <button type="button" class="btn btn-block btn-success p-3" data-toggle="modal" data-target="#md_add_dorm">
      <i class="fas fa-plus mr-1"></i>เพิ่ม
    </button>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php require_once 'md_logout.php';?>

  <div class="modal fade bd-example-modal-lg" id="md_add_dorm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-plus mr-2"></i>เพิ่มหอพักใหม่</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body">
          <div class="form-group px-4">
            <label>รูปภาพหอพัก</label>
            <div class="custom-file">
              <input type="file" id="new_img" accept="image/x-png,image/jpeg" class="dropify" />
              <small class="form-text text-muted">- สนับสนุนไฟล์ประเภท .jpg .png -</small>
            </div>

            <label class="mt-3">ชื่อหอพัก</label>
            <input type="text" id="new_name" class="form-control form-control-user" maxlength="30" placeholder="กรอกชื่อหอพัก">
            <small class="form-text text-muted mb-3">- ความยาวสูงสุด 30 ตัวอักษร -</small>
            
            <label>รายละเอียดหอพัก</label>
            <textarea id="new_detail" class="form-control mb-3" rows="5" placeholder="กรอกรายละเอียดหอพัก"></textarea>
          </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-secondary btn-user" type="button" data-dismiss="modal">ยกเลิก</button>
            <button onclick="AddDorm()" class="btn btn-success btn-user">ตกลง</button>
        </div>

      </div>
    </div>
  </div>
  
  <!-- JS Script-->
  <?php require_once 'script_js.php';?>

</body>

</html>
