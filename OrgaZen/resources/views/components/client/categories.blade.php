<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Event Categories</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        img {
            max-width: 100%;
        }
        
        /* Color Palette */
        :root {
            --primary: #A0522D;       /* Vibrant pink-red */
            --primary-dark: #E31C5F;  /* Darker shade for hover */
            --secondary: #5E17EB;     /* Rich purple */
            --accent: #00D1FF;        /* Bright cyan */
            --dark: #1A1A2E;          /* Near black with slight blue tint */
            --light: #F8F8F8;         /* Off-white */
            --gray: #767676;          /* Medium gray */
            --success: #34D399;       /* Green */
        }
        
        /* Typography */
        h1, h2, h3, h4, h5 {
            font-weight: 700;
            line-height: 1.2;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #4A11C5;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(94, 23, 235, 0.3);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn-outline:hover {
            background-color: white;
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
        }
        
        /* Header */
        header {
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 8px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 28px;
        }
        
        .nav-links a {
            font-weight: 600;
            position: relative;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -6px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
       
        
        /* .nav-links a:hover::after {
            width: 100%;
        } */
        
        .cta-buttons {
            display: flex;
            align-items: center;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        /* .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 56, 92, 0.3);
        } */
        
        /* Event Categories Section */
        .event-categories {
            padding: 120px 0 80px;
            background-color: #f9f9f9;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h1 {
            font-size: 42px;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .category-card {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        /* .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        } */
        
        .category-img {
            height: 250px;
            position: relative;
            overflow: hidden;
        }
        
        .category-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        /* .category-card:hover .category-img img {
            transform: scale(1.1);
        } */
        
        .category-info {
            padding: 24px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .category-info h3 {
            font-size: 22px;
            margin-bottom: 12px;
            color: var(--dark);
        }
        
        .category-info p {
            color: var(--gray);
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .category-cta {
            margin-top: auto;
            padding-bottom: 24px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-calendar-star"></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Service Providers</a></li>
                </ul>
                
                <div class="cta-buttons">
                    <a href="#" class="login-btn">Log In</a>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Event Categories Section -->
    <section class="event-categories" id="event-categories">
        <div class="container">
            <div class="section-title">
                <h1>Choose Your Event Now</h1>
                <p>Explore our diverse range of event categories and start planning your perfect celebration with our expert service providers.</p>
            </div>
            
            <div class="categories-grid">
                <!-- Wedding Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Wedding Events">
                    </div>
                    <div class="category-info">
                        <h3>Wedding</h3>
                        <p>From intimate ceremonies to grand celebrations, find the perfect wedding planner to make your dream day come true.</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Wedding Event</a>
                        </div>
                    </div>
                </div>
                
                <!-- Birthday Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Birthday Events">
                    </div>
                    <div class="category-info">
                        <h3>Birthday</h3>
                        <p>Celebrate birthdays with unforgettable parties tailored to all ages and styles. Let's make memories!</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Birthday Event</a>
                        </div>
                    </div>
                </div>
                
                <!-- Corporate Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Events">
                    </div>
                    <div class="category-info">
                        <h3>Corporate</h3>
                        <p>Professional event planning for conferences, team-building, product launches, and company celebrations.</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Corporate Event</a>
                        </div>
                    </div>
                </div>
                
                <!-- Festival Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Festival Events">
                    </div>
                    <div class="category-info">
                        <h3>Festival</h3>
                        <p>Organize vibrant and exciting festivals with comprehensive event management services.</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Festival Event</a>
                        </div>
                    </div>
                </div>
                
                <!-- Private Party Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Private Party Events">
                    </div>
                    <div class="category-info">
                        <h3>Private Party</h3>
                        <p>Curate intimate and personalized gatherings with our specialized private party event planners.</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Private Party</a>
                        </div>
                    </div>
                </div>
                
                <!-- Graduation Category -->
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Graduation Events">
                    </div>
                    <div class="category-info">
                        <h3>Graduation</h3>
                        <p>Celebrate academic achievements with memorable graduation ceremonies and parties.</p>
                        <div class="category-cta">
                            <a href="#" class="btn btn-primary">Create Graduation Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>