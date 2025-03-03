<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials - High Rated Spa and Barber</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: rgb(239, 223, 223);
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      align-items: center;
    }

    /* Header Styling */
    header {
      background-color: #00aaff;
      padding: 15px 20px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      animation: slideInFromTop 1s ease-out; /* Header animation */
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
    }

    header img {
      width: 80px;
      height: auto;
      transition: transform 0.3s ease; /* Logo hover effect */
    }

    header img:hover {
      transform: scale(1.1); /* Slightly enlarge logo on hover */
    }

    nav {
      display: flex;
      align-items: center;
    }

    nav ul {
      list-style: none;
      display: flex;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
      transition: color 0.3s ease, transform 0.3s ease; /* Link hover effect */
    }

    nav ul li a:hover {
      color: #ffcc00; /* Yellow on hover */
      transform: translateY(-3px); /* Slight lift on hover */
    }

    /* Responsive Navigation */
    .menu-btn {
      display: none;
      font-size: 2rem;
      background: none;
      border: none;
      color: white;
      cursor: pointer;
      transition: transform 0.3s ease; /* Button hover effect */
    }

    .menu-btn:hover {
      transform: rotate(90deg); /* Rotate button on hover */
    }

    @media (max-width: 768px) {
      nav ul {
        display: none;
        flex-direction: column;
        background-color: #00aaff;
        position: absolute;
        top: 60px;
        right: 0;
        width: 200px;
        text-align: center;
        padding: 10px 0;
      }

      nav ul li {
        margin: 10px 0;
      }

      .menu-btn {
        display: block;
      }
    }

    /* Hero Image - Centered */
    .hero-image {
      width: 60%;
      max-width: 700px;
      height: auto;
      display: block;
      margin: 100px auto 20px;
      border-radius: 10px;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
      opacity: 0; /* Start hidden */
      animation: fadeInUp 1s ease-out 0.5s forwards; /* Hero image animation */
    }

    /* Testimonials Section */
    .testimonials {
      text-align: center;
      padding: 40px 20px;
      max-width: 700px;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
      opacity: 0; /* Start hidden */
      animation: fadeInUp 1s ease-out 1s forwards; /* Testimonials animation */
    }

    .testimonial-box {
      background: white;
      padding: 20px;
      border-radius: 10px;
      min-height: 180px;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
    }

    .testimonial-box.show {
      opacity: 1;
      transform: translateY(0);
    }

    .testimonial-box p {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .testimonial-author {
      font-weight: bold;
      color: #00aaff;
      font-size: 1rem;
    }

    /* Buttons */
    .slider-buttons {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
    }

    .slider-buttons button {
      padding: 10px 20px;
      font-size: 1rem;
      background-color: #00aaff;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease, transform 0.3s ease; /* Button hover effect */
    }

    .slider-buttons button:hover {
      background-color: #0088cc;
      transform: translateY(-3px); /* Slight lift on hover */
    }

    /* Footer */
    footer {
      background-color: #00aaff;
      color: white;
      text-align: center;
      padding: 20px 0;
      width: 100%;
      margin-top: auto;
      animation: slideInFromBottom 1s ease-out; /* Footer animation */
    }

    /* Social Media Icons */
    .social-links {
      margin-top: 10px;
    }

    .social-links a {
      color: white;
      font-size: 1.5rem;
      margin: 0 10px;
      text-decoration: none;
      transition: color 0.3s ease, transform 0.3s ease; /* Social icon hover effect */
    }

    .social-links a:hover {
      color: #ffcc00; /* Yellow on hover */
      transform: translateY(-3px); /* Slight lift on hover */
    }

    /* Animations */
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

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

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
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <img src="images/image4.jpg" alt="Logo"> 
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <nav>
      <ul id="nav-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Image (Centered) -->
  <img src="images/testimonials.jpg" alt="Spa and Barber" class="hero-image">

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-box show" id="testimonial-box">
      <p id="testimonial-text">"This spa is the best! Amazing service and friendly staff!"</p>
      <p class="testimonial-author" id="testimonial-author">- Jane Doe</p>
    </div>

    <!-- Next/Prev Buttons -->
    <div class="slider-buttons">
      <button onclick="prevTestimonial()">Prev</button>
      <button onclick="nextTestimonial()">Next</button>
    </div>
  </section>

  

  <!-- Footer -->
  <footer>
    <p>© 2025 Lexxy Spa and Barber. All Rights Reserved.</p>
    <div class="social-links">
      <a href="#"><b>Facebook</b></a>
      <a href="#"><b>Twitter</b></a>
      <a href="#"><b>Instagram</b></a>
    </div>
  </footer>

  <script>
    // Testimonials Data
    const testimonials = [
      { text: "This spa is the best! Amazing service and friendly staff!", author: "Jane Doe" },
      { text: "I love the ambiance and professionalism here. Highly recommend!", author: "John Smith" },
      { text: "Best haircut and massage experience ever!", author: "Sarah Johnson" }
    ];

    let currentIndex = 0;

    function updateTestimonial() {
      let box = document.getElementById("testimonial-box");
      box.classList.remove("show");

      setTimeout(() => {
        document.getElementById("testimonial-text").textContent = testimonials[currentIndex].text;
        document.getElementById("testimonial-author").textContent = `- ${testimonials[currentIndex].author}`;
        box.classList.add("show");
      }, 500); // Delay for smooth animation
    }

    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      updateTestimonial();
    }

    function prevTestimonial() {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      updateTestimonial();
    }

    // Toggle Navigation Menu for Mobile
    function toggleMenu() {
      let menu = document.getElementById("nav-menu");
      menu.style.display = menu.style.display === "flex" ? "none" : "flex";
    }

    // Automatically reset menu when resizing from mobile to desktop
    window.addEventListener("resize", function () {
      let menu = document.getElementById("nav-menu");
      if (window.innerWidth > 768) {
        menu.style.display = "flex"; // Ensure menu is visible on larger screens
      } else {
        menu.style.display = "none"; // Hide menu on smaller screens
      }
    });
  </script>
</body>
</html>