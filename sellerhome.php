<?php
session_start();
?>
<?php

include("dbconnection.php");
$z=$_SESSION['email'];
$sql="SELECT * FROM product_tb where email='$z' ";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homes Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
    .lg{
        width: 80px;
        border: 10px;
        background-color: orange;
        border-radius: 20px;
        text-align: center;
    }
    .txt{
       width: 110px;
        border: 10px;
        background-color: #8AD144;
        border-radius: 20px;
        text-align: center;
    }
</style>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                     <ul class="main-menu">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./search.html">Search Results</a></li>
                        <li><a href="./about.html">Categories</a></li>
                        <li><a href="./single-property.html">Single Property</a></li>
                        
                        <li><a class="txt" href="addproperty.php">Add Property</a></li>
                        <li><a class="lg"  href="sellerlogout.php">Logout</a></li>

                       
                                    
                                </div>
                            </div>
                    <div id="mobile-menu-wrap"></div>

                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Find your next</h2>
            <h1>dream home.</h1>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
    <div class="filter-search">
        <div class="container ">
            <div class="row">
               
                
               <!--  <div class="col-lg-12"> -->
                    <form class="filter-form">
                        <!-- <div class="location">
                            <p>Location</p>
                            <select class="filter-location">
                                <option value="">London</option>
                                <option value="">US</option>
                                <option value="">UAE</option>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>Property Type</p>
                            <select class="filter-property">
                                <option value="">House</option>
                                <option value="">Resort</option>
                                <option value="">Hotel</option>
                            </select>
                        </div>
                        <div class="price-range">
                            <p>Price</p>
                            <div class="range-slider">
                                <div id="slider-range">
                                    <div tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default slider-left">50k</div>
                                    <div tabindex="0"
                                        class="ui-slider-handle ui-corner-all ui-state-default slider-right">300k</div>
                                </div>
                            </div>
                        </div>
                        <div class="bedrooms">
                            <p>Bedrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-1">
                                    <label for="room-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-2">
                                    <label for="room-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-3">
                                    <label for="room-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="room" id="room-4">
                                    <label for="room-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="bathrooms">
                            <p>Bathrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-1">
                                    <label for="bathroom-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-2">
                                    <label for="bathroom-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-3">
                                    <label for="bathroom-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-4">
                                    <label for="bathroom-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button type="submit"><i class="flaticon-search"></i>Search</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Search Section End -->
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                 <?php 
                while($row=$result->fetch_assoc())
                {
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="<?php echo "".'uploads/'.$row['photo']."";?>">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row['ptype'];?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $row['sqft'];?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $row['bhk'];?></span>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span>Rs:<?php echo $row['price'];?></span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
              <?php 
              }
               ?>
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
    <!-- Popular Room Section Begin -->
    <section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="slider-active owl-carousel">
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Room Section End -->
    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="newslatter-text">
                        <img src="img/message.png" alt="">
                        <h4>Join our mailing to get weekly updates on <br>our exclusive deals.</h4>
                        <form>
                            <input type="text" placeholder="Email address">
                            <button type="submit" class="site-btn news-btn">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->
    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Why choose homes?</span><br>Because we we are the best in <br>the business.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id est nec nisl tristique
                            dignissim semper sed diam. Donec vulputate neque in massa hendrerit, non dignissim ipsum
                            varius. Mauris dignissim libero ipsum, nec molestie nulla molestie at. Nam imperdiet
                            hendrerit finibus. Sed porttitor ultricies sagittis. Nullam lobortis nec quam vitae
                            venenatis. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="img/check.png" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </li>
                            <li><img src="img/check.png" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                            <li><img src="img/check.png" alt="">Vivamus id nisl sed mi varius lobortis.</li>
                            <li><img src="img/check.png" alt="">Suspendisse sit amet erat placerat, molestie neque id
                            </li>
                            <li><img src="img/check.png" alt="">Fusce pretium libero sit amet ipsum posuere pretium.
                            </li>
                            <li><img src="img/check.png" alt="">Praesent tincidunt diam in ante faucibus tristique.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Don’t forget to follow us on Instagram @homes</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Rooms Pic Section End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Homes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <h5>Latest Blog Posts</h5>

                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-2.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>