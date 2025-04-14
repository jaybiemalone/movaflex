<?php
include "config.php"; // Database connection

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movaflex</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="/asset/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .home-banner {
            margin: 0;
            overflow: hidden;
        }

        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slider {
            display: flex;
            width: calc(100vw * 5);
            /* Adjust based on image count */
            animation: scroll-left 16s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
        }

        .slider img {
            width: 100vw;
            height: 500px;
            object-fit: cover;
        }

        @keyframes scroll-left {

            0%,
            16.6% {
                transform: translateX(0);
            }

            18.6%,
            35.2% {
                transform: translateX(-100vw);
            }

            37.2%,
            53.8% {
                transform: translateX(-200vw);
            }

            55.8%,
            72.4% {
                transform: translateX(-300vw);
            }

            74.4%,
            91% {
                transform: translateX(-400vw);
            }

            93%,
            100% {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>

    <div class="logo">
        <img src="asset/MOVAFLEX2.png" alt="MOVAFLEX Image" width="200">
    </div>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="product.php">Product ▼</a>
                <ul class="dropdown">
                    <?php foreach ($tables as $table): ?>
                        <li><a
                                href="product.php?table=<?= htmlspecialchars($table); ?>"><?= ucfirst(htmlspecialchars($table)); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>

    <main>
        <div class="home-container">
            <section id="home-banner" class="content">
                <div class="slider-container">
                    <div class="slider">
                        <img src="asset/alpha-website-featured-banner.jpg" alt="Image 1" />
                        <img src="asset/Avail go HAD banner.jpg" alt="Image 2" />
                        <img src="asset/top banner.png" alt="Image 3" />
                        <img src="asset/trus insitu image banner.jpg" alt="Image 4" />
                        <img src="asset/Product-main-feature-banner.jpg" alt="Image 5" />
                    </div>
                </div>
                <div class="home-content content">
                    <div class="box">
                        <h1>Movaflex</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis possimus est quasi officia
                            placeat minima optio commodi, ad vitae laboriosam dignissimos! Rem, tenetur fuga
                            consequuntur ullam quas facilis possimus voluptates.</p>
                        <button>Product</button>
                    </div>
                </div>
            </section>
            <section id="overview-section" class="content">
                <h1 style="display: block; height: auto;">Featured Products</h1>
                <div class="carousel-container">
                    <div class="carousel-wrapper">
                        <div class="carousel-slide">
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/slash.jpg" alt=""></a>
                                <h1>Slash</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/perch.jpg" alt=""></a>
                                <h1>Perch</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/hockey.jpg" alt=""></a>
                                <h1>Hockey</h1>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/folia.png" alt=""></a>
                                <h1>Folia</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/born.jpg" alt=""></a>
                                <h1>Born</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/birds.jpg" alt=""></a>
                                <h1>Birds</h1>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/availgo.jpg" alt=""></a>
                                <h1>Avail Go</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/slash.jpg" alt=""></a>
                                <h1>Slash</h1>
                            </div>
                            <div class="card">
                                <a href="#"><img src="asset/feature-product-home-page/entry.jpg" alt=""></a>
                                <h1>Entry</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-buttons">
                    <button id="prev" disabled>Previous</button>
                    <button id="next">Next</button>
                </div>
            </section>
            <section id="collection" class="content">
                <h1>Collection</h1>
                <div class="collection">
                    <div class="box">
                        <div class="pict">
                        </div>
                        <div class="more-details">
                            <h1>Filling cabinets</h1>
                            <a href="">Show more <i class="fa-solid fa-greater-than"></i></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="pict">
                        </div>
                        <div class="more-details">
                            <h1>Lockers and Storage</h1>
                            <a href="">Show more <i class="fa-solid fa-greater-than"></i></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="pict">
                        </div>
                        <div class="more-details">
                            <h1>Safe and Vaults</h1>
                            <a href="">Show more <i class="fa-solid fa-greater-than"></i></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="pict">
                        </div>
                        <div class="more-details">
                            <h1>Racks and Shelving</h1>
                            <a href="">Show more <i class="fa-solid fa-greater-than"></i></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="pict">
                        </div>
                        <div class="more-details">
                            <h1>Desks and Chairs</h1>
                            <a href="">Show more <i class="fa-solid fa-greater-than"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="why-choose-us" class="content">
                <h1>Why Choose Movaflex</h1>
                <div class="why-choose-us">
                    <div class="shoose-card">

                        <div class="card">
                            <i class="fa-solid fa-flag"></i>
                            <h1>PHILIPPINE MADE</h1>
                            <p>Support local by buying our products,
                                proudly locally made since 1976.</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-layer-group"></i>
                            <h1>HIGH QUALITY MATERIALS</h1>
                            <p>All our materials, from steel sheets to
                                hardware, and selected with care.</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-shield"></i>
                            <h1>EXTRA DURABLE</h1>
                            <p>Products are fully welded and reinforced and are built for durability and strength.</p>
                        </div>

                    </div>
                    <a href="#">Learn more</a>
                    <div class="shoose-card">

                        <div class="card">
                            <i class="fa-solid fa-trophy"></i>
                            <h1>1 YEAR WARRANTY</h1>
                            <p>Worry free with our one year warranty on
                                mechanical defects.</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-handshake"></i>
                            <h1>LIFETIME AFTER SALES SERVICE</h1>
                            <p>Want to give an old item a fresh coat of
                                paint? Need the lock replaced? All our
                                products can be serviced for a minimal fee.</p>
                        </div>
                        <div class="card">
                            <i class="fa-solid fa-boxes-stacked"></i>
                            <h1>FREE DELIVERY</h1>
                            <p>Get our products delivered to your doorstep
                                for free if you reside within Metro Manila.</p>
                        </div>

                    </div>
                </div>
            </section>
            <section id="inquire-now" class="content">
                <h1>INQUIRE NOW</h1>
                <div class="inquire-now">
                    <div>
                        <h1>Looking for a Supplier of Reliable and Efficient Machineries and Equipment?</h1>
                        <p>We have a wide array of products, services and solutions that’s custom-fit all for your
                            manufacturing and logistics needs.</p>
                        <button>INQUIRE NOW</button>
                    </div>
                </div>
            </section>
            <footer>
                <ul>
                    <h1>Our Product</h1>
                    <li><a href="#">Office Chair</a></li>
                    <li><a href="#">Table</a></li>
                    <li><a href="#">Office/Table</a></li>
                </ul>
                <ul>
                    <h1>Menu Link</h1>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <ul>
                    <h1>Contact Us</h1>
                    <li><a href="#"><i class="fa-solid fa-location-dot"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> About</a></li>
                    <li><a href="#"><i class="fa-solid fa-box"></i> About</a></li>
                </ul>
            </footer>
        </div>
    </main>

    <script src="function/script.js"></script>


    <script>
        const carouselWrapper = document.querySelector(".carousel-wrapper");
        const prevBtn = document.getElementById("prev");
        const nextBtn = document.getElementById("next");
        let index = 0;
        const totalSlides = document.querySelectorAll(".carousel-slide").length;

        function updateView() {
            const slideWidth = document.querySelector(".carousel-container").offsetWidth;
            carouselWrapper.style.transform = `translateX(-${index * slideWidth}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === totalSlides - 1;
        }

        nextBtn.addEventListener("click", () => {
            if (index < totalSlides - 1) {
                index++;
                updateView();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (index > 0) {
                index--;
                updateView();
            }
        });
    </script>


</body>

</html>