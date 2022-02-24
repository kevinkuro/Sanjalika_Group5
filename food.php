<?php
    session_start();
    if (!isset($_SESSION['is_login'])) {
        echo "<script>
            alert('Please login to entry !');
            window.location.href = 'Login.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/Food/style1.css">
    <script src="./js/Food/store.js" async></script>
    <link rel="stylesheet" href="Home.css" >
    
</head>
<body>
    
<div class="main">
<header>
            <div class="header__contain container">
                <a href="./Home.php" class="logo">Sanjalika</a>
                <div class="header__main">
                    <ul id="main_menu" >
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">HomePage</a>
                            <div class="dropdown-content">
                                <a href="Home.php" class="drop">Home</a>
                                <a href="./food.php" class="drop">Menu and Dishes</a>
                                <a href="about.php" class="drop">About</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">Service</a>
                            <div class="dropdown-content">
                                <a href="#ticket" class="drop">Ticket</a>
                                <a href="#" class="drop">Link 2</a>
                                <a href="#" class="drop">Link 3</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">News</a>
                            <div class="dropdown-content">
                                <a href="#" class="drop"></a>
                                <a href="#" class="drop">News Page</a>
                                <a href="./contact.php" class="drop">Contact</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn"><?= isset($_SESSION['is_login']) ? 'Hi, ' . $_SESSION['name'] : 'Login' ?></a>
                            <div class="dropdown-content">
                                <?php if (!isset($_SESSION['is_login'])): ?>
                                    <a href="./login.php" class="drop">Login</a>
                                <?php else: ?>
                                    <a href="./logout.php" class="drop">Logout</a>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <button class="btnticker"><a href="" class="linkbtn">TICKER</a></button>
                    </div>
                </div>
        </header>
        </div>
<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<section class="home" id="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3 class="shop-item-title">spicy noodles</h3>
                    <p>Simple dishes suitable for vegetarians!</p>
                    <a  class="btn">order now</a>
                </div>
                <div class="image">
                    <img class="shop-item-image" src="./images/Food/home-img-1.png" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3 class="shop-item-title">fried chicken</h3>
                    <p>The dish is suitable for families of 3 or more!</p>
                    <a  class="btn">order now</a>
                </div>
                <div class="image">
                    <img class="shop-item-image" src="./images/Food/home-img-2.png" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3 class="shop-item-title">hot pizza</h3>
                    <p>Very convenient fast food!</p>
                    <a  class="btn">order now</a>
                </div>
                <div class="image">
                    <img class="shop-item-image" src="./images/Food/home-img-3.png" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our dishes </h3>
    <h1 class="heading "> family set </h1>
    <div class="box-container">
        <div class="box">
            <a  class="fas fa-heart"></a>
            <a  class="fas fa-eye"></a>
            <img class="shop-item-image" src="./images/Food/dish-1.png" alt="">
            <h3 class="shop-item-title">beef hamburger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <a  class="fas fa-heart"></a>
            <a  class="fas fa-eye"></a>
            <img class="shop-item-image" src="./images/Food/dish-2.png" alt="">
            <h3 class="shop-item-title">fried tomato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <a  class="fas fa-heart"></a>
            <a  class="fas fa-eye"></a>
            <img class="shop-item-image" src="./images/Food/dish-3.png" alt="">
            <h3 class="shop-item-title">fried chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <a  class="fas fa-heart"></a>
            <a  class="fas fa-eye"></a>
            <img class="shop-item-image" src="./images/Food/dish-4.png" alt="">
            <h3 class="shop-item-title">seafood pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="box">
            <a  class="fas fa-heart"></a>
            <a  class="fas fa-eye"></a>
            <img class="shop-item-image" src="./images/Food/dish-5.png" alt="">
            <h3 class="shop-item-title">chocolate cake</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="family">
            <span class="price family-price">$8.99 </span>
            <a  class="btn family-button shop-item-button">Add New</a>
        </div>
        
    </div>

</section>
<section class="about" id="about">
    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>
    <div class="row">
        <div class="image">
            <img class="shop-item-image" src="./images/Food/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 class="shop-item-title">best food in the country</h3>
            <p>This is a traditional Chinese dish prepared according to local recipes, this dish will help you get closer to Chinese culture to understand and love it!</p>
            <p>Besides, this is also the restaurant's best-selling dish</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a  class="btn shop-item-button">learn more</a>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-1.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">bacon pizza</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$10.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-2.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">beef hamburger</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$4.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-3.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">maryjoes</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$2.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-4.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">icycream</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$2.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-5.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">sweetchoiceeeeesss</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$6.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-6.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">Bakeryyll</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$5.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-7.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">Soda</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$3.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-8.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">Strawberry cereals</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$6.99</span>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img class="shop-item-image" src="./images/Food/menu-9.jpg" alt="">
                <a  class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3 class="shop-item-title">orange juice</h3>
                <p></p>
                <a  class="btn shop-item-button">Add New</a>
                <span class="price">$3.99</span>
            </div>
        </div>
    </div>
</section>
<section class="review" id="review">
    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img class="shop-item-image" src="./images/Food/pic-4.png" alt="">
                    <div class="user-info">
                        <h3 class="shop-item-title">Dasia Schaefer</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>This cozy restaurant has left the best impressions! Hospitable hosts, delicious dishes, beautiful presentation, wide wine list and wonderful dessert. I recommend to everyone! I would like to come back here again and again.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img class="shop-item-image" src="./images/Food/pic-3.png" alt="">
                    <div class="user-info">
                        <h3 class="shop-item-title">Drake Nitzsche</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make great recommendations.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img class="shop-item-image" src="./images/Food/pic-2.png" alt="">
                    <div class="user-info">
                        <h3 class="shop-item-title">Viviane Bednar</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img class="shop-item-image" src="./images/Food/pic-1.png" alt="">
                    <div class="user-info">
                        <h3 class="shop-item-title">Nicholaus Rosenbaum</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit.</p>
            </div>
        </div>
    </div>
</section>
<section class="order" id="order">
    <h3 class="sub-heading"> order now </h3>
    <h1 class="heading"> free and fast </h1>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="number" placeholder="enter your number">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="test" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how musch</span>
                <input type="number" placeholder="how many orders">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="order now" class="btn">
    </form>
</section>
<section class="container content-section">
    <h2 class="section-header">CART</h2>
    <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
    </div>
    <div class="cart-items">
    </div>
    <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">.$0</span>
    </div>
    <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="./js/Food/script.js"></script>
<!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
        <script src="./js/Home/owl.carousel.min.js "></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
        <script>
            AOS.init();
        </script>
        <script src="./js/Home/Home.js"></script>

</body>
</html>