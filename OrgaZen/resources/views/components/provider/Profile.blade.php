<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Provider Profile</title>
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
                        <a href="{{Route('components.provider.Profile')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Provider Profile</h2>
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
                            <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg' }}" alt="" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">{{ $user->first_name }} {{ $user->last_name }}</p>
                                <p class="text-xs text-gray-500">{{ $user->service->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Profile Content -->
            <div class="p-8">
                <!-- Profile Header -->
                <div class="card bg-white rounded-xl shadow-sm p-6 mb-8">
                    <div class="md:flex items-start">
                        <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                            <div class="relative">
                                <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg' }}"
                                    alt="Profile"
                                    class="w-32 h-32 rounded-full object-cover border-4 border-indigo-100">
                                    
                                <form action="{{Route('updateProfileImage')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="profile-upload"
                                        class="absolute bottom-0 right-0 bg-indigo-600 text-white p-2 rounded-full cursor-pointer hover:bg-indigo-700">
                                        <i class="fas fa-camera"></i>
                                        <input id="profile-upload" name="profile_image" type="file" class="hidden" onchange="this.form.submit()">
                                    </label>
                                </form>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-800">{{ $user->first_name }} {{ $user->last_name }}</h3>
                                    <p class="text-orange-700 font-medium">{{ $user->service->name ?? 'No service listed' }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-600">{{ $user->service->description ?? 'No description available' }}</p>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                @foreach ($user->tags as $tag)
                                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        {{ $tag->name }}
                                    </span>
                                @endforeach
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
            
                <!-- Profile Tabs and Content -->
                <div class="card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="border-b border-gray-200">
                        <div class="flex">
                            <button class="px-6 py-3 text-orange-700 border-b-2 border-orange-700 font-medium">Personal Information</button>
                        </div>
                    </div>

                    <div class="p-6">
                        <!-- Personal Information Form -->
                        <form action="{{Route('editProfile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                    <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" value="{{ $user->email }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                    <input type="text" id="city" name="service_area" value="{{ $user->service->service_area ?? '' }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Biography</label>
                                <textarea id="bio" rows="4" name="description"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">{{ $user->service->description ?? '' }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Expertise & Skills</label>
                                <select name="tags[]" multiple class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                    @foreach($allTags as $tag)
                                        <option value="{{ $tag->id }}" {{ $user->tags->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->name }}
                                        </option>
                                    @endforeach
                                </select>
                                
                                <!-- Display tags -->
                                <div class="flex flex-wrap gap-2 mt-3">
                                    @foreach ($user->tags as $tag)
                                        <div class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm flex items-center">
                                            {{ $tag->name }}
                                            <button type="submit" name="remove_tag" value="{{ $tag->id }}" class="ml-2 text-red-500 hover:text-red-700">
                                                </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex justify-end space-x-3">
                                <button type="button"
                                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Cancel</button>
                                <button type="submit"
                                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>