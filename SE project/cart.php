<?php
session_start(); // start the session
if (!isset($_SESSION['user_id'])) {
    // redirect to login page if user is not logged in
    echo "<script>alert('User Not Logged In, Sign-in First!'); window.location.href = 'login.php';</script>";
}
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
                <li><a href="shop.php">Shop</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="signup1.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
                <li id="lg-bag"><a href="cart.php" class="active"><i class='fas fa-shopping-bag'></i></a></li>
                <a  id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">

            <a href="cart.php"><i class='fas fa-shopping-bag'></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="page-header" class="about-header">

        <h2>#Let's Talk</h2>

        <p>LEAVE A MESSAGE, we love to hear from you! </p>

    </section>
    <section id="cart" class="section-p1" >
        <table width="100%">
      <thead>
        <tr>
            <td>Remove</td>
            <td>Images</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td><a ><i class="far fa-times-circle"></i></a></td>
            <td><img src="images/f-product/fp1.jpg" alt=""></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>RS. 780</td>
            <td><input type="number" value="1"></td>
            <td>RS. 780</td>
        </tr>
       
            <td><a ><i class="far fa-times-circle"></i></a></td>
            <td><img src="images/f-product/fp2.jpg" alt=""></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>RS. 780</td>
            <td><input type="number" value="1"></td>
            <td>RS. 780</td>
        </tr>
      
            <td><a ><i class="far fa-times-circle"></i></a></td>
            <td><img src="images/f-product/fp3.jpg" alt=""></td>
            <td>Cartoon Astronaut T-Shirts</td>
            <td>RS. 780</td>
            <td><input type="number" value="1"></td>
            <td>RS. 780</td>
        </tr>
      </tbody>
    </table>
     </section>
     <section id="cart-add" class="section-p1">
        <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
        <input type="text" placeholder="Enter Your Coupon">
        <button class="normal">Apply</button>
        </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
            <tr>
            <td>Cart Subtotal</td>
            <td>RS. 780</td>
            </tr>
            <tr>
            <td>Shipping</td>
            <td>Free</td>
            </tr>
            <tr>
            <td><strong>Total</strong></td>
            <td><strong>RS. 780</strong></td>
            </tr>
            </table>
            <button class="normal">Proceed to checkout</button>

            </div>
        
        </section>

     <footer class="section-p1">
        <div class="col">
            <img src="images/logo.jpg" alt="" height="100px" width="100px">
            <h4>contact</h4>
            <p><strong>Addrress:</strong> Punjab university ,Hoshiarpur, Punjab</p>
            <p><strong>Phone:</strong> +919876543021 / +915684235789</p>
            <p> <strong>Hours:</strong> 9:00 AM - 7:00 PM MON - SAT</p>
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