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

<!-- Provider Detail Page -->
<div class="provider-detail container">
    <div class="provider-header">
        <!-- Provider Gallery -->
        <div class="provider-gallery">
            @foreach($provider->service->images as $image)
                <div class="gallery-item">
                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Provider Image">
                </div>
            @endforeach
        </div>

        <div class="provider-info">
            <h1>{{ $provider->first_name}} {{$provider->last_name}}</h1>

            <div class="provider-meta">
                <div class="meta-block">
                    <div class="meta-value">{{ $provider->providerBookings ? $provider->providerBookings->count() : 0 }}</div>
                    <div class="meta-label">Events</div>
                </div>
                <div class="meta-block">
                    <div class="meta-value">{{ $provider->service->experience_level }}</div>
                    <div class="meta-label">Years Experience</div>
                </div>
                <div class="meta-block">
                    <div class="meta-value">{{ $provider->service->service_area}}</div>
                    <div class="meta-label">Location</div>
                </div>
            </div>

            <p>{{ $provider->service->description }}</p>
        </div>
    </div>

    <!-- Services Offered -->
    <div class="services-offered">
        <h2>Our Services</h2>
        <div class="services-grid">
            @if ($provider->tags && $provider->tags->count())
            @foreach($provider->tags as $tag)
                <span class="inline-block bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-medium mr-2">
                    {{ $tag->name }}
                </span>
            @endforeach
        @else
            <p class="text-gray-500">No tags available.</p>
        @endif
        
        </div>
    </div>
        @if(session('success'))
    <div class="p-4 bg-green-100 text-green-800 rounded-md">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="p-4 bg-red-100 text-red-800 rounded-md">
        {{ session('error') }}
    </div>
@endif

       <!-- Client Reviews Section -->
    <div class="reviews-section">
        <h2>Client Reviews</h2>

        <!-- Review Form -->
        @if($canComment)
        <div class="review-form">
            <form action="{{ route('comment.store') }}" method="POST" id="ratingForm">
                @csrf
                <input type="hidden" name="provider_id" value="{{ $provider->id }}">
                <input type="hidden" name="rating" id="ratingValue">
    
                <textarea name="comment" placeholder="Write your review here..." class="w-full border rounded p-2 mb-4"></textarea>
    
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    @endif
    

        <!-- Reviews List -->
        <div class="reviews-list">
            @foreach($comments as $comment)
                <div class="review-card">
                    <div class="review-header flex justify-between items-center">
                        <div class="review-author">
                            <h4>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</h4>
                        </div>
        
                        @if(auth()->check() && auth()->id() === $comment->user_id)
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    🗑️
                                </button>
                            </form>
                        @endif
                    </div>
                    <p>{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
        
    </div>
</div>
    </div>

    <script>

    </script>
</body>
</html>