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
</head>

<body>
    <main>
        <div class="movaflex-banner">
            <div class="logo">
                <img src="asset/MOVAFLEX2.png" alt="MOVAFLEX Image" width="200">
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li>
                        <a href="inventory.php">Product </a>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="home-section2">
            <div class="card">
                <div class="head"><img src="/asset/kokuyo-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/meetingchair.jpg" width="170px"
                            alt="meetingchair.jpg"></div>
                    <div class="product-name">
                        <h1>White Locker</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/lamex-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/astrid.jpg" width="250px"
                            alt="astrid.jpg"></div>
                    <div class="product-name">
                        <h1>Chair</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/lamex-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/astrid2.jpg" width="250px"
                            alt="astrid2.jpg"></div>
                    <div class="product-name">
                        <h1>Chair</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/bevco-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/cleanroom.jpg" width="150px"alt="cleanroom.jpg"></div>
                    <div class="product-name">
                        <h1>Cleanroom Chair</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/alpha-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/seater.jpg" width="250px"
                            alt="searter.jpg"></div>
                    <div class="product-name">
                        <h1>Seater</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/lamex-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/Alta+.jpg" width="250px"
                            alt="Alta+.jpg"></div>
                    <div class="product-name">
                        <h1>Office Chair</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/bevco-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/Versa_CR_Scaled.jpg" width="250px"
                            alt="Versa_CR_Scaled.jpg"></div>
                    <div class="product-name">
                        <h1>Cleanroom</h1>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="head"><img src="/asset/lamex-logo.png" width="70px" style="border-radius: 20px;" alt="">
                </div>
                <div class="body-card">
                    <div class="picture"><img src="/asset/OASL6-LGRAY-300x300.jpg" width="250px"
                            alt="meetingc.jpg"></div>
                    <div class="product-name">
                        <h1>Meeting Chair</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="home-section3">
            <div class="box">
                <div class="boxbox">
                    <div class="picture"></div>
                    <div class="pic-content">
                        <h1>Vaults</h1><span>Subheading</span><br>
                        <p></p><br>
                        <p>Body text for your whole article or post. We’ll put in some lorem ipsum to show how a
                            filled-out page might look:</p><br>
                        <p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation
                            exquisite perfect nostrud nisi intricate Content. Qui international first-class nulla ut.
                            Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya
                            charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat
                            discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki
                            excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
                            <button>Product</button>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="boxbox">
                    <div class="pic-content">
                        <h1>Racks</h1><span>Subheading</span><br>
                        <p></p><br>
                        <p>Body text for your whole article or post. We’ll put in some lorem ipsum to show how a
                            filled-out page might look:</p><br>
                        <p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation
                            exquisite perfect nostrud nisi intricate Content. Qui international first-class nulla ut.
                            Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya
                            charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat
                            discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki
                            excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
                            <button>Product</button>
                    </div>
                    <div class="picture"></div>
                </div>
            </div>
            <div class="box">
                <div class="boxbox">
                    <div class="picture"></div>
                    <div class="pic-content">
                        <h1>Vaults</h1><span>Subheading</span><br>
                        <p></p><br>
                        <p>Body text for your whole article or post. We’ll put in some lorem ipsum to show how a
                            filled-out page might look:</p><br>
                        <p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation
                            exquisite perfect nostrud nisi intricate Content. Qui international first-class nulla ut.
                            Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya
                            charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat
                            discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki
                            excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
                            <button>Product</button>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="boxbox">
                    <div class="pic-content">
                        <h1>Racks</h1><span>Subheading</span><br>
                        <p></p><br>
                        <p>Body text for your whole article or post. We’ll put in some lorem ipsum to show how a
                            filled-out page might look:</p><br>
                        <p>Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation
                            exquisite perfect nostrud nisi intricate Content. Qui international first-class nulla ut.
                            Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya
                            charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat
                            discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki
                            excepteur Basset hound. Zürich sleepy perfect consectetur.</p>
                            <button>Product</button>
                    </div>
                    <div class="picture"></div>
                </div>
            </div>
        </div>
        <div class="home-section4">
            <div class="home4-box">
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
            </div>
            <div class="home4-box">
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
                <div class="card4">
                    <div class="for-icon"><i class="fa-solid fa-circle-user"></i></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, reiciendis.
                    </div>
                </div>
            </div>
        </div>
        <div class="home-section5">
            <div class="review">
                <div class="card">
                    <ul>
                        <li><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i></li>
                        <li>
                            <h2>Review title</h2>
                            <span>review body</span>
                        </li>
                        <li>
                            <div class="picture"><img src="/asset/background.jpg" alt="" width="50px"
                                    style="border-radius: 50%;"></div>
                            <ul>
                                <li>
                                    <h2>Name</h2>
                                    <p>Date</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul>
                        <li><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i></li>
                        <li>
                            <h2>Review title</h2>
                            <span>review body</span>
                        </li>
                        <li>
                            <div class="picture"><img src="/asset/background.jpg" alt="" width="50px"
                                    style="border-radius: 50%;"></div>
                            <ul>
                                <li>
                                    <h2>Name</h2>
                                    <p>Date</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <ul>
                        <li><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                class="fa-regular fa-star"></i></li>
                        <li>
                            <h2>Review title</h2>
                            <span>review body</span>
                        </li>
                        <li>
                            <div class="picture"><img src="/asset/background.jpg" alt="" width="50px"
                                    style="border-radius: 50%;"></div>
                            <ul>
                                <li>
                                    <h2>Name</h2>
                                    <p>Date</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="email-sub">
                <ul>
                    <li>
                        <h1>Follow the latest trends</h1>
                    </li>
                    <li><span>With our daily newsletter</span></li>
                    <li><input type="search" name="" id="" placeholder="you@example.com"><button>Submit</button></li>
                </ul>
            </div>
        </div>
        <footer>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </footer>
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