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
      <div id="content">

        <!-- Topbar -->
        <?php require_once 'navbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid mb-4">
          <div class="col text-center" style="display: block">
            <div class="btn btn-warning btn-circle btn-xl shadow-lg m-4 ">
              <i class="fas fa-building"></i>
            </div>
          </div>
          <h1 class="text-center text-truncate h3 mb-4">จัดการข้อมูลอาคาร</h1>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-warning mb-2"><i class="fas fa-plus mr-2"></i>Add</button>
          </div>
          <button type="button" class="btn btn-block btn-outline-warning shadow">
            <div class="row">
              <div class="col-md-3 col-sm-none"></div>
              <div class="col-md-3 col-sm-12">
                <img class="img_list" src="../img/building/B01.jpg">
              </div>
              <div class="col-md-6 col-sm-12 d-flex align-items-center p-0">
                <div class="row w-100 m-0">
                  <div class="col-list-text list-head">Building 01</div>
                  <div class="col-list-text list-text">ตึกอำนวยการ</div>
                </div>
              </div>
            </div>
          </button>
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
