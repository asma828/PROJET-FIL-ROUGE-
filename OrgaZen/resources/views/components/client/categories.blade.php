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
            --primary-dark: #8B4513;  /* Darker shade for hover */
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
            background-color: var(--primary-dark);
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
            margin-bottom: 40px;
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
        
        /* Custom Pagination Styling */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        .pagination {
            display: flex;
            list-style: none;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background-color: white;
        }
        .pagination li {
            display: inline-block;
        }
        .pagination li span,
        .pagination li a {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            min-width: 45px;
            font-weight: 600;
            color: var(--gray);
            transition: all 0.3s ease;
        }
        .pagination li.active span {
            background-color: var(--primary);
            color: white;
        }
        .pagination li a:hover {
            background-color: #f0f0f0;
            color: var(--primary);
        }
        .pagination .disabled span {
            color: #ccc;
            cursor: not-allowed;
        }
        
        /* For the search input */
        .search-container {
            margin-bottom: 40px;
            text-align: center;
        }
        .search-input {
            padding: 12px 20px;
            width: 60%;
            border-radius: 30px;
            border: 1px solid #ddd;
            font-family: inherit;
            font-size: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            outline: none;
            transition: all 0.3s ease;
        }
        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 4px 12px rgba(160, 82, 45, 0.2);
        }
        .search-btn {
            margin-left: 10px;
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

    <!-- Event Categories Section -->
    <section class="event-categories" id="event-categories">
        <div class="container">
            <div class="section-title">
                <h1>Choose Your Event Now</h1>
                <p>Explore our diverse range of event categories and start planning your perfect celebration with our expert service providers.</p>
            </div>
            
            <!-- Search Form with improved styling -->
            <div class="search-container">
                <form method="GET" action="{{ route('components.client.categories') }}">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search event category..." class="search-input">
                    <button type="submit" class="btn btn-primary search-btn">Search</button>
                </form>
            </div>

            <div class="categories-grid">
                <!-- Event Categories -->
                @foreach ($categories as $categorie)
                <div class="category-card">
                    <div class="category-img">
                        <img src={{$categorie->image}} alt="{{$categorie->name}} Events">
                    </div>
                    <div class="category-info">
                        <h3>{{$categorie->name}}</h3>
                        <p>{{$categorie->description}}</p>
                        <div class="category-cta">
                            <a href="{{Route('components.client.eventdetails', ['category_id' => $categorie->id])}}" class="btn btn-primary">Create {{$categorie->name}} Event</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>          
        </div>
    </section>
</body>
</html>