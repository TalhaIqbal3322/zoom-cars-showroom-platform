<?php include 'db.php'; ?>
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
    <?php include("header.php"); ?>

    <main>
        <section id="product-heading">
            <h2>Our all Exclusive Car Collection</h2>
        </section>
        <section id="product-section1">

            <div class="row">
                <?php
                $query = "SELECT * FROM products ORDER BY id ";
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
                            <?php echo $row['car_name']; ?>
                        </div>
                    </div>
                </div>

                <?php }
                } ?>
            </div>
        </section>
    </main>

    <!-- <footer>
        <div class="footer-container">
            <div class="contact-info">
                <div class="heading contact-heading">
                    <i class="fas fa-address-card"></i>
                    <h2>Visit Us</h2>
                </div>
                <p>DUCAMAZ AUTO MARKET, SHOWROOM NO.222</p>
                <p>RAS AL KHOR, Dubai</p>
                <p>United Arab Emirates</p>
            </div>
            <div class="google-map">
                <div class="heading">
                    <i class="fas fa-map-marker-alt"></i>
                    <h2>Find Us Here</h2>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.962030835499!2d55.377141210605664!3d25.170759877635128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6707d905a8f5%3A0x1d7c719759ac9aec!2sZoom%20Cars%20FZE!5e0!3m2!1sen!2s!4v1719361215316!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2024 Zoom Cars.</p>
        </div>
    </footer> -->
    <?php include("footer.php"); ?>
    <script src="scripts.js"></script>
</body>

</html>