<?php
session_start(); // start the session
if (!isset($_SESSION['user_id'])) {
    // redirect to login page if user is not logged in
    echo "<script>alert('User Not Logged In, Sign-in First!'); window.location.href = 'login.php';</script>";
}

// connect to the database
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password_db, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// query the database for the user's name
$user_id = $_SESSION['user_id'];
$sql = "SELECT name FROM udetails WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
} else {
    $name = "Unknown user";
}

// close the database connection
mysqli_close($conn);

// display the user's name on the website
echo "Welcome, " . $name . "!";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce website</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <section id="header">
    <a > <img src="images/logo.jpg" alt="logo" height="100px" width="100px" title="SauSau"></a>
    <div>
        <ul id="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a class="active" href="shop.php">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li id="lg-bag"><a href="cart.php"><i class='fas fa-shopping-bag'></i></a></li>
            <a  id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
      
        <a href="cart.php"><i class='fas fa-shopping-bag'></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<section id="page-header">
    
    <h2>#stayhome</h2>
  
    <p>Save more with coupons & upto 70% off</p>
   
</section>

<section id="product1" class="section-p1">

    <div class="pro-container">
        <div class="pro" onclick="window.location.href='sproduct.html'">
            <img src="images/f-product/fp1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/fp8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>

        <div class="pro">
            <img src="images/f-product/np1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np5.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np6.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np7.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
        <div class="pro">
            <img src="images/f-product/np8.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon astronaut T-shirt</h5>
                <div class="star"> 
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>RS.780</h4>
            </div>
            <a ><i class="fal fa-shopping-cart cart "></i></a>
        </div>
    </div>
</section>
<section id="pagination" class="section-p1">
<a >1</a>
<a >2</a>
<a ><i class="fal fa-long-arrow-alt-right"></i></a>

</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="email" name="" id="" placeholder="your email address">
        <button class="normal">Signup</button>
    </div>
</section>
<footer class="section-p1">
    <div class="col">
        <img src="images/logo.jpg" alt="" height="100px" width="100px">
        <h4>contact</h4>
        <p><strong>Addrress:</strong> Punjab university ,Hoshiarpur, Punjab</p>
        <p><strong>Phone:</strong> +919876543021 / +915684235789</p>
        <p> <strong>Hours:</strong> 9:00 AM - 7:00 PM  MON - SAT</p>
       <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
        </div>
       </div>
    </div>
    <div class="col">
            <h4>About</h4>
            <a href="about.html">About us</a>
            <a >Delivery Information</a>
            <a >Privacy Policy</a>
            <a >Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="signup1.php">Sign UP</a>
            <a href="login.php">Sign In</a>
            
            <a href="shop.php">View Cart</a>
            <a href="shop.php">My Wishlist</a>
            <a >Track my order</a>
            <a href="contact.html">Help</a>
        </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Googlr Play</p>
        <div class="row">
         <img src="images/banner/app.jpg" alt="">
         <img src="images/banner/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateway</P>
        <img src="images/banner/pay.png" alt="">
    </div>
    <div class="copyright">
        <p>© 2023, Saurav Singh & Saurabh Sithkar HTML CSS Ecommerce Template</p>
    </div>
</footer>
<script src="project.js"></script>
</body>

</html>