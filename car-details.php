<?php 
include 'db.php';
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $query);  
$row = mysqli_fetch_array($result);
$product_no = $row['product_no'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['car_name']; ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <header>
    <div class="top-bar bg-primary text-white py-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                    <div class="top-info text-center">
                        <img src="pics/time.png" alt="Clock Icon" class="top-icon me-2">
                        <span>Mon-Sat: 9:00 AM - 7:00 PM | Dubai, UAE</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-end align-items-center">
                    <div class="top-services">
                        <a href="https://www.facebook.com/profile.php?id=61561208494131" target="_blank" class="text-white me-2">
                            <img src="pics/facebook.png" alt="Facebook" class="img-fluid">
                        </a>
                        <a href="https://www.instagram.com/zoomcarsdubai?igsh=MWNhazVxczJkaWUzNg==" target="_blank" class="text-white me-2">
                            <img src="pics/instgram.png" alt="Instagram" class="img-fluid">
                        </a>
                        <a href="https://www.tiktok.com/@zoomcarsfze?lang=en" target="_blank" class="text-white me-2">
                            <img src="pics/tiktok.png" alt="TikTok" class="img-fluid">
                        </a>
                        <a href="https://wa.me/971563078782" target="_blank" class="text-white me-2">
                            <img src="pics/whatsapp.png" alt="WhatsApp" class="img-fluid">
                        </a>
                        <a href="mailto:nadeempak222@yahoo.com" class="text-white">
                            <img src="pics/gmail.png" alt="Gmail" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="pics/logo.png" alt="Logo" class="img-fluid" style="height: 75px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" aria-current="page"><img src="pics/home.png" class="nav-icon me-1"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link"><img src="pics/about.png" class="nav-icon me-1"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="all-products.php" class="nav-link"><img src="pics/services.webp" class="nav-icon me-1"> Our Products</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="tel:+971563078782" class="btn btn-outline-light"><img src="pics/call now.png" class="nav-icon me-2">Call Now: +971563078782</a>
                </div>
            </div>
        </div>
    </nav>
</header>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-detail-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .product-detail-left {
            flex: 1;
            width: 100%;
            position: relative;
            margin-bottom: 20px;
        }

        .product-detail-right {
            flex: 1;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .main-product-image {
            width: 70%;
            max-width: 400px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .thumbnail-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 100px;
            margin: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .thumbnail-images img:hover {
            transform: scale(1.1);
        }

        .product-features h2, .product-overview h2 {
            margin-bottom: 10px;
            color: #ff5722;
            font-size: 1.5em;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .detail-box {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .detail-box i {
            margin-right: 10px;
            color: #ff5722;
        }

        .detail-box span {
            font-size: 1em;
            color: #333;
        }

        .product-overview .description {
            width: 100%;
            height: 150px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: none;
            background-color: #f9f9f9;
        }

        /* Fix the aspect ratio issue */
        .carousel-item img {
            width: 80%;
            height: auto;
            object-fit: contain;
            margin-left:10%;
        }

        /* Make carousel cover half of the screen */
        .carousel {
            max-width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <main>
        <div class="product-detail-container">
            <div class="product-detail-left">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $query1 = "SELECT * FROM product_imgs WHERE product_no='$product_no'";
                        $result1 = mysqli_query($conn, $query1);  
                        $first = true;
                        while($row1 = mysqli_fetch_array($result1)){
                            $activeClass = $first ? 'active' : '';
                            $first = false;
                            echo "
                            <div class='carousel-item $activeClass'>
                                <img src='products-images/{$row1['img']}' alt='Car Image' class='d-block '>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="product-detail-right">
                <div class="product-features">
                    <h2>Features</h2>
                    <div class="details-grid">
                        <div class="detail-box">
                            <i class="material-icons">calendar_today</i>
                            <span>Year: <?php echo $row['car_name']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">directions_car</i>
                            <span>Body: <?php echo $row['body']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">local_gas_station</i><span>Fuel Type: <?php echo $row['fuel_type']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">speed</i>
                            <span>Transmission: <?php echo $row['transmission']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">all_inclusive</i>
                            <span>Drive: <?php echo $row['drive']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">color_lens</i>
                            <span>IntColor: <?php echo $row['int_color']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">palette</i>
                            <span>ExtColor: <?php echo $row['ext_color']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">door_front</i>
                            <span>Door: <?php echo $row['door']; ?></span>
                        </div>
                        <div class="detail-box">
                            <i class="material-icons">view_carousel</i>
                            <span>Cylinders: <?php echo $row['cylinders']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="product-overview mt-3">
                    <h2>Overview</h2>
                    <textarea class="description" readonly><?php echo $row['full_desc']; ?></textarea>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
