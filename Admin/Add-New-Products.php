<?php include 'header.php';?>
<?php
if(isset($_POST['submit_supplier'])){
  $supplier_no=rand(0,100000);
  $supplier_name=$_POST['supplier_name'];
  $business_name=$_POST['business_name'];
  $phone_no=$_POST['phone_no'];

  $sql1 = "INSERT INTO suppliers(supplier_no,name,business_name,phone_no)
  VALUES ('$supplier_no','$supplier_name','$business_name','$phone_no')";
  if (mysqli_query($conn, $sql1)) {
   ?>
   <script type="text/javascript">
    alert("New User Add Successfully.");
    window.location.href = "Add-New-Products.php";
  </script>

  <?php
}
}
?>


<?php
if(isset($_POST['submit_category'])){
  $name=$_POST['name'];

  $sql1 = "INSERT INTO categories(name)
  VALUES ('$name')";
  if (mysqli_query($conn, $sql1)) {
   ?>
   <script type="text/javascript">
    alert("New Category Add Successfully.");
    window.location.href = "Add-New-Products.php";
  </script>
  <?php
}
}
?>


<?php
if(isset($_POST['submit_product'])){
  $product_no=rand(0,1000000);
  $car_name=$_POST['car_name'];
  $model_no=$_POST['model_no'];
  $body=$_POST['body'];
  $fuel_type=$_POST['fuel_type'];
  $transmission=$_POST['transmission'];
  $drive=$_POST['drive'];
  $int_color=$_POST['int_color'];
  $ext_color=$_POST['ext_color'];
  $door=$_POST['door'];
  $cylinders=$_POST['cylinders'];
  $full_desc=$_POST['full_desc'];
  // $main_img=$_POST['main_img'];



  $target_dir = "../products-images/";
  $rand_id = rand(0,1000000);
  $extension = pathinfo($_FILES['main_img']['name'], PATHINFO_EXTENSION);
  $path = $target_dir . $rand_id . '.' . $extension;
  move_uploaded_file($_FILES['main_img']['tmp_name'], $path);
  $image = $rand_id . '.' . $extension;

  foreach ($_FILES['other_imgs']['name'] as $key => $name) {
        // Define the target file path
  $rand_id1 = rand(0,1000000);

        $targetFilePath = $rand_id1. basename($name);
        $tmpFilePath = $_FILES['other_imgs']['tmp_name'][$key];

        // Move the file to the target directory
        if (move_uploaded_file($tmpFilePath, $target_dir.$targetFilePath)) {
            
  $sql21 = "INSERT INTO product_imgs(product_no,img)
  VALUES ('$product_no','$targetFilePath')";
  mysqli_query($conn, $sql21);

        }
    }

  $sql1 = "INSERT INTO products(product_no,car_name,model_no,body,fuel_type,transmission,drive,int_color,ext_color,door,cylinders,main_img,full_desc)
  VALUES ('$product_no','$car_name','$model_no','$body','$fuel_type','$transmission','$drive','$int_color','$ext_color','$door','$cylinders','$image','$full_desc')";
  if (mysqli_query($conn, $sql1)) {

   ?>
   <script type="text/javascript">
    alert("New Product Add Successfully.");
    window.location.href = "";
  </script>
  <?php
}
}

?>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php include 'sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add New Product</h1>
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
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Product Detail</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
               <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body">                 




                    <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Car Name*</label>
                      <input type="" class="form-control" placeholder="Enter Car Name" required name="car_name">               
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Model No*</label>
                      <input type="" class="form-control" placeholder="Enter Model No" required name="model_no">               
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Body*</label>
                      <input type="" class="form-control" placeholder="Enter Body Type" required name="body">               
                    </div>
                  </div>



                   <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Fuel Type*</label>
                      <div class="form-group">
                        <select class="form-control" name="fuel_type" required>
                          <option value="">Please Select Fuel Type</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Petrol">Petrol</option>
                          </select>
                        </div>               
                    </div>
                  </div>



                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Transmission*</label>
                      <input type="" class="form-control" placeholder="Enter Transmission" required name="transmission">               
                    </div>
                  </div>





                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Drive*</label>
                      <div class="form-group">
                        <input type="" class="form-control" placeholder="Enter Drive Type" required name="drive">
                        </div>               
                    </div>
                  </div>





                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>IntColor*</label>
                      <div class="form-group">
                        <input type="" class="form-control" placeholder="Enter IntColor" required name="int_color">
                        </div>               
                    </div>
                  </div>



                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>ExtColor*</label>
                      <div class="form-group">
                        <input type="" class="form-control" placeholder="Enter ExtColor" required name="ext_color">
                        </div>               
                    </div>
                  </div>




                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Door*</label>
                      <div class="form-group">
                        <input type="" class="form-control" placeholder="Enter Door" required name="door">
                        </div>               
                    </div>
                  </div>


                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Cylinders*</label>
                      <div class="form-group">
                        <input type="" class="form-control" placeholder="Enter Cylinders" required name="cylinders">
                        </div>               
                    </div>
                  </div>


                   <div class="col-12">
                    <div class="form-group">
                      <label for>Overview</label>
                      <div class="form-group">
                        <textarea type="" class="form-control"  required name="full_desc" placeholder="Enter detailed description" rows="7"></textarea>
                        </div>               
                    </div>
                  </div>



                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Car Main Image</label>
                      <div class="form-group">
                        <input type="file" class="form-control"  required name="main_img">
                        </div>               
                    </div>
                  </div>



                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Other Images (You can select multiple)</label>
                      <div class="form-group">
                        <input type="file" multiple class="form-control"  required name="other_imgs[]">
                        </div>               
                    </div>
                  </div>



                      </div> 


                   
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <button type="submit" name="submit_product" class="btn btn-primary" id="submit_btn">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>



    <div id="newsupplier" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h4 class="modal-title">Add New Supplier</h4>
          </div>
          <div class="modal-body">
           <form action="" method="POST">
            <div class="card-body">

              <div class="form-group">
                <label for>Supplier Name*</label>
                <input type="" required name="supplier_name" class="form-control" placeholder="Enter Full Name">
              </div>

              <div class="form-group">
                <label for="">Business Name*</label>
                <input type="" name="business_name" class="form-control" required placeholder="Enter Supplier Business Name">
              </div>

              <div class="form-group">
                <label for="">Phone No*</label>
                <input type="" name="phone_no" class="form-control" required placeholder="Enter Supplier Phone No*">
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <button type="submit" name="submit_supplier" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>





  <div id="newcategory" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h4 class="modal-title">Add New Category</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="card-body">

              <div class="form-group">
                <label for>Category Name*</label>
                <input type="" required name="name" class="form-control" placeholder="Enter Category Name">
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <button type="submit" name="submit_category" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>


  <?php include 'footer.php';?>

