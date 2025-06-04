<?php include 'header.php'; ?>

<?php



if (isset($_POST['add_cash_balance'])) {
  $amount = $_POST['amount'];

  $date = date('d-m-Y H:i:s');

  $sql2 = "UPDATE wallet SET cash_balance=$cash_balance+$amount";
  if (mysqli_query($conn, $sql2)) {

    $sql3 = "INSERT INTO transactions(amount,type,date,description)
  VALUES ('$amount','Cash','$date','Add Balance Into Cash')";
    if (mysqli_query($conn, $sql3)) {
?>
      <script type="text/javascript">
        alert("Add Successfully.");
        window.location.href = "index.php";
      </script>
    <?php
    }
  }
}



if (isset($_POST['add_bank_balance'])) {
  $amount = $_POST['amount'];

  $date = date('d-m-Y H:i:s');

  $sql2 = "UPDATE wallet SET bank_balance=$bank_balance+$amount";
  if (mysqli_query($conn, $sql2)) {

    $sql3 = "INSERT INTO transactions(amount,type,date,description)
  VALUES ('$amount','Bank','$date','Add Balance Into Bank')";
    if (mysqli_query($conn, $sql3)) {
    ?>
      <script type="text/javascript">
        alert("Add Successfully.");
        window.location.href = "index.php";
      </script>
<?php
    }
  }
}
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <?php include 'sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-bill"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Total Products</span>
                  <span class="info-box-number">
                    <?php
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($conn, $query);
                    echo mysqli_num_rows($result);
                    ?>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- /.row -->


          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <?php include 'footer.php'; ?>