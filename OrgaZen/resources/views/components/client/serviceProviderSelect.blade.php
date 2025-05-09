<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Create Event - Service Providers</title>
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
            margin-right: 16px;
            font-weight: 600;
        }
        
        /* Event Creation Steps */
        .create-event {
            padding: 120px 0 80px;
            background-color: #f9f9f9;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h1 {
            font-size: 38px;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .steps-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            position: relative;
            max-width: 800px;
            margin: 0 auto 50px;
        }
        
        .steps-progress::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: #e0e0e0;
            z-index: 1;
        }
        
        .steps-progress::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 50%;
            background-color: var(--primary);
            z-index: 2;
        }
        
        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            position: relative;
            z-index: 3;
        }
        
        .step.active {
            background-color: var(--primary);
        }
        
        .step-label {
            position: absolute;
            top: 45px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 14px;
            font-weight: 600;
            color: var(--gray);
        }
        
        .step.active .step-label {
            color: var(--primary);
        }
        
        /* Form Styles */
        .form-container {
            background-color: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Service Provider Cards */
        .service-categories {
            margin-bottom: 30px;
        }
        
        .service-category-title {
            font-size: 20px;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .service-providers {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .provider-card {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .provider-card.selected {
            border-color: var(--primary);
            background-color: rgba(160, 82, 45, 0.05);
        }
        
        .provider-card:hover {
            border-color: var(--primary);
        }
        
        .provider-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .provider-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .provider-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .provider-name {
            flex: 1;
        }
        
        .provider-name h4 {
            font-size: 18px;
            margin-bottom: 4px;
        }
        
        .provider-rating {
            display: flex;
            align-items: center;
            color: #FFB800;
        }
        
        .provider-rating i {
            margin-right: 5px;
        }
        
        .provider-info {
            margin-bottom: 15px;
        }
        
        .provider-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 18px;
        }
        
        .select-box {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 24px;
            height: 24px;
            border: 2px solid #e0e0e0;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .provider-card.selected .select-box {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .provider-card.selected .select-box::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 14px;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .btn-back {
            background-color: transparent;
            color: var(--gray);
            border: 2px solid #e0e0e0;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            border-color: var(--gray);
        }
        
        .btn-next {
            background-color: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-next:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(160, 82, 45, 0.2);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-calendar-alt"></i> Orgazen
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
    
    <!-- Create Event Section - Step 2 -->
    <section class="create-event" id="create-event">
        <div class="container">
            <div class="section-title">
                <h1>Select Service Providers</h1>
                <p>Choose the perfect service providers for your wedding to make your special day unforgettable.</p>
            </div>
            
            <!-- Steps Progress -->
            <div class="steps-progress">
                <div class="step active">
                    1
                    <span class="step-label">Event Details</span>
                </div>
                <div class="step active">
                    2
                    <span class="step-label">Service Providers</span>
                </div>
                <div class="step">
                    3
                    <span class="step-label">Invitations</span>
                </div>
                <div class="step">
                    4
                    <span class="step-label">Payment</span>
                </div>
            </div>
            
            <!-- Form Container -->
            <div class="form-container">
                <form id="serviceProvidersForm" action="{{ route('client.assignProvider', $reservation->id) }}" method="POST">
                    @csrf
                    <!-- Venue Category -->
                    <div class="service-categories">
                        @foreach ($providers as $provider)
                        @if ($provider->event_category_id === $reservation->event_category_id && $provider->service)
                        <h3 class="service-category-title">{{ $reservation->category->name }}</h3>
                        <div class="service-providers">
                            <label>
                            <input type="radio" name="provider_id" value="{{ $provider->id }}" class="hidden" required>
                            <div class="provider-card" onclick="toggleSelection(this)">
                                <div class="select-box"></div>
                                <div class="provider-header">
                                    <div class="provider-img">
                                        <img src="{{ $provider->image ? asset('storage/' . $provider->image) : 'https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg' }}">
                                    </div>
                                    <div class="provider-name">
                                        <h4>{{ $provider->business_name}}</h4>
                                        <div class="provider-rating">
                                            <i class="fas fa-star"></i>
                                            <span>4.8 (124 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="provider-info">
                                    <p>{{ $provider->service->description }}</p>
                                </div>
                                <div class="provider-price">
                                    ${{ number_format($provider->service->price, 2) }} for {{ $provider->service->guest_count }} guests
                                </div>
                            </div>
                            </label>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="form-actions">
                        <a href="event-creation-step1.html" class="btn-back">Back</a>
                        <button type="submit" class="btn-next">Next: Guest Invitations</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function toggleSelection(card) {
            // Find all cards in the same category
            const category = card.closest('.service-providers');
            const cards = category.querySelectorAll('.provider-card');
            
            // Remove selected class from all cards in this category
            cards.forEach(c => c.classList.remove('selected'));
            
            // Add selected class to the clicked card
            card.classList.add('selected');
        }
    </script>
</body>
</html>