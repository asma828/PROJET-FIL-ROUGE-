<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Booking Details</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fc;
        }
        .sidebar {
            background: #A0522D;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.05);
        }
        .nav-link {
            transition: all 0.3s ease;
        }
        .card {
            transition: all 0.3s ease;
        }
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
        }
        .booking-status {
            width: 12px;
            height: 12px;
            display: inline-block;
            border-radius: 50%;
            margin-right: 6px;
        }
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }
        .status-confirmed {
            background-color: #10B981;
        }
        .status-pending {
            background-color: #F59E0B;
        }
        .status-completed {
            background-color: #6366F1;
        }
        .status-cancelled {
            background-color: #EF4444;
        }
        .timeline-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #A0522D;
            display: block;
        }
        .timeline-line {
            width: 2px;
            background-color: #E5E7EB;
            display: block;
            margin: 0 auto;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="sidebar w-64 text-white py-6 px-4 flex flex-col">
            <div class="mb-10 flex items-center justify-center">
                <h1 class="text-2xl font-bold">Orgazen</h1>
            </div>
            
            <nav class="flex-1">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                            <i class="fas fa-calendar-check w-5 h-5 mr-3"></i>
                            <span>My Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-store w-5 h-5 mr-3"></i>
                            <span>My Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-star w-5 h-5 mr-3"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-user-cog w-5 h-5 mr-3"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="mt-auto">
                <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                    <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Top Navigation -->
 <div class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-8 py-4">
                    <div>
                        <div class="flex items-center">
                            <a href="{{Route('components.provider.BookingManagement')}}" class="text-gray-500 hover:text-gray-700 mr-3">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                        <h2 class="text-xl font-semibold text-gray-800">My Bookings</h2>
                    </div>
                </div>
                 <div class="flex items-center space-x-4">
                    <div class="relative" x-data="{ open: false }">
                        <!-- Bell Button -->
                        <button @click="open = !open" class="relative p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            @php
                                $unreadCount = auth()->user()->unreadNotifications->count();
                            @endphp
                            @if ($unreadCount > 0)
                                <span class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 bg-red-500 text-white text-xs rounded-full">
                                    {{ $unreadCount }}
                                </span>
                            @endif
                        </button>
                        <!-- Dropdown -->
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg z-50 overflow-hidden">
                            <div class="p-4 border-b">
                                <h4 class="font-semibold text-gray-700 text-sm">Notifications</h4>
                            </div>
                            <ul class="max-h-60 overflow-y-auto divide-y divide-gray-100">
                                @forelse(auth()->user()->unreadNotifications as $notification)
                                    <li class="p-3 text-sm text-gray-700 hover:bg-gray-100">
                                        {{ $notification->data['message'] }}
                                    </li>
                                @empty
                                    <li class="p-3 text-sm text-gray-500">No new notifications.</li>
                                @endforelse
                            </ul>
                            <div class="p-2 text-center text-xs text-gray-500">
                                <form action="{{ route('notifications.markAllRead') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-indigo-600 hover:underline">Mark all as read</button>
                                </form>
                            </div>
                        </div>
                    </div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ $provider->image ? asset('storage/' . $provider->image) : 'https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg' }}"
                                 alt="Provider Image" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">{{ $provider->first_name }} {{ $provider->last_name }}</p>
                                <p class="text-xs text-gray-500">{{ $provider->service->name ?? 'Not Set' }}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!-- Booking Details Content -->
            <div class="p-8">
            
                <!-- Details Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Left Column: Booking Info -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Event Details Card -->
                        <!-- Total Price -->
<div class="bg-white rounded-xl shadow-sm p-6 mb-6">
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex items-center mb-4 sm:mb-0">
            <span class="status-indicator status-confirmed"></span>
            <span class="font-medium text-gray-800">Total price</span>
        </div>
        <div class="flex space-x-3">
            <h1 class="px-4 py-2 bg-green-100 text-green-700 rounded-md text-sm font-medium hover:bg-green-200">
                {{ $reservation->price ?? 0 }} $
            </h1>
        </div>
    </div>
</div>

<!-- Event Details -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Event Details</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Event Name</p>
                        <p class="font-medium">{{ $reservation->name }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Date</p>
                        <p class="font-medium">{{ $reservation->event_date }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Time</p>
                        <p class="font-medium">{{ $reservation->event_time }}</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Event Type</p>
                        <p class="font-medium">{{ $reservation->category->name ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Guest Count</p>
                        <p class="font-medium">{{ $reservation->guest_count }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-500 mb-1">Location</p>
                        <p class="font-medium">{{ $reservation->location }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>