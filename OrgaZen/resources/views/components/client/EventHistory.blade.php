<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Event History</title>
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
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-2px);
        }
        
        .btn-small {
            padding: 8px 16px;
            font-size: 14px;
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
        
        /* Event History Section */
        .event-history {
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
        
        /* Filter Options */
        .filter-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
     
        
        /* Event Cards */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .event-card {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .event-img {
            height: 180px;
            position: relative;
            overflow: hidden;
        }
        
        .event-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .event-status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .status-upcoming {
            background-color: var(--secondary);
            color: white;
        }
        
        .status-completed {
            background-color: var(--success);
            color: white;
        }
        
        .status-cancelled {
            background-color: #EF4444;
            color: white;
        }
        
        .event-details {
            padding: 20px 25px;
        }
        
        .event-title {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--dark);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .event-title h3 {
            margin-right: 10px;
        }
        
        .event-category {
            display: inline-block;
            padding: 3px 10px;
            background-color: rgba(160, 82, 45, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .event-info {
            margin-bottom: 15px;
        }
        
        .event-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            color: var(--gray);
            font-size: 14px;
        }
        
        .event-info-item i {
            width: 20px;
            margin-right: 10px;
            color: var(--primary);
        }
        
        .event-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
        }
        
        .booking-id {
            font-size: 13px;
            color: var(--gray);
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }
        
        .page-item {
            margin: 0 5px;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            color: var(--dark);
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        .page-link:hover {
            background-color: #f5f5f5;
        }
        
        .page-link.active {
            background-color: var(--primary);
            color: white;
        }
        
        .create-new-event {
            text-align: center;
            margin-top: 50px;
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
    
    <!-- Event History Section -->
    <section class="event-history" id="event-history">
        <div class="container">
            <div class="section-title">
                <h1>Your Event History</h1>
                <p>View and manage all your past, current, and upcoming events in one place.</p>
            </div>
            
            <!-- Events Grid -->
            <div class="events-grid">
                <!-- Event -->
                @foreach ($client->events as $event)
                <div class="event-card">
                    <div class="event-img">
                        <img src="https://i.pinimg.com/736x/ce/ff/3d/ceff3d1743ad3e000234e87f217085e4.jpg" alt="Sarah & Michael's Wedding">
                    </div>
                    <div class="event-details">
                        <div class="event-title">
                            <h3>{{$event->name}}</h3>
                            <span class="event-category">{{ $event->category->name }}</span>
                        </div>
                        <div class="event-info">
                            <div class="event-info-item">
                                <i class="far fa-calendar"></i>
                                <span>{{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</span>
                            </div>
                            <div class="event-info-item">
                                <i class="far fa-clock"></i>
                                <span>{{$event->event_time}} Hours</span>
                            </div>
                            <div class="event-info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>{{$event->location}}</span>
                            </div>
                            <div class="event-info-item">
                                <i class="fas fa-user-friends"></i>
                                <span>{{$event->guest_count}} Guests</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <div class="action-buttons">
                              
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>
</body>
</html>