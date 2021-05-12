<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, inicial-scale=1.0">
  <link rel="stylesheet" href="vendors/css/normalize.css">
  <link rel="stylesheet" href="vendors/css/grid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="resources/css/colors.css">
  <link rel="stylesheet" href="resources/css/style.css">
  <link rel="stylesheet" href="resources/css/queries.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
  <title>Omnifood</title>
  <link rel="icon" href="resources/img/logo.ico">
</head>

<body>
  <header id="top">
    <nav>
      <div class="row">
        <a href="#top"><img class="logo" src="resources/img/logo-white.png" alt="Omnifood logo"></a>
        <a href="#top"><img class="logo-black" src="resources/img/logo.png" alt="Omnifood logo"></a>
        <ul class="main-nav js--main-nav">
          <li><a href="#features">Food delivery</a></li>
          <li><a href="#works">How it works</a></li>
          <li><a href="#cities">Our cities</a></li>
          <li><a href="#plans">Sign up</a></li>
        </ul>
        <a class="mobile-nav-icon js--nav-icon" href="#0"><ion-icon id="animate-menu" name="menu"></ion-icon></a>

      </div>
    </nav>
    <div class="hero-text-box">
      <h1>Goodbye junk food. <br>Hello super healthy meals.</h1>
      <a class="btn btn-full js--scroll-to-plans" href="#">I’m hungry</a>
      <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more </a>
    </div>
  </header>

  <section class="section-features js--section-features" id="features">
    <div class="row">
      <h2>Get food fast &mdash; not fast food.</h2>
      <p class="long-copy">Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!</p>
    </div>
    <div class="row js--wp-1">
      <div class="col span-1-of-4 box">
        <ion-icon class="icon-big" name="infinite-outline"></ion-icon>
        <h3>Up to 365 days/year</h3>
        <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
      </div>
      <div class="col span-1-of-4 box">
        <ion-icon class="icon-big" name="stopwatch-outline"></ion-icon>
        <h3>Ready in 20 minutes</h3>
        <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
      </div>
      <div class="col span-1-of-4 box">
        <ion-icon class="icon-big" name="nutrition-outline"></ion-icon>
        <h3>100% organic</h3>
        <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
      </div>
      <div class="col span-1-of-4 box">
        <ion-icon class="icon-big" name="cart-outline"></ion-icon>
        <h3>Order anything</h3>
        <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
      </div>
    </div>
  </section>
  <section class="section-meals">
    <ul class="meals-showcase clearfix">
      <li>
        <figure class="meal-photo">
          <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
        </figure>
      </li>
    </ul>
    <ul class="meals-showcase clearfix">
      <li>
        <figure class="meal-photo">
          <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
        </figure>
      </li>
      <li>
        <figure class="meal-photo">
          <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
        </figure>
      </li>
    </ul>
  </section>

  <section class="section-steps" id="works">
    <div class="row">
      <h2>How it works &dash; Simple as 1, 2, 3</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-2 steps-box">
        <img class="app-screen js--wp-2" src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone">
      </div>
      <div class="col span-1-of-2 steps-box">
        <div class="works-step">
          <div>1</div>
          <p>Choose the subscription plan that best fits your needs and sign up today.</p>
        </div>
        <div class="works-step">
          <div>2</div>
          <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
        </div>
        <div class="works-step">
          <div>3</div>
          <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
        </div>
        <a class="btn-app" href="#"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
        <a class="btn-app" href="#"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
      </div>
    </div>
  </section>

  <section class="section-cities" id="cities">
    <div class="row">
      <h2>We're currently in these cities</h2>
    </div>
    <div class="row js--wp-3">
      <div class="col span-1-of-4 box cities">
        <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
        <h3>Lisbon</h3>
        <div class="city-feature">
          <ion-icon class="icon-small" name="person"></ion-icon>
          1600+ happy eaters
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="star"></ion-icon>
          60+ top chefs
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
          <a href="#">@omnifood_lx</a>
        </div>
      </div>
      <div class="col span-1-of-4 box cities">
        <img src="resources/img/san-francisco.jpg" alt="San Francisco">
        <h3>San Francisco</h3>
        <div class="city-feature">
          <ion-icon class="icon-small" name="person"></ion-icon>
          3700+ happy eaters
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="star"></ion-icon>
          160+ top chefs
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
          <a href="#">@omnifood_sf</a>
        </div>
      </div>
      <div class="col span-1-of-4 box cities">
        <img src="resources/img/berlin.jpg" alt="Berlin">
        <h3>Berlin</h3>
        <div class="city-feature">
          <ion-icon class="icon-small" name="person"></ion-icon>
          2300+ happy eaters
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="star"></ion-icon>
          110+ top chefs
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
          <a href="#">@omnifood_berlin</a>
        </div>
      </div>
      <div class="col span-1-of-4 box cities">
        <img src="resources/img/london.jpg" alt="London">
        <h3>London</h3>
        <div class="city-feature">
          <ion-icon class="icon-small" name="person"></ion-icon>
          1200+ happy eaters
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="star"></ion-icon>
          50+ top chefs
        </div>
        <div class="city-feature">
          <ion-icon class="icon-small" name="logo-twitter"></ion-icon>
          <a href="#">@omnifood_london</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonials">
    <div class="row">
      <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
        <blockquote>
          Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
          <cite><img src="resources/img/customer-1.jpg">Alberto Duncan</cite>
        </blockquote>
      </div>
      <div class="col span-1-of-3">
        <blockquote>
          Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
          <cite><img src="resources/img/customer-2.jpg">Joana Silva</cite>
        </blockquote>
      </div>
      <div class="col span-1-of-3">
        <blockquote>
          I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
          <cite><img src="resources/img/customer-3.jpg">Milton Chapman</cite>
        </blockquote>
      </div>
    </div>
  </section>

  <section class="section-plans js--section-plans" id="plans">
    <div class="row">
      <h2>Sign up and pricing plans</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-3">
        <div class="plan-box js--wp-4">
          <div>
            <h3>Premium</h3>
            <p class="plan-price">399$<span>/ month</span></p>
            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
          </div>
          <div>
            <ul>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal every day
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery
              </li>
            </ul>
          </div>
          <div>
            <a class="btn btn-full" href="#">Sign up now</a>
          </div>
        </div>
      </div>
      <div class="col span-1-of-3">
        <div class="plan-box">
          <div>
            <h3>Pro</h3>
            <p class="plan-price">149$<span>/ month</span></p>
            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
          </div>
          <div>
            <ul>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal 10 days/month
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order 24/7
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Access to newest creations
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery
              </li>
            </ul>
          </div>
          <div>
            <a class="btn btn-ghost" href="#">Sign up now</a>
          </div>
        </div>
      </div>
      <div class="col span-1-of-3">
        <div class="plan-box">
          <div>
            <h3>Starter</h3>
            <p class="plan-price">19$<span>/ meal</span></p>
            <p class="plan-price-meal">&nbsp;</p>
          </div>
          <div>
            <ul>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>1 meal
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Order from 8 am to 12 pm
              </li>
              <li>
                <ion-icon class="icon-small" name="close-outline"></ion-icon>Access to newest creations
              </li>
              <li>
                <ion-icon class="icon-small" name="checkmark-outline"></ion-icon>Free delivery
              </li>
            </ul>
          </div>
          <div>
            <a class="btn btn-ghost" href="#">Sign up now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-form" id="form">
    <div class="row">
      <h2>We're happy to hear from you</h2>
    </div>
    <form class="row contact-form" action="mailer.php" method="post">
      <div class="row">
        <?php

          if ($_GET["success"] == 1) {
            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
          }

          if ($_GET["success"] == 1) {
            echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
          }

        ?>
      </div>
      <div class="row">

        <div class="col span-1-of-3">
          <label for="name">Name</label>
        </div>
        <div class="col span-2-of-3">
          <input type="text" name="name" id="name" value="" placeholder="Your name" required>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label for="email">Email</label>
        </div>
        <div class="col span-2-of-3">
          <input type="email" name="email" id="email" value="" placeholder="Your email" required>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label for="find-us">How did you find us?</label>
        </div>
        <div class="col span-2-of-3">
          <select class="" name="find-us" id="find-us">
            <option value="friends" selected>Friends</option>
            <option value="search">Search</option>
            <option value="ad">Advertisement</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label>Newsletter?</label>
        </div>
        <div class="col span-2-of-3">
          <input type="checkbox" name="news" id="news" checked value="">Yes, please!
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label for="message">Drop us a line</label>
        </div>
        <div class="col span-2-of-3">
          <textarea id="message" name="message" placeholder="Your messager" rows="8" cols="80"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <label for="">&nbsp;</label>
        </div>
        <div class="col span-2-of-3">
          <input type="submit" name="" value="Send it!">
        </div>
      </div>
    </form>
  </section>

  <footer>
    <div class="row">
      <div class="col span-1-of-2">
        <ul class="footer-nav">
          <li>
            <a href="#">About us</a>
          </li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">iOS App</a></li>
          <li><a href="#">Android App</a></li>
        </ul>
      </div>
      <div class="col span-1-of-2">
        <ul class="social-links">
          <li>
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          <li>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <p>Copyright &copy; 2021 by Omnifood. All rights reserved.</p>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script src="vendors/js/jquery.waypoints.min.js" charset="utf-8"></script>
  <script src="resources/js/script.js" charset="utf-8"></script>
</body>

</html>
