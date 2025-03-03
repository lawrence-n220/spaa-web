<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <li><a href="#index"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="#services"><i class="fas fa-spa"></i> Services</a></li>
                <li><a href="#contact"><i class="fas fa-phone"></i> Contact</a></li>
                <li><a href="#testimonials"><i class="fas fa-comments"></i> Testimonials</a></li>
            </ul>
        </nav>
    </header>
    <script>
         const hamburger = document.getElementById('hamburger');
        const navList = document.querySelector('nav ul');
        hamburger.addEventListener('click', () => {
            navList.classList.toggle('active');
        });

    </script>
</body>
</html>