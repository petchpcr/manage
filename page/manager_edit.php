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
          <h2 style="text-align:center " class="mt-4 mb-5">แก้ไขข้อมูล</h2>
          <div class="row m-3">  
            <div class="col-md-5 col-sm-12 mb-2 text-center">
              <img class="img-thumbnail w-50" src="../img/people.png"  alt="Responsive image">
              <div class="row">
                <div class="col-lg-2 col-md-1 col-sm-none"></div>
                <div class="col-lg-8 col-md-10 col-sm-12 custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01"></label>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-none"></div>
              </div>
              
            </div>
            
            <div class="col-md-7 col-sm-12 mb-2">
              
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">คำนำหน้า : </p>
                <div class="col-lg-9 col-md-12">
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">ชื่อ : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">นามสกุล : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">ตำแหน่ง : </p>
                <div class="col-lg-9 col-md-12">
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">User : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="email" readonly class="form-control" id="" placeholder="name@example.com">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">Password : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="password" class="form-control" id="">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">รหัสประจำตัว : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="text" readonly class="form-control" id="" placeholder="58541204030-5">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">รหัสประชาชน : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">เบอร์โทร : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="text" class="form-control" id="">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">อีเมล : </p>
                <div class="col-lg-9 col-md-12">
                  <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
              </div>
              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label">ที่อยู่ : </p>
                <div class="col-lg-9 col-md-12">
                  <textarea class="form-control" aria-label="With textarea" rows="5"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <p class="col-lg-3 col-md-12 col-form-label"></p>
                <div class="col-lg-9 col-md-12 d-flex justify-content-center">
                  <button type="submit" class="btn btn-outline-success mx-3">Save</button>
                  <button type="reset" class="btn btn-outline-danger mx-3">Cancel</button>
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
