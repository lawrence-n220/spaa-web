<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services -Lexxy Best Spa and barber shop</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Page Background */
        body {
            background: #f0f0f0;
        }

        /* Header */
       /* Header Styling */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(to right, #0077ff, #00c3ff);
    color: white;
    padding: 10px 20px;
}

/* Logo */
.logo {
    height: 60px;
}

/* Navigation */
nav {
    display: flex;
}

nav ul {
    display: flex;
    list-style: none;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: bold;
}

/* Hamburger Menu */
.menu-btn {
    display: none;
    font-size: 2rem;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
}

/* Responsive Design */
@media (max-width: 900px) {
    nav {
        display: none;
        flex-direction: column;
        position: relative; /* Change from absolute to relative */
        width: 100%;
        background: #0077ff;
        text-align: center;
        padding: 15px 0;
    }

    nav ul {
        flex-direction: column;
        gap: 15px;
    }

    .menu-btn {
        display: block;
    }

    /* Show menu when active */
    nav.active {
        display: flex;
        position: relative; /* Keep it relative so it pushes content */
        padding-bottom: 15px; /* Ensures enough space */
    }
}
/* Apply to all elements for a smooth entrance */
body {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease-out forwards;
}

/* Fade and slide effect */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Service Containers - Slide from Left */
.service-container {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideInLeft 1s ease-out forwards;
}

/* Delay effect for staggered animations */
.service-container:nth-child(2) { animation-delay: 0.3s; }
.service-container:nth-child(3) { animation-delay: 0.6s; }
.service-container:nth-child(4) { animation-delay: 0.9s; }

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}


        /* Services Section */
        .services {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            padding: 40px 10px;
        }

        /* Service Container */
        .service-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 60%;
            max-width: 700px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 3px solid #0077ff;
            background: linear-gradient(to right, #ffffff, #f0faff);
            transition: transform 0.3s ease-in-out;
        }

        /* Hover Effect */
        .service-container:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        /* Left Content */
        .service-content {
            flex: 1;
            padding: 20px;
        }

        .service-content h2 {
            font-size: 2rem;
            color: #0077ff;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .service-content ul {
            list-style: none;
            font-size: 1.2rem;
            padding-left: 10px;
        }

        .service-content ul li {
            margin-bottom: 8px;
            padding: 5px;
            color: #222;
            font-weight: 600;
            transition: 0.3s;
        }

        .service-content ul li:hover {
            color: #00c3ff;
            text-decoration: underline;
            cursor: pointer;
        }
        footer {
      background-color: #00aaff;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: auto; /* Push footer to the bottom */
      animation: slideInFromBottom 1s ease-out; /* Footer animation */
    }

    .social-links {
      margin-bottom: 15px;
    }

    .social-links a {
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
      margin: 0 10px;
      transition: color 0.3s ease, transform 0.3s ease; /* Social icon hover effect */
    }

    .social-links a:hover {
      color: #ffcc00; /* Yellow on hover */
      transform: translateY(-3px); /* Slight lift on hover */
    }

    footer p {
      font-size: 1rem;
      margin-top: 10px;
    }

        /* Right Image */
        .service-container img {
            width: 300px;
            height: 100%;
            object-fit: cover;
            border-left: 3px solid #0077ff;
        }
        .book-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: #25D366;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
            text-align: center;
        }

        .book-btn:hover {
            background: #1da851;
            transform: scale(1.05);
        }


        /* Responsive Design */
        @media (max-width: 900px) {
            .service-container {
                flex-direction: column;
                width: 90%;
                text-align: center;
            }

            .service-container img {
                width: 100%;
                height: 250px;
                border-left: none;
                border-top: 3px solid #0077ff;
            }
            
        }
    </style>
</head>
<body>

<header>
    <img src="images/image4.jpg" alt="Logo" class="logo">
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <nav id="nav-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQS</a></li>
        </ul>
    </nav>
