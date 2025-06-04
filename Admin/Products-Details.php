<?php include 'header.php';

if (isset($_POST['del_btn'])) {
      
    $product_no=$_POST['product_no'];

    $del="DELETE FROM products WHERE product_no='$product_no'";
    if (mysqli_query($conn, $del)) {

    $del1="DELETE FROM product_imgs WHERE product_no='$product_no'";
    if (mysqli_query($conn, $del1)) {

    ?>
   <script type="text/javascript">
    alert("Deleted Successfully.");
    window.location.href = "";
  </script>
  <?php

    }

    }
}

?>

<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
   <?php include 'sidebar.php';?>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Product Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" data-order='[[ 0, "desc" ]]'>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Car Name</th>
                      <th>Model No</th>
                      <th>Body</th>
                      <th>Fuel Type</th>
                      <th>Transmission</th>
                      <th>Drive</th>
                      <th>Int Color</th>
                      <th>Ext Color</th>
                      <th>Door</th>
                      <th>Cylinders</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT * FROM products ORDER BY id DESC";
                    $result = mysqli_query($conn, $query);  
                    if ($result->num_rows > 0) {
                      while($row = mysqli_fetch_array($result))  
                        { 
                      ?>
                      <tr>
                     <td><?php echo $row['id'];?></td>
                     <td><?php echo $row['car_name'];?></td>
                     <td><?php echo $row['model_no'];?></td>
                     <td><?php echo $row['body'];?></td>
                     <td><?php echo $row['fuel_type'];?></td>
                     <td><?php echo $row['transmission'];?></td>
                     <td><?php echo $row['drive'];?></td>
                     <td><?php echo $row['int_color'];?></td>
                     <td><?php echo $row['ext_color'];?></td>
                     <td><?php echo $row['door'];?></td>
                     <td><?php echo $row['cylinders'];?></td>
                     <td><a href="Edit-Products.php?product_no=<?php echo $row['product_no'];?>"><button class="btn btn-warning btn-sm">Update</button></a><br><br>

                      <a href="Image-Products.php?product_no=<?php echo $row['product_no'];?>"><button class="btn btn-primary btn-sm">Images</button></a><br><br>

                      <form action="" method="POST">
                        <input type="hidden" name="product_no" value="<?php echo $row['product_no'];?>">
                        <button name="del_btn" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                     </td>
                     

                   </tr>
                   <?php 
                 }
               }
               ?>
             </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
 </section>
 <!-- /.content -->
</div>
<?php include 'footer.php';?>
