<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Management System</title>
    <link rel="stylesheet" href="prisum.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="landingpage.php" class="logo">
                <img src="star-insurance-high-resolution-logo.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="register.php">Sign Up</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Star Insurance Company</h1>
            <p>Make Life Secure </p>
            <a class="main-btn" href="https://www.libertyinsurance.in/blogs/motor-insurance-guide/vehicle-insurance-policy-types-benefits-and-how-to-choose.html">Information</a>
        </div>
    </header>
    <iframe src='https://webchat.botframework.com/embed/insubot-bot?s=9I5gDRR73iQ.MMcFFw1bFdNSYJoMqXM0T50_9BNxOkrsaXruAklZx0Q'  style='position: fixed;bottom: 30px;right: 20px;width: 350px;hight: 500px;background-color: #fff;border-radius: 20px;box-shadow: 0 0 10px rgba(255,0,0,0.5);overflow: hidden;'></iframe>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Car Insurance </h4>
                    <p>calculate you primium</p>
                    <a href="car.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Life Insurace</h4>
                    <p>calculate you primium</p>
                    <a href="life.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>Property Insurance</h4>
                    <p>calculate you primium</p>
                    <a href="property.php" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Home Insurance: Safeguard your most valuable asset with our customizable home insurance plans. From property damage to liability protection, we've got you covered against the unexpected.</p>
            <p>Health Insurance: Take care of yourself and your family with our range of health insurance solutions. With options for individuals, families, and businesses, we make it easy to find coverage that fits your needs and budget.</p>
            <p>Life Insurance: Ensure financial security for your loved ones with our flexible life insurance policies. Whether you're planning for the future or protecting your family's legacy, we offer options that provide peace of mind for you and your beneficiaries.</p>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us For More Information</h1>
            <p>We Will back to you soon !</p>
        </div>
        
    </footer>
</body>
</html>