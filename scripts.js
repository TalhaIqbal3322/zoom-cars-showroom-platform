document.addEventListener('DOMContentLoaded', function() {
    var accordions = document.querySelectorAll('.accordion-header');

    accordions.forEach(function(accordion) {
        accordion.addEventListener('click', function() {
            var content = this.nextElementSibling;
            var isOpen = content.style.display === 'block';

            // Close all accordion contents
            document.querySelectorAll('.accordion-content').forEach(function(el) {
                el.style.display = 'none';
                el.previousElementSibling.classList.remove('active');
            });

            // Open the clicked one
            if (!isOpen) {
                content.style.display = 'block';
                this.classList.add('active');
            }
        });
    });

    // Car movement functionality
    var car = document.getElementById('moving-car');
    var carImages = ['pics/pruple car r.webp', 'pics/yellow car l.webp'];
    var currentCarIndex = 0;
    var container = document.querySelector('.car-container');
    var direction = 1; // 1 for right, -1 for left
    var step = 5; // Step size in pixels

    function moveCar() {
        var carWidth = car.offsetWidth;
        var containerWidth = container.offsetWidth;
        var currentLeft = parseInt(car.style.left, 10);

        if (direction === 1 && currentLeft + carWidth >= containerWidth) {
            direction = -1;
            currentCarIndex = (currentCarIndex + 1) % carImages.length;
            car.src = carImages[currentCarIndex];
        } else if (direction === -1 && currentLeft <= 0) {
            direction = 1;
            currentCarIndex = (currentCarIndex + 1) % carImages.length;
            car.src = carImages[currentCarIndex];
        }

        car.style.left = (currentLeft + direction * step) + 'px';
    }

    // Initialize car position
    car.style.left = '0px';
    setInterval(moveCar, 50); // Adjust the interval for speed

    // Image Slider Functionality
    var currentImageIndex = 0;
    var images = document.querySelectorAll('.slider-image');
    var totalImages = images.length;

    function showNextImage() {
        images[currentImageIndex].classList.remove('active');
        currentImageIndex = (currentImageIndex + 1) % totalImages;
        images[currentImageIndex].classList.add('active');
    }

    setInterval(showNextImage, 3000); // Change image every 3 seconds
});

const products = [];

for (let i = 1; i <= 200; i++) {
    products.push({
        id: i,
        title: `TOYOTA HILUX GR-S 2024 DIESEL 2.8L V4 A/T - Model ${i}`,
        details: {
            year: '2024',
            body: 'PICKUP',
            fuelType: 'Diesel',
            transmission: 'A/T',
            drive: 'LHD',
            intColor: 'BLACK',
            extColor: 'BLACK',
            door: '4',
            cylinders: '4 CYLINDER'
        },
        description: `Description for model ${i}`
    });
}

const productSection = document.getElementById('product-section');
let productsDisplayed = 0;
const productsToShow = 16;

function displayProducts() {
    for (let i = productsDisplayed; i < productsDisplayed + productsToShow && i < products.length; i++) {
        const product = products[i];
        const productDiv = document.createElement('div');
        productDiv.className = 'product';
        productDiv.onclick = () => openProductDetails(product);

        const img = document.createElement('img');
        img.src = `cars/car${product.id}.jfif`;
        productDiv.appendChild(img);

        const title = document.createElement('div');
        title.className = 'title';
        title.textContent = product.title;
        productDiv.appendChild(title);

        productSection.appendChild(productDiv);
    }
    productsDisplayed += productsToShow;
    if (productsDisplayed >= products.length) {
        document.getElementById('see-more').style.display = 'none';
    }
}

function openProductDetails(product) {
    const moreImages = Array.from({ length: 10 }, (_, index) => `cars/car${product.id}_${index + 1}.jfif`);
    
    const newWindow = window.open('', '_blank');
    newWindow.document.write(`
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>${product.title}</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <style>
                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                    color: #333;
                    background-color: #f4f4f4;
                }

                header {
                    background-color: #fff;
                    padding: 20px;
                    text-align: center;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }

                header h1 {
                    margin: 0;
                    color: #333;
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
            </style>
        </head>
        <body>
            <header>
                <h1>${product.title}</h1>
            </header>
            <main>
                <div class="product-detail-container">
                    <div class="product-detail-left">
                        <img class="main-product-image" src="cars/car${product.id}.jfif" alt="${product.title}">
                        <div class="thumbnail-images">
                            ${moreImages.map(img => `<img src="${img}" alt="Image">`).join('')}
                        </div>
                    </div>
                    <div class="product-detail-right">
                        <div class="product-features">
                            <h2>Features</h2>
                            <div class="details-grid">
                                ${Object.keys(product.details).map(key => `
                                    <div class="detail-box">
                                        <i class="material-icons">${getIcon(key)}</i>
                                        <span>${key.charAt(0).toUpperCase() + key.slice(1)}: ${product.details[key]}</span>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                        <div class="product-overview">
                            <h2>Overview</h2>
                            <textarea class="description" readonly>${product.description}</textarea>
                        </div>
                    </div>
                </div>
            </main>
            <script>
                let currentImageIndex = 0;
                const mainImage = document.querySelector('.main-product-image');
                const thumbnails = document.querySelectorAll('.thumbnail-images img');

                function showImage(index) {
                    currentImageIndex = index;
                    mainImage.src = thumbnails[index].src;
                }

                thumbnails.forEach((thumbnail, index) => {
                    thumbnail.addEventListener('click', () => {
                        showImage(index);
                    });
                });

                showImage(0); // Show the first image by default
            </script>
        </body>
        </html>
    `);
}

function getIcon(detail) {
    switch (detail) {
        case 'year':
            return 'calendar_today';
        case 'body':
            return 'directions_car';
        case 'fuelType':
            return 'local_gas_station';
        case 'transmission':
            return 'speed';
        case 'drive':
            return 'all_inclusive';
        case 'intColor':
            return 'color_lens';
        case 'extColor':
            return 'palette';
        case 'door':
            return 'door_front';
        case 'cylinders':
            return 'view_carousel';
        default:
            return 'info';
    }
}

document.getElementById('see-more').addEventListener('click', displayProducts);

// Initially display some products
displayProducts();
