<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Elegance - Orgazen</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Reusing the existing styles from the previous page */
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
        
        :root {
            --primary: #A0522D;
            --primary-dark: #E31C5F;
            --secondary: #5E17EB;
            --accent: #00D1FF;
            --dark: #1A1A2E;
            --light: #F8F8F8;
            --gray: #767676;
            --success: #34D399;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* Existing header and nav styles */
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
            text-decoration: none;
            color: inherit;
        }
        
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

        .login-btn {
            font-weight: 600;
            margin-right: 16px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
       
        
        /* Provider Detail Specific Styles */
        .provider-detail {
            padding: 120px 0 60px;
        }
        
        .provider-header {
            display: flex;
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .provider-gallery {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .gallery-item {
            border-radius: 12px;
            overflow: hidden;
        }
        
        
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .provider-info {
            flex: 1;
        }
        
        .provider-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .provider-title h1 {
            font-size: 36px;
            color: var(--dark);
        }
        
        .provider-rating {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            color: #FFC107;
        }
        
        .provider-meta {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .meta-block {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .meta-value {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .meta-label {
            font-size: 14px;
            color: var(--gray);
        }
        
        .provider-description {
            margin-bottom: 30px;
            line-height: 1.8;
            color: var(--gray);
        }
        
        .services-offered {
            margin-bottom: 40px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .service-card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-card i {
            font-size: 36px;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .service-card h4 {
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        /* Reviews Section */
        .reviews-section {
            background-color: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .review-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .review-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #e2e2e2;
            border-radius: 8px;
            resize: vertical;
            min-height: 120px;
        }
        
        .star-rating {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .star-rating i {
            font-size: 24px;
            color: #e2e2e2;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .star-rating i.active {
            color: #FFC107;
        }
        
        .reviews-list {
            display: grid;
            gap: 20px;
        }
        
        .review-card {
            background-color: #f9f9f9;
            border-radius: 12px;
            padding: 20px;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .review-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .review-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        
        @media (max-width: 992px) {
            .provider-header {
                flex-direction: column;
            }
            
            .provider-gallery {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .provider-gallery {
                grid-template-columns: 1fr;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">
                    <i class="fas fa-calendar-star"></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#services">Events</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#" class="active">Service Providers</a></li>
                </ul>
                
                <div class="cta-buttons">
                    <a href="{{Route('logout')}}" class="btn btn-primary">logout</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Provider Detail Section -->
    <div class="provider-detail container">
        <div class="provider-header">
            <div class="provider-gallery">
                <div class="gallery-item">
                    <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Wedding Setup">
                </div>
                <div class="gallery-item">
                    <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Wedding Decor">
                </div>
                <div class="gallery-item">
                    <img src="https://i.pinimg.com/736x/60/7e/66/607e66305ee9a8f67a3ecd1858af43a4.jpg" alt="Wedding Celebration">
                </div>
            </div>
            
            <div class="provider-info">
                <div class="provider-title">
                    <h1>Wedding Elegance</h1>
                    <div class="provider-rating">
                        <i class="fas fa-star"></i>
                        <span>4.9</span>
                    </div>
                </div>
                
                <div class="provider-meta">
                    <div class="meta-block">
                        <div class="meta-value">126</div>
                        <div class="meta-label">Events</div>
                    </div>
                    <div class="meta-block">
                        <div class="meta-value">5+</div>
                        <div class="meta-label">Years Experience</div>
                    </div>
                    <div class="meta-block">
                        <div class="meta-value">Marrackech</div>
                        <div class="meta-label">Location</div>
                    </div>
                </div>
                
                <p class="provider-description">
                    Expert wedding planner with 5+ years of experience organizing luxury weddings across Morocco. Specializing in creating memorable, stress-free celebrations that reflect each couple's unique love story. I work closely with top vendors to ensure every detail is perfect, from venue selection to final send-off.
                </p>
                
            </div>
        </div>
        
        <div class="services-offered">
            <h2 style="text-align: center; margin-bottom: 30px;">Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-utensils"></i>
                    <h4>Catering</h4>
                    <p>Gourmet menu planning and full-service catering for weddings.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-palette"></i>
                    <h4>Decoration</h4>
                    <p>Custom wedding decor and styling to match your unique vision.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-music"></i>
                    <h4>Entertainment</h4>
                    <p>Professional DJ, live band, and entertainment coordination.</p>
                </div>
            </div>
        </div>
        
        <div class="reviews-section">
            <h2 style="text-align: center; margin-bottom: 30px;">Client Reviews</h2>
            
            <div class="review-form">
                <div class="star-rating">
                    <i class="fas fa-star" data-rating="1"></i>
                    <i class="fas fa-star" data-rating="2"></i>
                    <i class="fas fa-star" data-rating="3"></i>
                    <i class="fas fa-star" data-rating="4"></i>
                    <i class="fas fa-star" data-rating="5"></i>
                </div>
                <textarea placeholder="Write your review here..."></textarea>
                <button class="btn btn-primary">Submit Review</button>
            </div>
            
            <div class="reviews-list">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">
                            <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Sarah">
                            <h4>Sara Boulahia</h4>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p>Absolutely incredible wedding planning service! Every detail was perfect and they made our day truly magical.</p>
                </div>
                
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">
                            <img src="https://i.pinimg.com/736x/15/35/a7/1535a7412263d5bead2511465a733642.jpg" alt="Michael">
                            <h4>Houssam Bensltana</h4>
                        </div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p>Professional, responsive, and creative. They transformed our wedding venue into a dream come true!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Star Rating Interaction
        document.querySelectorAll('.star-rating i').forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute('data-rating');
                document.querySelectorAll('.star-rating i').forEach(s => {
                    if (parseInt(s.getAttribute('data-rating')) <= rating) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>
</html>