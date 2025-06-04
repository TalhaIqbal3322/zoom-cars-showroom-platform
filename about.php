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
        margin: 10px;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: calc(25% - 20px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div class="clearfix"></div>
    <!-- <header>
        <div class="top-bar">
            <div class="logo">
                <img src="pics/logo.png" alt="Logo">
            </div>
            <div class="top-info">
                <img src="pics/time.png" alt="Clock Icon" class="top-icon">
                <span>Mon-Sat: 9:00 AM - 7:00 PM | Dubai, UAE</span>
            </div>
            <div class="top-services">
                <a href="https://www.facebook.com/profile.php?id=61561208494131" target="_blank">
                    <img src="pics/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/zoomcarsdubai?igsh=MWNhazVxczJkaWUzNg==" target="_blank">
                    <img src="pics/instgram.png" alt="Instagram">
                </a>
                <a href="https://www.tiktok.com/@zoomcarsfze?lang=en" target="_blank">
                    <img src="pics/tiktok.png" alt="TikTok">
                </a>
                <a href="https://wa.me/971563078782" target="_blank">
                    <img src="pics/whatsapp.png" alt="WhatsApp">
                </a>
                <a href="mailto:nadeempak222@yahoo.com">
                    <img src="pics/gmail.png" alt="Gmail">
                </a>
            </div>
        </div>

        <nav>
            <div class="logo-heading">
                <h1>ZOOM CARS</h1>
            </div>
            <ul>
                <li><a href="index.php"><img src="pics/home.png" class="nav-icon"> Home</a></li>
                <li><a href="about.php"><img src="pics/about.png" class="nav-icon"> About Us</a></li>
                <li><a href="all-products.php"><img src="pics/services.webp" class="nav-icon"> Our Products</a></li>
            </ul>
            <div class="call-now">
                <a href="tel:+971507153816"><img src="pics/call now.png" class="nav-icon">Call Now: +971507153816</a>
            </div>
        </nav>


    </header> -->

    <main>
        <section id="product-heading">
            <h2>About US</h2>
        </section>
        <section id="product-section1">


            <div class="container-fluid">
                <p style="color: black;">
                    Welcome to Zoom Cars, where we redefine the experience of buying, and selling cars. At Zoom
                    Cars, we understand that the journey is just as important as the destination, which is why we strive
                    to provide a seamless and enjoyable process for all your automotive needs. Whether you are looking
                    to purchase your dream car, sell your current vehicle, for your next
                    adventure, we are here to assist you with top-notch service and unparalleled expertise.


                </p>

                <p style="color: black;">Our business is built on the foundation of trust, transparency, and customer
                    satisfaction. We offer a wide range of cars to suit every preference and budget, ensuring that you
                    find the perfect match for your requirements. Our dedicated team of professionals is committed to
                    guiding you through every step of the process, from selecting the right car to completing the
                    necessary paperwork. We believe in making car transactions as hassle-free as possible, allowing you
                    to focus on what truly matters – enjoying your new ride.

                </p>

                <p style="color: black;">Thank
                    you for choosing Zoom Cars – where your satisfaction drives us forward.







                </p>
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
    </footer>
     -->
    <?php include("footer.php"); ?>

    <script src="scripts.js"></script>
</body>

</html>