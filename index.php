<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom Cars</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
    #product-section1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 0 auto;
        max-width: 1200px;
    }

    #product {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <?php include('header.php'); ?>
    <main>
        <section class="accordian-sec">
            <div class="container-fluid">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Exclusive Car Sales</button>
                        <div class="accordion-content">
                            <p>Discover Our Range of New and Pre-Owned Vehicles</p>
                            <ul>
                                <li>Certified and Inspected</li>
                                <li>Competitive Pricing</li>
                                <li>Wide Selection of Vehicles</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Global Car Import/Export</button>
                        <div class="accordion-content">
                            <p>Seamless International Transactions</p>
                            <ul>
                                <li>Customs clearence and documentation</li>
                                <li>Local and international reach</li>
                                <li>Secure and Timely Delivery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="car-container">
                        <img id="moving-car" src="pics/pruple car r.webp" alt="Car">
                    </div>
                </div>

                <div class="image-slider-container">
                    <div class="image-slider">
                        <img src="pics/pic 1.jpeg" alt="Car 1" class="slider-image active">
                        <img src="pics/pic 2.jpeg" alt="Car 2" class="slider-image">
                        <img src="pics/pic 3.jpeg" alt="Car 3" class="slider-image">
                        <img src="pics/pic 4.jpeg" alt="Car 4" class="slider-image">
                        <img src="pics/pic 6.jpeg" alt="Car 6" class="slider-image">
                        <img src="pics/pic 7.jpeg" alt="Car 7" class="slider-image">
                    </div>
                </div>
            </div>
            <!--container-->
        </section>
        <section id="product-heading">
            <h2>Our Exclusive Car Collection</h2>
        </section>
        <section id="product-section1">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM products ORDER BY id DESC LIMIT 8";
                    $result = mysqli_query($conn, $query);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div id="product" onclick="window.location.href='car-details.php?id=<?php echo $row['id']; ?>'">
                            <img src="products-images/<?php echo $row['main_img']; ?>"
                                style="max-height: 200px;width: 100%;">
                            <div class="title"
                                style="color: black;padding: 10px;text-transform: capitalize;font-size: 20px; font-weight:bold;">
                                <?php echo $row['car_name'] ; ?></div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>

        </section>
        <button onclick="window.location.href='all-products.php'" class="see-more">See More</button>
    </main>

    <?php include("footer.php"); ?>

    <script src="scripts.js"></script>
</body>

</html>