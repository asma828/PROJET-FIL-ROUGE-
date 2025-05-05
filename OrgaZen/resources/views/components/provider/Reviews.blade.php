<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Provider Reviews</title>
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
        .review-card:hover {
            transform: translateY(-3px);
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
                        <a href="{{Route('components.provider.MyService')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-store w-5 h-5 mr-3"></i>
                            <span>My Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.Reviews')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                            <img src="{{ $profile->image ? asset('storage/' . $profile->image) : 'https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg' }}"
                                 alt="Provider Image" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">{{ $profile->first_name }} {{ $profile->last_name }}</p>
                                <p class="text-xs text-gray-500">{{ $profile->service->name ?? 'Not Set' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

            <!-- Reviews Content -->
            <div class="p-8">
                <!-- Reviews List -->
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Reviews for {{ $provider->business_name }}</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    @forelse($comments as $comment)
                        <div class="review-card bg-white rounded-xl shadow-sm p-6 transition-all duration-300">
                            <div class="flex items-start mb-4">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-md font-medium text-gray-900">{{ $comment->user->first_name}} {{$comment->user->last_name}}</h4>
                                            <p class="text-xs text-gray-500">{{ $comment->created_at->format('F j, Y') }}</p>
                                        </div>
                                        <div class="flex">
                                            @for($i = 0; $i < $comment->rating; $i++)
                                                <i class="fas fa-star text-yellow-400"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"{{ $comment->comment }}"</p>
                
                            <div class="mt-4 border-t border-gray-100 pt-4">
                                <div class="flex justify-between">
                                    <span class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                    <div class="flex items-center">                                        
                                        <form action="{{ route('provider.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm text-red-500 hover:text-red-700" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 col-span-full">No comments yet for your services.</p>
                    @endforelse
                </div>
                
                
                <!-- Pagination -->
                <div class="mt-6">
                    {{ $comments->links() }}
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>