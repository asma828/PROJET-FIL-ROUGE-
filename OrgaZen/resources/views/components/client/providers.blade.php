<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Providers</title>
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
        
        /* Page Banner */
        .page-banner {
            background-image: url('https://i.pinimg.com/736x/50/5d/b7/505db7fb38fe5467a09b73db331743c8.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 120px 0 60px;
            text-align: center;
            color: white;
        }
        
        .page-banner h1 {
            font-size: 42px;
            margin-bottom: 16px;
        }
        
        .page-banner p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        /* Filter Section */
        .filter-section {
            background-color: white;
            padding: 30px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .filter-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .search-box {
            flex: 1;
            min-width: 200px;
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border: 1px solid #e2e2e2;
            border-radius: 50px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .search-box input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 56, 92, 0.1);
        }
        
        .search-box i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }
        
        .filter-dropdown {
            position: relative;
        }
        
        .dropdown-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            border: 1px solid #e2e2e2;
            border-radius: 50px;
            font-size: 16px;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .dropdown-btn:hover {
            border-color: var(--primary);
        }
        
        .dropdown-btn i {
            font-size: 14px;
        }
        
        .dropdown-menu {
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            min-width: 200px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 12px 0;
            z-index: 10;
            display: none;
        }
        
        .dropdown-menu.show {
            display: block;
        }
        
        .dropdown-item {
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background-color: rgba(255, 56, 92, 0.05);
            color: var(--primary);
        }
        
        /* Providers Grid */
        .providers-section {
            padding: 80px 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-header h2 {
            font-size: 36px;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .section-header p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .providers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 30px;
        }
        
        .provider-card {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .provider-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .provider-banner {
            height: 180px;
            position: relative;
            overflow: hidden;
        }
        
        .provider-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        /* .provider-card:hover .provider-banner img {
            transform: scale(1.1);
        } */
        
        .provider-category {
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
        
        .provider-rating {
            position: absolute;
            bottom: 16px;
            right: 16px;
            background-color: white;
            padding: 5px 10px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .provider-rating i {
            color: #FFC107;
        }
        
        .provider-profile {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .provider-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 16px;
            border: 3px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .provider-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .provider-info h3 {
            font-size: 20px;
            margin-bottom: 6px;
        }
        
        .provider-location {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 14px;
        }
        
        .provider-location i {
            margin-right: 6px;
            font-size: 12px;
        }
        
        .provider-content {
            padding: 20px;
        }
        
        .provider-description {
            margin-bottom: 24px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            color: var(--gray);
        }
        
        .provider-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .meta-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .meta-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .meta-label {
            font-size: 12px;
            color: var(--gray);
        }
        
        .provider-actions {
            display: flex;
            gap: 12px;
        }
        
        .provider-actions .btn {
            flex: 1;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 60px;
            gap: 8px;
        }
        
        .page-item {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .page-item:hover {
            background-color: rgba(255, 56, 92, 0.1);
            color: var(--primary);
        }
        
        .page-item.active {
            background-color: var(--primary);
            color: white;
        }
        
        .page-item.nav {
            width: auto;
            padding: 0 15px;
            border-radius: 20px;
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
            .providers-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            
            .filter-container {
                flex-direction: column;
                align-items: stretch;
            }
        }
        
        @media (max-width: 768px) {
            .page-banner h1 {
                font-size: 32px;
            }
            
            .nav-links {
                display: none;
            }
            
            .mobile-toggle {
                display: block;
                font-size: 24px;
            }
            
            .providers-grid {
                grid-template-columns: 1fr;
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
                <a href="" class="logo">
                    <i class="fas fa-calendar-star"></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="#" class="active">Service Providers</a></li>
                </ul>
                
                <div class="cta-buttons">
                    <a href="{{Route('logout')}}" class="btn btn-primary">logout</a>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="container">
            <h1>Discover Our Talented Service Providers</h1>
            <p>Connect with experienced professionals for your next event. Each provider specializes in a specific event category to deliver exceptional experiences.</p>
            <div class="hero-btns">
                <a href="#" class="btn btn-outline">Become a Provider</a>
            </div>
        </div>
    </section>
    
    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <div class="filter-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search providers by name or keyword...">
                </div>
                
                <div class="filter-dropdown">
                    <button class="dropdown-btn">
                        <i class="fas fa-filter"></i>
                        <span>Event Category</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-item">All Categories</div>
                        <div class="dropdown-item">Wedding</div>
                        <div class="dropdown-item">Birthday</div>
                        <div class="dropdown-item">Corporate</div>
                        <div class="dropdown-item">Festival</div>
                        <div class="dropdown-item">Social</div>
                    </div>
                </div>
                
                <div class="filter-dropdown">
                    
                    <div class="dropdown-menu">
                        <div class="dropdown-item">Top Rated</div>
                        <div class="dropdown-item">Most Popular</div>
                        <div class="dropdown-item">Price: Low to High</div>
                        <div class="dropdown-item">Price: High to Low</div>
                        <div class="dropdown-item">Newest First</div>
                    </div>
                </div>
                
                <div class="filter-dropdown">
                    <button class="dropdown-btn">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Location</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="dropdown-item">All Locations</div>
                        <div class="dropdown-item">New York</div>
                        <div class="dropdown-item">Los Angeles</div>
                        <div class="dropdown-item">Chicago</div>
                        <div class="dropdown-item">Miami</div>
                        <div class="dropdown-item">Dallas</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Providers Section -->
    <section class="providers-section">
        <div class="container">
            <div class="section-header">
                <h2>Owr Service Providers</h2>
                <p>Browse through our highly-rated event professionals each specializing in their own category</p>
            </div>
            
            <div class="providers-grid">
                <!-- Provider 1 -->
                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Wedding Provider">
                        <span class="provider-category">Wedding</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.9</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Wedding Elegance">
                        </div>
                        <div class="provider-info">
                            <h3>Wedding Elegance</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Marrackech</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Luxury wedding planning service specializing in elegant, memorable celebrations. From intimate gatherings to grand celebrations, we create magical moments.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">126</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.9</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="{{Route('components.client.provider-details')}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Provider 2 -->
                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Birthday Provider">
                        <span class="provider-category">Birthday</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Celebration Masters">
                        </div>
                        <div class="provider-info">
                            <h3>Celebration Masters</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Casablanca</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Creating unforgettable birthday experiences for all ages. Themed parties, entertainment, catering, and decoration services tailored to your preferences.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">203</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.8</div>
                                <div class="meta-label">Rating</div>
                            </div>
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Provider 3 -->
                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Provider 4 -->
                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="provider-card">
                    <div class="provider-banner">
                        <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Corporate Provider">
                        <span class="provider-category">Corporate</span>
                        <div class="provider-rating">
                            <i class="fas fa-star"></i>
                            <span>4.7</span>
                        </div>
                    </div>
                    <div class="provider-profile">
                        <div class="provider-avatar">
                            <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Business Events Pro">
                        </div>
                        <div class="provider-info">
                            <h3>Business Events Pro</h3>
                            <div class="provider-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Tanger</span>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <p class="provider-description">Professional corporate event planning services for conferences, team building, product launches, and business meetings with attention to detail.</p>
                        <div class="provider-meta">
                            <div class="meta-item">
                                <div class="meta-value">157</div>
                                <div class="meta-label">Events</div>
                            </div>
                            <div class="meta-item">
                                <div class="meta-value">4.7</div>
                                <div class="meta-label">Rating</div>
                            </div>
                           
                        </div>
                        <div class="provider-actions">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>