</header>


    <section class="services">
        <!-- Haircuts & Styling -->
        <div class="service-container">
            <div class="service-content">
                <h2>Haircuts & Styling</h2>
                <ul>
                    <li>Men’s Haircuts</li>
                    <li>Women’s Haircuts</li>
                    <li>Kids' Haircuts</li>
                    <li>Beard Trimming & Styling</li>
                    <li>Hair Coloring & Highlights</li>
                    
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20Haircut%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/haircut1.jpg" alt="Haircut Service">
        </div>

        <!-- Massage Therapy -->
        <div class="service-container">
            <div class="service-content">
                <h2>Massage Therapy</h2>
                <ul>
                    <li>Deep Tissue Massage</li>
                    <li>Swedish Massage</li>
                    <li>Hot Stone Massage</li>
                    <li>Aromatherapy</li>
                    <li>Reflexology</li>
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20massage%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/massage.jpg" alt="Massage Service">
        </div>

        <!-- Facial Treatments -->
        <div class="service-container">
            <div class="service-content">
                <h2>Steaming Services</h2>
                <ul>
          <li>Swendish Massage</li>
          <li>Deep Tissue Message</li>
          <li>Thai Massage</li>
          <li>Hot Stone Massage</li>
          <li>Aromatheraphy Massage</li>
          <li>Sport Massage</li>
          <li> Holistic Massage</li>
          <li>Couple Massage</li>
          <li>Lymphatic Drainage</li>
        </ul>
        <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20Steamingt%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/steaming1.jpg" alt="Facial Treatment">
        </div>
        <div class="service-container">
            <div class="service-content">
                <h2>Special Oils</h2>
                <ul>
          <li>Mustard Oils</li>
          <li>Olive Oils</li>
          <li>Jojoba Oils</li>
          <li>Coconut Oil</li>
        </ul>
        <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20Special Oil%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/oils.jpg" alt="Facial Treatment">
        </div>
        
       

        <!-- Nail Care -->
        <div class="service-container">
            <div class="service-content">
                <h2>Nail Care</h2>
                <ul>
                    <li>Manicure & Pedicure</li>
                    <li>Gel & Acrylic Nails</li>
                    <li>French Tips & Nail Art</li>
                    <li>Cuticle Care & Nail Strengthening</li>
                    <li>Paraffin Wax Treatment</li>
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20Nail Care%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/nails.jpg" alt="Nail Care">
        </div>

        <!-- Waxing & Hair Removal -->
        <div class="service-container">
            <div class="service-content">
                <h2>Waxing & Hair Removal</h2>
                <ul>
                    <li>Eyebrow Shaping</li>
                    <li>Full Body Waxing</li>
                    <li>Underarm & Leg Waxing</li>
                    <li>Brazilian & Bikini Wax</li>
                    <li>Threading Services</li>
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20Waxing and Hair Removal%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/waxing.jpg" alt="Waxing Service">
        </div>

        <!-- Body Treatments -->
        <div class="service-container">
            <div class="service-content">
                <h2>Body Treatments</h2>
                <ul>
                    <li>Body Scrubs & Exfoliation</li>
                    <li>Detox Body Wraps</li>
                    <li>Hydrating Mud Therapy</li>
                    <li>Cellulite Reduction Treatment</li>
                    <li>Herbal & Salt Scrubs</li>
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20body treatment%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/bodytreatment.jpg" alt="Body Treatment">
        </div>

        <!-- Grooming Services -->
        <div class="service-container">
            <div class="service-content">
                <h2>Grooming Services</h2>
                <ul>
                    <li>Eyebrow Tinting & Shaping</li>
                    <li>Beard & Mustache Grooming</li>
                    <li>Scalp Treatment</li>
                    <li>Hot Towel Shave</li>
                    <li>Men’s Facial Cleansing</li>
                </ul>
                <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%2C%20I%20want%20to%20book%20a%20grooming%20service." 
                   class="book-btn" target="_blank">Book Service</a>
            </div>
            <img src="images/grooming1.jpg" alt="Grooming Service">
        </div>
    </section>
    <footer>
    <div class="social-links">
      <a href="https://www.facebook.com/share/1FSPL6DX5K/" class="social-icon" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="https://www.instagram.com/lexxyspa_babershop?igsh=MW8yY25pbmV6MDhvaw==" class="social-icon" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
      <a href="https://www.tiktok.com/@lexxyspa?_t=ZM-8uPaqgDJlQ5&_r=1" class="social-icon" target="_blank"><i class="fab fa-tiktok"></i> Tiktok</a>
    </div>
    <p>© 2025 Lexxy Spa and Barber. All Rights Reserved.</p>
  </footer>
<script>
    function toggleMenu() {
    document.getElementById("nav-menu").classList.toggle("active");
}

</script>
</body>
</html>
