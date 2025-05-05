<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen -Event Planning</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset & Base Styles */
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
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 56, 92, 0.3);
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
        
        .cta-buttons {
            display: flex;
            align-items: center;
        }
        
        .login-btn {
            font-weight: 600;
            margin-right: 16px;
        }
        
        /* Hero Section */
        .hero {
            background: url('https://images.pexels.com/photos/14608968/pexels-photo-14608968.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 56px;
            margin-bottom: 24px;
            letter-spacing: -0.5px;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 32px;
            opacity: 0.95;
        }
        
        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 16px;
        }
        
        /* Featured Events */
        .featured-events {
            padding: 100px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 36px;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .event-card {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .event-img {
            height: 200px;
            position: relative;
            overflow: hidden;
        }
        
        .event-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        
        .event-category {
            position: absolute;
            top: 16px;
            left: 16px;
            background-color: var(--primary);
            color: white;
            padding: 6px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        
        .event-info {
            padding: 24px;
        }
        
        .event-info h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }
        
        .event-meta {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            color: var(--gray);
            font-size: 14px;
        }
        
        .event-meta i {
            margin-right: 6px;
        }
        
        .event-meta span {
            margin-right: 16px;
        }
        
        .event-cta {
            margin-top: 16px;
        }
        
        /* Why Choose Us */
        .why-choose {
            padding: 100px 0;
            background-color: #f9f9f9;
        }
        
        .flex-row {
            display: flex;
            align-items: center;
            gap: 60px;
        }
        
        .why-img {
            flex: 1;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .why-content {
            flex: 1;
        }
        
        .why-content h2 {
            font-size: 36px;
            margin-bottom: 24px;
        }
        
        .why-feature {
            display: flex;
            margin-bottom: 24px;
        }
        
        .feature-icon {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            background-color: rgba(255, 56, 92, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 20px;
            margin-right: 16px;
        }
        
        .feature-text h3 {
            font-size: 20px;
            margin-bottom: 8px;
        }
        
        /* Services Section */
        .services {
            padding: 100px 0;
            background-color: white;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .service-card {
            background-color: white;
            border-radius: 16px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
  
        
        .service-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(94, 23, 235, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            font-size: 32px;
            margin: 0 auto 24px;
            transition: all 0.3s ease;
        }

        
        .service-card h3 {
            font-size: 22px;
            margin-bottom: 16px;
        }
        
        .service-card p {
            color: var(--gray);
            margin-bottom: 24px;
        }
        
        /* How It Works */
        .how-it-works {
            padding: 100px 0;
            background-color: var(--light);
        }
        
        .steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 60px;
        }
        
        .steps::before {
            content: '';
            position: absolute;
            top: 45px;
            left: 100px;
            right: 100px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            z-index: 1;
        }
        
        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }
        
        .step-number {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            font-weight: 700;
            margin: 0 auto 30px;
            position: relative;
            box-shadow: 0 10px 30px rgba(94, 23, 235, 0.3);
        }
        
        .step h3 {
            font-size: 22px;
            margin-bottom: 16px;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background-color: white;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 80px;
            color: rgba(94, 23, 235, 0.1);
            font-family: Georgia, serif;
            line-height: 0.8;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 24px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 16px;
            overflow: hidden;
        }
        
        .author-info h4 {
            font-size: 18px;
            margin-bottom: 4px;
        }
        
        .author-info p {
            color: var(--gray);
            font-size: 14px;
        }
        
        .stars {
            color: #FFC107;
            margin-top: 8px;
        }
        
        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            margin-bottom: 24px;
        }
        
        .cta p {
            font-size: 18px;
            margin-bottom: 32px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .footer-logo {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
        }
        
        .footer-logo i {
            margin-right: 8px;
            color: var(--primary);
        }
        
        .footer-info p {
            margin-bottom: 16px;
            opacity: 0.8;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 24px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            opacity: 1;
            padding-left: 5px;
            color: var(--primary);
        }
        
        .footer-contact i {
            width: 30px;
            color: var(--primary);
        }
        
        .footer-contact p {
            margin-bottom: 16px;
            display: flex;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .copyright {
            opacity: 0.7;
        }
        
        .social-links {
            display: flex;
            gap: 16px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 42px;
            }
            
            .steps::before {
                left: 60px;
                right: 60px;
            }
            
            .flex-row {
                flex-direction: column;
                gap: 40px;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .steps {
                flex-direction: column;
                gap: 40px;
            }
            
            .steps::before {
                height: 0;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 12px;
            }
            
            .nav-links {
                display: none;
            }
            
            .mobile-toggle {
                display: block;
                font-size: 24px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class=""></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="{{Route('components.client.home')}}">Home</a></li>
                    <li><a href="{{Route('components.client.categories')}}">Events</a></li>
                    <li><a href="{{ route('components.client.EventHistory', ['id' => auth()->user()->id]) }}">History</a></li>
                    <li><a href="{{Route('components.client.providers')}}">Service Providers</a></li>
                </ul>
                <div class="cta-buttons">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1>Elevate Your Events with Professional Touch</h1>
            <p>Connect with top-tier event specialists to create moments that last a lifetime. From intimate gatherings to grand celebrations - make every detail perfect.</p>
            <div class="hero-btns">
                <a href="#" class="btn btn-primary">Start Planning</a>
            </div>
        </div>
    </section>
    
    <!-- Featured Events -->
    <section class="featured-events" id="events">
        <div class="container">
            <div class="section-title">
                <h2>Owr popular events</h2>
                <p>Explore our diverse range of event specialists ready to bring your vision to life</p>
            </div>
            
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Wedding">
                        <span class="event-category">Wedding</span>
                    </div>
                    <div class="event-info">
                        <h3>Dream Weddings</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-user-group"></i> 10-1000 guests</span>
                            <span><i class="fas fa-tag"></i> From $5000</span>
                        </div>
                        <p>Create the wedding of your dreams with our expert planners who handle every detail from venue to vows.</p>
                        <div class="event-cta">
                        </div>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-img">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate">
                        <span class="event-category">Corporate</span>
                    </div>
                    <div class="event-info">
                        <h3>Business Events</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-user-group"></i> 20-500 guests</span>
                            <span><i class="fas fa-tag"></i> From $3000</span>
                        </div>
                        <p>Elevate your brand with professional corporate events from conferences to product launches.</p>
                        <div class="event-cta">
                        </div>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-img">
                        <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Birthday">
                        <span class="event-category">Birthday</span>
                    </div>
                    <div class="event-info">
                        <h3>Birthday Celebrations</h3>
                        <div class="event-meta">
                            <span><i class="fas fa-user-group"></i> 10-200 guests</span>
                            <span><i class="fas fa-tag"></i> From $800</span>
                        </div>
                        <p>Make their special day unforgettable with themed parties and bespoke experiences for all ages.</p>
                        <div class="event-cta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="why-choose" id="why">
        <div class="container">
            <div class="flex-row">
                <div class="why-img">
                    <img src="https://images.pexels.com/photos/2085519/pexels-photo-2085519.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Why Choose Orgazen">
                </div>
                <div class="why-content">
                    <h2>Why Choose Orgazen?</h2>
                    <p>We're transforming how events are planned with a focus on quality, reliability, and magical experiences.</p>
                    
                    <div class="why-feature">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Vetted Professionals</h3>
                            <p>We personally vet all service providers to ensure exceptional quality and reliability for your events.</p>
                        </div>
                    </div>
                    
                    <div class="why-feature">
                        <div class="feature-icon">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Secure Payments</h3>
                            <p>Our secure payment system protects your transactions with advanced encryption and buyer protection.</p>
                        </div>
                    </div>
                    
                    <div class="why-feature">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Personalized Support</h3>
                            <p>Dedicated event specialists available 24/7 to assist with any questions or special requirements.</p>
                        </div>
                    </div>
                    
                    <div class="why-feature">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="feature-text">
                            <h3>5-Star Experiences</h3>
                            <p>Join thousands of satisfied clients who've created unforgettable events with our platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Comprehensive Event Services</h2>
                <p>Everything you need to create the perfect event experience from start to finish</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Provider Discovery</h3>
                    <p>Browse through our extensive network of verified service providers with detailed profiles and portfolios.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Direct Communication</h3>
                    <p>Connect directly with providers to discuss your vision, requirements, and create a customized plan.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3>Digital Invitations</h3>
                    <p>Create beautiful digital invitations and manage RSVPs with our intuitive guest management tools.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Event Dashboard</h3>
                    <p>Manage all aspects of your event from a single dashboard with timelines, checklists, and updates.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Secure Payments</h3>
                    <p>Multiple payment options with secure processing including milestone-based payments for larger events.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Digital Memories</h3>
                    <p>Capture and share your event with professional photographers, videographers, and digital memory solutions.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Create Your Perfect Event?</h2>
            <p>Join thousands of satisfied clients who have transformed their event planning experience with Orgazen. Our platform connects you with top professionals and provides all the tools you need to create unforgettable moments.</p>
            <a href="#" class="btn btn-outline">Get Started Today</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-logo">
                        <i class="fas fa-calendar-star"></i> Orgazen
                    </div>
                    <p>Orgazen is revolutionizing event planning by connecting clients with verified professionals to create seamless, memorable experiences for any occasion.</p>
                    <p>Whether you're planning a wedding, corporate event, or intimate gathering, we have the resources and expertise to make it exceptional.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#events">Browse Events</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#how">How It Works</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>For Providers</h3>
                    <ul class="footer-links">
                        <li><a href="#">Join as Provider</a></li>
                        <li><a href="#">Provider Resources</a></li>
                        <li><a href="#">Success Stories</a></li>
                        <li><a href="#">Provider FAQ</a></li>
                        <li><a href="#">Provider Login</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <div class="footer-contact">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Event Street, Suite 100, New York, NY 10001</p>
                        <p><i class="fas fa-phone-alt"></i> (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> info@Orgazen.com</p>
                        <p><i class="fas fa-clock"></i> Mon-Fri: 9AM-6PM EST</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    &copy; 2025 Orgazen. All Rights Reserved.
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
            }
        });
        
        // Mobile menu toggle functionality could be added here
        // This would require additional HTML elements for the mobile menu
    </script>
</body>
</html>