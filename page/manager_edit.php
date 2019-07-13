<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Chomthong Personel - Main</title>

  <link href="https://fonts.googleapis.com/css?family=Prompt:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
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
            <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
          </div>

            <div class="col-lg-6 col-md-12 text-right m-5">
              <button type="submit" class="btn btn-outline-success">Save</button>
              <button type="reset" class="btn btn-outline-danger">Cancel</button>
            </div>
          

        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
