<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Provider Dashboard</title>
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
                        <a href="{{ route('components.provider.dashboard', ['providerId' =>auth()->user()->id]) }}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.BookingManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-calendar-check w-5 h-5 mr-3"></i>
                            <span>My Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.Chat')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-comment-alt w-5 h-5 mr-3"></i>
                            <span>Live Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.MyService')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-store w-5 h-5 mr-3"></i>
                            <span>My Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.Reviews')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-star w-5 h-5 mr-3"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.Profile')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-user-cog w-5 h-5 mr-3"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="mt-auto">
                <form action="{{ route('logout') }}" method="POST" class="nav-link flex items-center px-4 py-3 rounded-lg">
                    @csrf
                    <i class="fas fa-sign-out-alt w-5 h-5 mr-3"></i>
                    <button>Logout</button>
                </form>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <!-- Top Navigation -->
            <div class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-8 py-4">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">Service Provider Dashboard</h2>
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
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Ahmed Sami</p>
                                <p class="text-xs text-gray-500">Wedding Planner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dashboard Content -->
            <div class="p-8">
                <!-- Account Status Alert -->
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-md" role="alert">
                    <div class="flex items-center">
                        <div class="py-1"><i class="fas fa-check-circle mr-2"></i></div>
                        <div>
                            <p class="font-bold">Account Verified</p>
                            <p class="text-sm">Your service provider account has been verified. You can now receive booking requests.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Bookings -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-indigo-100 p-3 mr-4">
                                <i class="fas fa-calendar-check text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Bookings</h3>
                                <p class="text-2xl font-bold text-indigo-600">{{ $provider->providerBookings->count() }}</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Pending Requests -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-pink-100 p-3 mr-4">
                                <i class="fas fa-clock text-pink-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Pending Requests</h3>
                                <p class="text-2xl font-bold text-pink-600">{{ $provider->providerBookings->where('status', 'pending')->count() }}</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Total Earnings -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-amber-100 p-3 mr-4">
                                <i class="fas fa-dollar-sign text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Earnings</h3>
                                <p class="text-2xl font-bold text-amber-600">${{ $provider->providerBookings->sum('price') }}</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Total Comments -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-emerald-100 p-3 mr-4">
                                <i class="fas fa-star text-emerald-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Comments</h3>
                                <p class="text-2xl font-bold text-emerald-600">{{ $provider->comments->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Booking Requests -->
                <div class="card bg-white rounded-xl shadow-sm p-6 mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-700">Recent Booking</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event Details</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @if($latestReservation)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900">{{ $latestReservation->client->first_name }} {{ $latestReservation->client->last_name }}</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $latestReservation->event_name }}</div>
                                            <div class="text-xs text-gray-500">{{ $latestReservation->guest_count }} guests • {{ $latestReservation->location }}</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($latestReservation->date)->format('F j, Y') }}</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">${{ $latestReservation->price }}</td>
                                    </tr>
                                @else
                                    <tr><td colspan="4" class="text-center text-gray-500">No recent bookings.</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Recent Comments -->
                @if($latestComment)
                <div class="border-b pb-4">
                    <div class="flex items-center text-xs text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                            <i class="fas fa-star{{ $i < $latestComment->rating ? '' : '-o' }}"></i>
                        @endfor
                    </div>
                    <p class="text-xs text-gray-600 mb-1">{{ $latestComment->content }}</p>
                    <p class="text-xs font-medium text-gray-900">
                        - {{ optional($latestComment->client)->first_name }} {{ optional($latestComment->client)->last_name }}
                    </p>
                </div>
            @else
                <div class="text-gray-500">No comments yet.</div>
            @endif
            
                
            </div>
        </div>
    </div>
</body>
</html>