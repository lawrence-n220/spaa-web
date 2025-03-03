<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - High Rated Spa and Barber</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: #00aaff; /* Bright Blue */
      padding: 20px 0;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    header img {
      width: 90px; /* Adjust logo size */
      height: auto;
      margin-right: 10px;
    }

    header h1 {
      color: white;
      font-size: 2rem;
      margin-left: 10px;
    }

    header nav {
      display: flex; /* Show menu by default on larger screens */
    }

    header nav.active {
      display: block; /* Show menu when active */
    }

    header nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: row; /* Stack items horizontally on larger screens */
      align-items: center; /* Center items */
    }

    header nav ul li {
      margin: 0 10px; /* Space between items */
    }

    header nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 1.5rem;
    }

    .menu-btn {
      font-size: 2rem; /* Adjust size for visibility */
      display: none; /* Hide the menu button on larger screens */
      background: none;
      border: none;
      color: red;
      cursor: pointer;
    }

    /* Contact Information Section */
    .contact-info {
      padding: 60px 40px;
      background-color: #f9f9f9;
      text-align: center;
      box-shadow: 0 40px 90px rgba(218, 162, 201, 0.4);
    }

    .contact-info .info-container {
  max-width: 750px; /* Increased width */
  margin: 0 auto;
  box-shadow: 0 40px 90px rgba(0, 51, 255, 0.4);
  min-height: 400px; /* Increased height to fit contents */
  padding: 30px; /* Increased padding for better spacing */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}


    .contact-info h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .contact-info p {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .contact-info strong {
      font-weight: bold;
    }
    .contact-info i {
      color:red;
    }
    .call-icon {
  font-size: 1.5rem; /* Adjust icon size */
  color: red; /* Set icon color */
  text-decoration: none;
}

.call-icon:hover {
  color: #00aaff; /* Change color on hover */
}

    /* Social Icons */
    .social-icons {
      margin-top: 20px;
      color: red;
    }

    .social-icon {
      font-size: 2rem;
      margin: 0 10px;
      color: red; /* Red color for social icons */
      text-decoration: none;
    }

    .social-icon:hover {
      color: #00aaff; /* Bright Blue */
    }

    /* Book Appointment Button */
    .book-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #00aaff; /* Bright Blue */
      color: white;
      font-size: 1.2rem;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
    }

    .book-btn:hover {
      background-color: #0088cc; /* Darker Blue */
    }

    /* Footer */
    footer {
      background-color: #00aaff;
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: auto; /* Push footer to the bottom */
    }

    .social-links {
      margin-bottom: 15px;
    }

    .social-links a {
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
      margin: 0 10px;
    }

    footer p {
      font-size: 1rem;
      margin-top: 10px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        padding: 15px;
      }

      header img {
        width: 150px;
        margin-bottom: 10px;
      }

      header h1 {
        font-size: 1.5rem;
        margin-left: 0;
      }

      header nav ul {
        flex-direction: column; /* Stack items vertically on mobile */
        display: none; /* Hide menu by default on mobile */
      }

      header nav.active ul {
        display: flex; /* Show menu when active */
      }

      header nav ul li {
        margin-right: 0;
        margin-bottom: 10px;
        font-size:3.0rem;
      }

      .contact-info {
        padding: 20px 10px;
      }

      .contact-info .info-container {
        max-width: 90%;
        padding: 15px;
      }

      .social-icon {
        font-size: 1.5rem;
      }

      .book-btn {
        font-size: 1rem;
        padding: 8px 15px;
      }

      footer p {
        font-size: 0.9rem;
      }

      /* Show menu button on mobile */
      .menu-btn {
        display: block;
        margin-top: 15px;
      }
    }

    @media (max-width: 480px) {
      header img {
        width: 60px;
      }

      header h1 {
        font-size: 1.2rem;
      }

      .contact-info h2 {
        font-size: 1.5rem;
      }

      .contact-info p {
        font-size: 1rem;
      }

      .social-icon {
        font-size: 1.2rem;
      }

      .book-btn {
        font-size: 1rem;
        padding: 8px 12px;
      }

      footer p {
        font-size: 0.8rem;
      }
    }

    /* Animations */
    @keyframes slideInFromBottom {
      from {
        opacity: 0;
        transform: translateY(100%);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animated {
      opacity: 0; /* Start hidden */
      animation: slideInFromBottom 1s ease-out forwards;
    }

    /* Delays for animations */
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
  <!-- Font Awesome CDN for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header class="animated">
    <img src="images/image4.jpg" alt="Logo"> <!-- Add your logo here -->
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <nav id="nav-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  
  </header>
  

  <!-- Contact Information Section -->
  <section class="contact-info animated delay-1">
    <div class="info-container">
      <h2>Contact Information</h2>
      <p><strong>Phone:</strong> +254740000555 <i class="fas fa-phone-alt"></i></p>
      <p><strong>Email:</strong> lexxyspa@gmail.com.com <i class="fas fa-envelope"></i></p>
      <p><strong>Address:</strong> Pride Azure,Lantana Road, Nairobi,Kenya <i class="fas fa-map-marker-alt"></i></p>
      <div class="social-icons">
        <!-- WhatsApp Link -->
        <a href="https://wa.me/254740000555?text=Hello%20Lexxy%20Spa%20and%20Barber%20Shop%2C%20I%20would%20like%20to%20book%20an%20appointment%20with%20you." 
   class="social-icon" target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>


        <a href="tel:+254740000555" class="call-icon"><i class="fas fa-phone-alt"></i>
        <a href="sms:+254740000555?body=Hello%20Lexxy%20Spa%20and%20Barber%20Shop%2C%20I%20would%20like%20to%20book%20an%20appointment%20with%20you" 
   class="call-icon">
  <i class="fas fa-comment-alt"></i>
</a>



</a>
        <!-- Facebook Link -->
        <a href="https://www.facebook.com/lexxyspa" class="social-icon" target="_blank"><i class="fab fa-facebook"></i></a>
        <!-- Twitter Link -->
        <a href="https://twitter.com/lexxyspa" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        <!-- Instagram Link -->
        <a href="https://www.instagram.com/lexxyspaSpa" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      <p style="color: red; font-size: 1rem; margin-top: 10px;">
  Click on an icon of your preference to book an appointment.
</p>
      <a href="https://wa.me/254740000555" class="book-btn">Book Appointment</a>
    </div>
  </section>

  <!-- Footer with Social Links -->
  <footer class="animated delay-2">
  <div class="social-links">
    <a href="https://www.facebook.com/HighRatedSpa" class="social-icon" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com/HighRatedSpa" class="social-icon" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="https://twitter.com/HighRatedSpa" class="social-icon" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
  </div>
  <p>© 2025 High Rated Spa and Barber. All Rights Reserved.</p>
  <p>System designed with love by 
  <a href="https://wa.me/254768407740?text=Hello%20Lawrence,%20I%20hope%20you're%20doing%20well.%20I'd%20love%20to%20have%20a%20quick%20chat%20with%20you." 
   style="color: red; text-decoration: underline; font-weight: bold; font-size: 1.2rem;" 
   target="_blank">
   Lawrence Nyamai
</a>
</p>

</footer>


  <script>
    function toggleMenu() {
      let menu = document.getElementById("nav-menu");
      menu.classList.toggle("active");
    }

    window.addEventListener("resize", function () {
      let menu = document.getElementById("nav-menu");
      if (window.innerWidth > 768) {
        menu.classList.add("active");
      } else {
        menu.classList.remove("active");
      }
    });

    // Trigger animations on page load
    document.addEventListener("DOMContentLoaded", function () {
      const animatedElements = document.querySelectorAll(".animated");
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