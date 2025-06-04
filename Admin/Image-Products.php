<?php include 'header.php';?>
<?php 
$product_no=$_GET['product_no'];
$query = "SELECT * FROM products WHERE product_no='$product_no'";
$result = mysqli_query($conn, $query);  
$row11 = mysqli_fetch_array($result);

?>
    <?php

  if (isset($_POST['delbtn'])) {
      $del_id=$_POST['del_id'];
      $del="DELETE FROM product_imgs WHERE id='$del_id' AND product_no='$product_no'";
      if (mysqli_query($conn, $del)) {
       ?>
       <script type="text/javascript">
        alert("Product deleted Successfully.");
        window.location.href = "";
      </script>

      <?php

  }
  }

  if (isset($_POST['submit_other_img'])) {
     
  $target_dir = "../products-images/";
  $rand_id = rand(0,1000000);
  $extension = pathinfo($_FILES['other_img']['name'], PATHINFO_EXTENSION);
  $path = $target_dir . $rand_id . '.' . $extension;
  move_uploaded_file($_FILES['other_img']['tmp_name'], $path);
  $image = $rand_id . '.' . $extension;

    $sql21 = "INSERT INTO product_imgs(product_no,img)
  VALUES ('$product_no','$image')";
    if (mysqli_query($conn, $sql21)) {
       ?>
       <script type="text/javascript">
        alert("New Image added Successfully.");
        window.location.href = "";
      </script>

      <?php

  }

  }







   if (isset($_POST['submit_main_img'])) {
     
  $target_dir = "../products-images/";
  $rand_id = rand(0,1000000);
  $extension = pathinfo($_FILES['main_img']['name'], PATHINFO_EXTENSION);
  $path = $target_dir . $rand_id . '.' . $extension;
  move_uploaded_file($_FILES['main_img']['tmp_name'], $path);
  $image = $rand_id . '.' . $extension;

    $sql21 = "UPDATE products SET main_img='$image' WHERE product_no='$product_no'";
    if (mysqli_query($conn, $sql21)) {
       ?>
       <script type="text/javascript">
        alert("Image Updated Successfully.");
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
              <h1>Update Product Images</h1>
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
                  <h3 class="card-title">Product Main Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
               <form action="" method="POST" enctype="multipart/form-data">
                  <div class="card-body">                 




                    <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Car Main Image</label>
                      <img src="../products-images/<?php echo $row11['main_img'];?>" style="width: 100%;height: 300px;">               
                    </div>
                </div>

               <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="form-group">
                      <label for>Update Car Main Image</label>
                      <div class="form-group">
                        <input type="file" class="form-control"  required name="main_img">
                        </div>               
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-4" style="margin-top: 20px;">
                  <button type="submit" name="submit_main_img" class="btn btn-primary" id="submit_btn">Submit</button>
                </div>

                      </div> 

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





















            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Other Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                  <div class="card-body">                 

                    <div class="row">

              <?php
$query = "SELECT * FROM product_imgs WHERE product_no='$product_no'";
$result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="border: 1px solid;padding: 10px;">
                    <div class="form-group">
                      <img src="../products-images/<?php echo $row['img'];?>" style="width: 100%;height: 200px;">               
                    </div>
                    <form onsubmit="return confirm('Are you sure you want to delete this image?')" action="" method="POST">
                    <input type="hidden" value="<?php echo $row['id'];?>" name="del_id">
                    <div style="text-align: center;">
                      <button class="btn btn-dark" name="delbtn">Delete</button>
                    </div>
                    </form>
                </div>
              <?php } ?>

              <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                 <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for>Add New Car Image</label>
                      <div class="form-group">
                        <input type="file" class="form-control"  required name="other_img">
                        </div>  
                        <div style="text-align:center;">
                        <button type="submit" name="submit_other_img" class="btn btn-primary">Submit</button>    
                        </div>         
                    </div>
                  </form>
                </div>


                      </div> 

                  </div>
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



  <?php include 'footer.php';?>

