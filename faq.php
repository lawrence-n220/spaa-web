<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Lexxy Best Spa and Barber Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #007BFF; /* Bright Blue */
            color: white;
            box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
            transition: background 0.3s ease; /* Smooth background transition */
        }

        header:hover {
            background: #0056b3; /* Darker blue on hover */
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
            padding-bottom: 5px;
            margin-right: 100px; /* Space for underline */
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

        /* FAQ Section */
        .faq-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .faq h2 {
            color: #007BFF;
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-question {
            background: #007BFF;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease, transform 0.2s ease; /* Smooth background and transform */
            border-radius: 5px;
        }

        .faq-answer {
            display: none; /* Hide answers by default */
            padding: 10px;
            background: #f0f0f0;
            border-left: 4px solid #007BFF;
            font-size: 16px;
            transition: max-height 0.3s ease, padding 0.3s ease; /* Smooth transition for height and padding */
            overflow: hidden; /* Hide overflow */
        }

        .faq-question:hover {
            background: #0056b3;
            transform: scale(1.02); /* Slightly enlarge on hover */
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #007BFF;
            color: white;
            transition: background 0.3s ease; /* Smooth background transition */
        }

        footer:hover {
            background: #0056b3; /* Darker blue on hover */
        }

        /* Social Icons */
        .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 24px;
            transition: color 0.3s ease, transform 0.3s ease; /* Smooth color and transform */
        }

        .social-icons a:hover {
            color: #FFD700; /* Gold color on hover */
            transform: scale(1.2); /* Slightly enlarge on hover */
        }
    </style>
</head>
<body>
<header>
    <img src="images/image4.jpg" alt="Logo">
    <div class="hamburger" id="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <nav>
        <ul>
            <li><a href="index.php"><i class=""></i> Home</a></li>
            <li><a href="about.php"><i class=""></i> About</a></li>
            <li><a href="services.php"><i class=""></i> Services</a></li>
            <li><a href="contact.php"><i class=""></i> Contact</a></li>
            <li><a href="testimonials.php"><i class=""></i> Testimonials</a></li>
            <li><a href="faq.php"><i class=""></i> FAQs</a></li>
        </ul>
    </nav>
</header>

<!-- FAQ Section -->
<section class="faq-section">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-item">
        <div class="faq-question">What are your operating hours?</div>
        <div class="faq-answer">We are open from 8:00 AM to 10:00 PM, Monday to Saturday, and 9:00 AM to 8:00 PM on Sundays.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Do I need to book an appointment?</div>
        <div class="faq-answer">We recommend booking an appointment, but we also accept walk-ins based on availability. Visit our service page to book an appointment with us.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">What payment methods do you accept?</div>
        <div class="faq-answer">We accept cash, credit/debit cards, and mobile payments like Apple Pay and Google Pay.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Are your products safe for sensitive skin?</div>
        <div class="faq-answer">Yes, we use high-quality, skin-friendly, and organic products suitable for all skin types.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Do you offer gift cards?</div>
        <div class="faq-answer">Yes, we offer gift cards that can be used for any of our services.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Can I bring my child for a haircut?</div>
        <div class="faq-answer">Yes, we offer haircuts for children of all ages.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">What if I need to cancel my appointment?</div>
        <div class="faq-answer">Please notify us at least 24 hours in advance if you need to cancel or reschedule.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Do you have parking?</div>
        <div class="faq-answer">Yes, we offer free parking for our customers. There are designated parking spots available right in front of our establishment.</div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Lexxy SPA & Barber Shop. All Rights Reserved.</p>
    <div class="social-icons">
        <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%20Shop%2C%20I%20would%20like%20to%20book%20an%20appointment%20with%20you." target="_blank"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.facebook.com/share/1FSPL6DX5K/" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.tiktok.com/@lexxyspa?_t=ZM-8uPaqgDJlQ5&_r=1" class="social-icon" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.instagram.com/lexxyspa_babershop?igsh=MW8yY25pbmV6MDhvaw==" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

<script>
    // Hamburger Menu Toggle Functionality
    const hamburger = document.getElementById('hamburger');
    const navList = document.querySelector('nav ul');

    hamburger.addEventListener('click', () => {
        navList.classList.toggle('active'); // Toggle the 'active' class to show/hide the menu
    });

    // FAQ Toggle Functionality
    document.querySelectorAll('.faq-question').forEach((question, index, allQuestions) => {
        question.addEventListener('click', () => {
            // Hide all other answers
            allQuestions.forEach(q => {
                if (q !== question) {
                    const answer = q.nextElementSibling;
                    answer.classList.remove('show'); // Remove show class
                    answer.style.display = 'none'; // Hide answer
                }
            });
            // Toggle the clicked question's answer
            const answer = question.nextElementSibling;
            if (answer.classList.contains('show')) {
                answer.classList.remove('show'); // Remove show class
                answer.style.display = 'none'; // Hide answer
            } else {
                answer.classList.add('show'); // Add show class
                answer.style.display = 'block'; // Show answer
            }
        });
    });
</script>
</body>
</html>