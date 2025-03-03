<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lexxy Spa & Barber Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            overflow-x: hidden;
        }

        header {
            background-color: #00aaff;
            color: white;
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
            position: relative;
        }

        .nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-size: 22px;
            transition: color 0.3s ease;
        }

        .nav a:hover {
            color: #ffcc00;
        }


        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .nav {
                display: none;
            }

            .menu-icon {
                display: block;
            }

            .mobile-nav {
                display: none; /* Hidden by default */
            }

            .mobile-nav.active {
                display: flex; /* Show when active */
            }
        }
        @media screen and (max-width: 768px) {
    .mobile-nav {
        display: none;
        flex-direction: column;
        text-align: center;
        background-color: #00aaff;
        position: absolute;
        width: 100%;
        top: 15px;
        left: 0;
        padding: 10px 0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: max-height 0.3s ease-in-out;
        overflow: hidden;
    }

    .mobile-nav.active {
        display: flex;
        position: relative; /* Allow it to push content */
    }

    .container.shifted {
        margin-top: 200px; /* Adjust this value based on the menu height */
        transition: margin-top 0.3s ease-in-out;
    }
    .mobile-nav a {
            color: white;
            padding: 10px;
            text-decoration: none;
            display: block;
            font-size: 20px;
        }

        .mobile-nav a:hover {
            background-color: #0077cc;
        }
}

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 90px 100px rgba(255, 0, 0, 0.4); /* Red shadow */
        }
        .about-img {
            width: 50%;
            height: auto;
            margin-top: 20px;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4); /* Blue shadow */
        }
        .description {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            width: 80%;
            text-align: left;
            font-size: 18px;
            line-height: 1.6;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .team-member {
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4); /* Blue shadow */
            text-align: center;
            width: 250px;
        }
            .team-member img {
    width: 100%;
    height: 180px; /* Reduced height */
    object-fit: cover; /* Ensures the images maintain aspect ratio */
    border-radius: 5px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

   
.team-member:hover img {
    transform: scale(1.1); /* Zoom effect */
    box-shadow: 0 10px 30px rgba(0, 238, 255, 0.6);
}

/* Animation for fade-in effect */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Apply the fade-in animation */
.team-member {
    animation: fadeIn 0.8s ease-in-out forwards;
    opacity: 0; /* Start hidden */
}

/* Delay each team member's animation for a cascading effect */
.team-member:nth-child(1) { animation-delay: 0.2s; }
.team-member:nth-child(2) { animation-delay: 0.4s; }
.team-member:nth-child(3) { animation-delay: 0.6s; }
.team-member:nth-child(4) { animation-delay: 0.8s; }
.team-member:nth-child(5) { animation-delay: 1s; }
.team-member:nth-child(6) { animation-delay: 1.2s; }
.team-member:nth-child(7) { animation-delay: 1.4s; }
.team-member:nth-child(8) { animation-delay: 1.6s; }
.team-member:nth-child(9) { animation-delay: 1.8s; }

        footer {
            background-color: #00aaff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        .social-media a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-size: 20px;
            transition: color 0.3s ease;
        }
        .social-media a:hover {
            color: #ffcc00; /* Yellow on hover */
        }

        /* Where We Are Located Section */
        .location {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            width: 80%;
            text-align: left;
            font-size: 18px;
            line-height: 1.6;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
        }
        .location h2 {
            color: blue;
            margin-bottom: 15px;
        }
        .location iframe {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
        }

        /* Animation for sliding in from the top */
        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply animation to elements */
        .animated {
            animation: slideInFromTop 1s ease-out forwards;
        }

        /* Delay animations for different sections */
        .animated.delay-1 {
            animation-delay: 0.5s;
        }
        .animated.delay-2 {
            animation-delay: 1s;
        }
        .animated.delay-3 {
            animation-delay: 1.5s;
        }
    </style>
</head>
<body>
<header>
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="testimonials.php">Testimonials</a>
    </nav>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileMenu">
        <a href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="testimonials.php">Testimonials</a>
    </div>
</header>

    <div class="container">
        <img src="images/image4.jpg" alt="Lexxy Spa & Barber Shop" class="about-img animated delay-1">
        <div class="description animated delay-2">
            <h2 style="color: blue;">Our Story</h2>
            <p>Lexxy Spa & Barber Shop was founded in 2010 with a small single-room salon offering basic grooming services. Over the years, through dedication and exceptional customer service, we expanded into a full-fledged spa and barber shop catering to a wide range of beauty and wellness needs.</p>
            <p>Initially, we started with just haircuts and simple facials. As demand grew, we introduced massage therapy, skincare treatments, and professional grooming services. Today, Lexxy Spa & Barber Shop is a well-known brand, trusted for its expertise and quality.</p>
            <p>Our journey has been incredible, thanks to our loyal customers and passionate team members. We strive to provide a relaxing and luxurious experience while keeping up with the latest trends in beauty and wellness.</p>
        </div>

        <!-- Where We Are Located Section -->
        <div class="location animated delay-3">
            <h2>Where We Are Located</h2>
            <p>Visit us at our conveniently located spa and barber shop in the heart of the city. We are easily accessible and offer ample parking for our clients.</p>
            <p><strong>Address:</strong> Pride Azure,Lantana Road, Nairobi,Kenya</p>
            <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8431866974634!2d36.7986448!3d-1.2667823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17cfaff6f27b%3A0x68578af5aac9f4a3!2sLexxy%20spa%20and%20barber%20shop!5e0!3m2!1sen!2ske!4v1740138929303!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <h2 style="color: blue;" class="animated delay-3">Meet Our Team</h2>
        <div class="team">
        <div class="team-member animated delay-3">
                <img src="images/receptionist.jpg" alt="Mark Johnson">
                <h3>Mark Oliver</h3>
                <p>Receptionist</p>
            </div>
            <div class="team-member animated delay-1">
                <img src="images/stylist.jpg" alt="John Doe">
                <h3>John Daniel</h3>
                <p>Founder & Lead Stylist</p>
            </div>
            <div class="team-member animated delay-2">
                <img src="images/therapist.jpg" alt="Jane Smith">
                <h3>Jane Simon</h3>
                <p>Senior Spa Therapist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/barber.jpg" alt="Mark Johnson">
                <h3>Mark peter</h3>
                <p>Barber Specialist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/barber2.jpg" alt="Mark Johnson">
                <h3>Lawrence Daniel</h3>
                <p>Barber Specialist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/masseur.jpg" alt="Mark Johnson">
                <h3>Lucy Felix</h3>
                <p>Masseur Specialist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/masseur2.jpg" alt="Mark Johnson">
                <h3>Caroh wycliffe</h3>
                <p>Masseur Specialist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/beutician.jpg" alt="Mark Johnson">
                <h3>Ivy Wavinya</h3>
                <p>Beutician Specialist</p>
            </div>
            <div class="team-member animated delay-3">
                <img src="images/beutician2.jpg" alt="Mark Johnson">
                <h3>Maryanne Mwende</h3>
                <p>Beutician Specialist</p>
            </div>
        </div>
    </div>

    <footer class="animated delay-3">
        <p>Follow us on</p>
        <div class="social-media">
            <a href="#" class="social-icon" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#" class="social-icon" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#" class="social-icon" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
        </div>
        <p>&copy; 2025 Lexxy Spa & Barber Shop. All rights reserved.</p>
    </footer>

    <script>
         function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    const container = document.querySelector('.container');

    menu.classList.toggle('active');
    
    if (menu.classList.contains('active')) {
        container.classList.add('shifted'); // Move container down
    } else {
        container.classList.remove('shifted'); // Reset position
    }
}

        // Ensure animations only play once when the page loads
        document.addEventListener("DOMContentLoaded", function () {
            const animatedElements = document.querySelectorAll(".animated");
            animatedElements.forEach((element) => {
                element.style.opacity = 0; // Start with elements hidden
            });

            // Trigger animations after a short delay
            setTimeout(() => {
                animatedElements.forEach((element) => {
                    element.style.opacity = 1; // Make elements visible
                });
            }, 100);
        });
    </script>
</body>
</html>