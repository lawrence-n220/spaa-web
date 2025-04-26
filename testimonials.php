<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials -Lexxy Best Spa and barber shop</title>
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
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
    }

    header img {
      width: 80px;
      height: auto;
      transition: transform 0.3s ease; /* Logo hover effect */
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

    /* Hamburger Menu */
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
        display: none; /* Hide menu by default on small screens */
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
        display: block; /* Show hamburger button on small screens */
      }
    }

    /* Testimonials Section */
    .testimonials {
      text-align: center;
      padding: 40px 20px;
      max-width: 700px;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
      margin-top: 100px; /* To avoid overlap with header */
    }

    /* Hero Image */
    .hero-image {
      margin-top: 120px; /* Adjust this value to create space from the header */
    }

    /* Typing Effect */
    .typing-effect {
      font-size: 1.5rem;
      font-weight: bold;
      color: #00aaff; /* Initial color */
      white-space: nowrap; /* Prevent line breaks */
      overflow: hidden; /* Hide overflow */
      border-right: 2px solid; /* Cursor effect */
      animation: blink 0.7s step-end infinite; /* Blinking cursor */
    }

    @keyframes blink {
      50% {
        border-color: transparent; /* Blink effect */
      }
    }

    /* Slider Images */
    .slider-container {
      position: relative;
      max-width: 700px;
      margin: 20px auto;
      overflow: hidden;
    }

    .slider-image {
      width: 100%;
      display: none; /* Hide all images by default */
      border-radius: 10px;
      box-shadow: 0 40px 90px rgba(0, 238, 255, 0.4);
      position: relative; /* Position relative for absolute children */
    }

    .slider-image.show {
      display: block; /* Show the current image */
    }

    .slider-image img {
      width: 100%; /* Make the image take the full width */
      height: 300px; /* Set a fixed height */
      object-fit: cover; /* Maintain aspect ratio and cover the area */
      border-radius: 10px; /* Match the container's border radius */
    }

    /* Review Overlay (Outside the Slider Container) */
    .review-overlay {
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px;
      border-radius: 5px;
      width: 100%;
      max-width: 700px; /* Match the slider container width */
      margin: 20px auto; /* Center the overlay */
      text-align: center;
    }

    .review-overlay .stars {
      color: #ffcc00; /* Gold color for stars */
    }

       /* Google Icon and Encouragement */
       .google-review {
      margin-top: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .google-review img {
      width: 30px; /* Adjust size as needed */
      margin-right: 10px;
    }

    /* Navigation Arrows */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(245, 241, 248, 0.5);
      color: red;
      border: none;
      padding: 10px;
      cursor: pointer;
      z-index: 10;
      font-size:2.0em;
    }

    .arrow.left {
      left: 10px;
    }

    .arrow.right {
      right: 10px;
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
   

    /* Important Links Section */
.important-links {
  text-align: center;
  padding: 40px 20px;
  background-color: #f0f0f0; /* Light background for contrast */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  border-radius: 10px;
}

.important-links h2 {
  color: #00aaff; /* Match the theme color */
  margin-bottom: 20px;
}

.button-container {
  display: flex;
  justify-content: center;
  gap: 20px; /* Space between buttons */
}

.link-button {
  background-color: #00aaff; /* Button color */
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 1.1rem;
  transition: background-color 0.3s ease, transform 0.3s ease; /* Transition for hover effect */
}

.link-button:hover {
  background-color: #0077cc; /* Darker shade on hover */
  transform: translateY(-3px); /* Lift effect on hover */
}

/* Media Query for Small Screens */
@media (max-width: 768px) {
  .button-container {
    flex-direction: column; /* Stack buttons vertically */
    align-items: stretch; /* Make buttons take full width */
  }

  .link-button {
    width: 100%; /* Make each button take full width */
    margin: 10px 0; /* Add some space between buttons */
  }
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
        <li><a href="faq.php">FAQS</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Image (Centered) -->
  <img src="images/testimonials.jpg" alt="Spa and Barber" class="hero-image">

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>See What Our</h2>
    <h2>Customers Say </h2>
    
    
    <div class="typing-effect" id="typingText"></div>

    <!-- Slider Images -->
    <div class="slider-container">
  <div class="slider-image show">
    <img src="images/te1.png" alt="Testimonial 1">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
  
  </div>
  
  <div class="slider-image">
    <img src="images/te2.png" alt="Testimonial 2">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
   
  </div>
  
  <div class="slider-image">
    <img src="images/te3.png" alt="Testimonial 3">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
    
  </div>
  
  <div class="slider-image">
    <img src="images/te4.png" alt="Testimonial 4">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
   
  </div>
  
  <div class="slider-image">
    <img src="images/te5.png" alt="Testimonial 5">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
    
  </div>
  <div class="slider-image">
    <img src="images/te6.png" alt="Testimonial 5">
    <img src="images/google.png" alt="Google Review" class="google-icon" style="position: absolute; top: 10px; right: 10px; width: 40px; height: auto;">
  
  </div>
  
  <button class="arrow left" onclick="prevImage()">&#10094;</button>
  <button class="arrow right" onclick="nextImage()">&#10095;</button>
</div>

    <!-- Review Overlay (Moved Outside the Slider Container) -->
    
  </section>

  <!-- Important Links Section -->
  <section class="important-links">
    <h2>Important Links</h2>
    <div class="button-container">
      <a href="https://search.google.com/local/writereview?placeid=ChIJe_L2r88XLxgRo_TJqvWKV2g" target="_blank" class="link-button">Write a Review</a>
      <a href="https://g.co/kgs/F9GyiyA" target="_blank" class="link-button">Lexxy Spa and Barber Shop Profile</a>
      <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=/maps/uv%3Fpb%3D!1s0x182f17cfaff6f27b:0x68578af5aac9f4a3!3m1!7e115!4s/maps/place/lexxy%252Bspa%252Band%252Bbarber%252Bshop/%40-1.2670799,36.7986957,3a,75y,350.29h,90t/data%253D*213m4*211e1*213m2*211suySclWOCk62yRLfFyiyRhg*212e0*214m2*213m1*211s0x182f17cfaff6f27b:0x68578af5aac9f4a3%3Fsa%253DX%2526ved%253D2ahUKEwjVuOeahPOLAxVXgf0HHcelO2wQpx96BAgtEAA!5slexxy%2Bspa%2Band%2Bbarber%2Bshop%2B-%2BGoogle%2BSearch!15zQ2dJZ0FRPT0%26imagekey%3D!1e2!2suySclWOCk62yRLfFyiyRhg%26cr%3Dle_a7%26hl%3Den%26ved%3D1t:206134%26ictx%3D111&ved=2ahUKEwjVuOeahPOLAxVXgf0HHcelO2wQtsoMegQIPxAQ&usg=AOvVaw1l_lPOUZb2_9uWLaN0SkkF" target="_blank" class="link-button">Pride Inn Azure and Its Environment</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Lexxy Spa and Barber. All Rights Reserved.</p>
    <div class="social-links">
      <a href="https://www.facebook.com/share/1FSPL6DX5K/"><b>Facebook</b></a>
      <a href="https://www.tiktok.com/@lexxyspa?_t=ZM-8uPaqgDJlQ5&_r=1"><b>Tiktok</b></a>
      <a href="https://www.instagram.com/lexxyspa_babershop?igsh=MW8yY25pbmV6MDhvaw=="><b>Instagram</b></a>
    </div>
  </footer>

  <script>
    // Typing Effect
    const typingText = document.getElementById('typingText');
    const textToType = "Click here to review us";
    let index = 0;

    function typeText() {
      if (index < textToType.length) {
        typingText.textContent += textToType.charAt(index);
        index++;
        setTimeout(typeText, 150); // Adjust typing speed here
      } else {
        // Make the text a clickable link
        typingText.innerHTML = `<a href="https://search.google.com/local/writereview?placeid=ChIJe_L2r88XLxgRo_TJqvWKV2g" target="_blank" class="review-link">${textToType}</a>`;
        typingText.style.color = getRandomColor(); // Change color after typing is complete
      }
    }

    function getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }

    // Slider Images
    const images = document.querySelectorAll('.slider-image');
    const reviewText = document.getElementById('review-text');
    let currentImageIndex = 0;

    

    function showImage(index) {
      images.forEach((img, i) => {
        img.classList.remove('show');
        if (i === index) {
          img.classList.add('show');
        }
      });
      // Update the review text
      reviewText.textContent = reviews[index];
    }

    function nextImage() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      showImage(currentImageIndex);
    }

    function prevImage() {
      currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
      showImage(currentImageIndex);
    }

    // Automatically change images every 30 seconds
    setInterval(nextImage, 20000); // 30000 milliseconds = 30 seconds

    // Start typing effect
    window.onload = function() {
      typeText();
      showImage(currentImageIndex); // Show the first image and review
    };

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