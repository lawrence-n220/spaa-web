<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexxy SPA & Barber Shop</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #F0F0F0; /* Light Gray */
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #007BFF; /* Bright Blue */
            color: white;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
        }
        header img {
            width: 100px;
            height: auto;
        }
        nav ul {
            display: flex;
            list-style: none;
        }
        nav ul li {
            margin: 5px 0;
            position: relative;
            width: 100%;
        }
        nav ul li a {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            padding-bottom: 5px; /* Space for underline */
        }
        nav ul li i {
            color: red;
        }
        nav ul li a:hover {
            color: #F0F0F0; /* Light Gray */
        }
        nav ul li a::before {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: red;
        }

        /* Slider */
        .slider {
            position: relative;
            width: 100%;
            height: 400px;
            background: #F0F0F0; /* Light Gray */
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
        }
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .description {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 123, 255, 0.8); /* Semi-transparent Bright Blue */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* About & Other Sections */
        .card {
            max-width: 500px; /* Increased from 400px */
            margin: 30px auto; /* More spacing */
            padding: 30px; /* More padding */
            background: #007BFF; /* Bright Blue */
            color: white;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, background 0.3s ease;
            opacity: 0; /* Start invisible */
            transform: translateX(100%); /* Start from the right */
            animation: slideInFromRight 1s ease forwards;
            box-shadow: 0 20px 40px rgba(0, 220, 240, 0.4);
        }
        .card h2 {
            margin-bottom: 10px;
        }
        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #0056b3; /* Darker Blue */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn:hover {
            background: #003f80; /* Even Darker Blue */
        }
        .card:hover {
            transform: scale(1.05);
            background: #0056b3; /* Darker Blue */
        }

        /* Fade-in Animation */
        @keyframes slideInFromRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .card {
                max-width: 90%; /* Make it fit smaller screens */
            }
        }

        /* Welcome Section */
        #welcome {
            text-align: center;
            padding: 40px 20px;
            background: #f8f9fa; /* Light Gray Background */
            color: #333; /* Dark Gray Text */
        }
        #welcome h2 {
            font-size: 28px;
            color: #007BFF; /* Bright Blue */
            margin-bottom: 10px;
        }
        #welcome p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin: auto;
        }

        /* Why Choose Us Section */
        #why-choose-us {
            background: #f8f9fa; /* Light Gray Background */
            padding: 60px 20px;
        }
        .why-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            margin: auto;
            gap: 30px;
        }
        .why-text {
            flex: 1;
        }
        .why-text h2 {
            font-size: 32px;
            color: #007BFF; /* Bright Blue */
            margin-bottom: 15px;
        }
        .why-text p {
            font-size: 18px;
            line-height: 1.6;
            color: #333; /* Dark Gray */
            margin-bottom: 15px;
        }
        .why-image {
            flex: 1;
        }
        .why-image img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 40px 90px rgba(86, 72, 243, 0.99);
        }

        /* Footer Styles */
        footer {
            background: #007BFF; /* Bright Blue */
            color: white;
            padding: 20px 20px;
            text-align: center;
        }
        .footer-social {
            margin-bottom: 10px;
        }
        .footer-social a {
            margin: 0 15px;
            color: #FF3B3B; /* Reddish Color */
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .footer-social a:hover {
            color: #cc0000; /* Darker Red */
            transform: scale(1.2); /* Slight Zoom on Hover */
        }
        .footer-bottom {
            font-size: 14px;
            margin-top: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .why-content {
                flex-direction: column;
                text-align: center;
            }
            .why-image img {
                max-width: 100%;
            }
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px 0;
            transition: 0.4s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                display: none; /* Hide the menu by default */
                flex-direction: column;
                width: 100%;
            }
            nav ul.active {
                display: flex; /* Show the menu when active */
            }
            .hamburger {
                display: flex; /* Show hamburger icon */
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/YOUR-FONT-AWESOME-KIT.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <img src="images/image4.jpg" alt="Logo">
        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav>
            <ul>
                <li><a href="#index"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="#services"><i class="fas fa-spa"></i> Services</a></li>
                <li><a href="#contact"><i class="fas fa-phone"></i> Contact</a></li>
                <li><a href="#testimonials"><i class="fas fa-comments"></i> Testimonials</a></li>
            </ul>
        </nav>
    </header>

    <!-- Homepage (Slider) -->
    <section id="home" class="slider">
        <div class="slide fade">
            <img src="images/image1.jpg" alt="Relaxing Spa">
            <div class="description">Experience ultimate relaxation</div>
        </div>
        <div class="slide fade">
            <img src="images/image2.jpg" alt="Barber Services">
            <div class="description">Premium barber services for all styles</div>
        </div>
        <div class="slide fade">
            <img src="images/image3.jpg" alt="Luxury Treatments">
            <div class="description">Luxury spa treatments for your well-being</div>
        </div>
        <div class="slide fade">
            <img src="images/image4.jpg" alt="Luxury Treatments">
            <div class="description">Luxury spa treatments for your well-being</div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section id="welcome">
        <div class="welcome-card">
            <h2>Welcome to Lexxy Spa & Barber</h2>
            <p>Experience the best spa and barber services designed to rejuvenate your body and mind. Our expert professionals ensure top-quality treatments tailored to your needs.</p>
            <div class="why-image">
                <img src="images/image4.jpg" alt="Why Choose Us">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="card">
            <h2>About Us</h2>
            <p>We offer high-quality spa and barber services to rejuvenate your body and mind.</p>
            <a href="about.php" class="btn">View History</a>
        </div>
    </section>

    <!-- Other Sections (Cards) -->
    <section class="cards">
        <div class="card" id="services">
            <h2>Our Services</h2>
            <p>Explore our spa and barber services.View Our Services To Book Appointment</p>
            <p style="color:  #ffcc00; font-size: 1rem;font-weight:bold;">VIEW OUR SERVICES TO BOOK APPOINTMENT WITH US</p>
            <a href="services.php" class="btn">View services</a>
        </div>
        <div class="card" id="contact">
            <h2>Contact Us</h2>
            <p>Get in touch with us for bookings and inquiries.</p>
            <a href="contact.php" class="btn">Contact Us</a>
        </div>
        
        <div class="card" id="testimonials">
            <h2>Testimonials</h2>
            <p>See what our clients say about us.</p>
            <a href="testimonials.php" class="btn">View Testimonials</a>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us">
        <div class="why-content">
            <div class="why-text">
                <h2>Why Choose Us?</h2>
                <p>At Lexxy Spa & Barber, we offer top-tier services designed for relaxation, rejuvenation, and style. Our experienced professionals ensure that every client receives personalized care, premium products, and a luxurious experience. Whether it's a refreshing spa treatment or a sharp haircut, we've got you covered.</p>
                <p>We stand out because of our exceptional customer service, high-quality treatments, and commitment to hygiene and comfort. Come and experience the difference!</p>
            </div>
            <div class="why-image">
                <img src="images/image5.jpg" alt="Why Choose Us">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-social">
            <a href="#" class="social-icon">Facebook</a>
            <a href="#" class="social-icon">Instagram</a>
            <a href="#" class="social-icon">Twitter</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Lexxy Spa & Barber. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("slide");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.opacity = "0";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].style.opacity = "1";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

        const hamburger = document.getElementById('hamburger');
        const navList = document.querySelector('nav ul');
        hamburger.addEventListener('click', () => {
            navList.classList.toggle('active');
        });

        // Trigger animations on page load
        document.addEventListener("DOMContentLoaded", function () {
            const animatedElements = document.querySelectorAll(".card, .why-content, .welcome-card");
            animatedElements.forEach((element) => {
                element.style.opacity = 0; // Start hidden
            });

            setTimeout(() => {
                animatedElements.forEach((element) => {
                    element.style.opacity = 1; // Make visible
                });
            }, 100);
        });
    </script>
</body>
</html>