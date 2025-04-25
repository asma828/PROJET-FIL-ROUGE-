<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Event Details</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        .tab-button {
            position: relative;
            transition: all 0.3s ease;
        }
        .tab-button:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #4F46E5;
            transition: width 0.3s ease;
        }
        .tab-button.active:after {
            width: 100%;
        }
        .status-pill {
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
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
                        <a href="{{Route('components.admin.dashboard')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.UserManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-users w-5 h-5 mr-3"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.EventManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                            <i class="fas fa-calendar-check w-5 h-5 mr-3"></i>
                            <span>Event Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.CategoryManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-box-open w-5 h-5 mr-3"></i>
                            <span>Events Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.TagsManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-hashtag w-5 h-5 mr-3"></i>
                            <span>Tags Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.serviceProvider')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-building w-5 h-5 mr-3"></i>
                            <span>Service Providers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.Payment')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-credit-card w-5 h-5 mr-3"></i>
                            <span>Payment & Finance</span>
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
                        <h2 class="text-xl font-semibold text-gray-800">Event Details</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-3">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="" class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Asma Lachhab</p>
                                <p class="text-xs text-gray-500">Super Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Event Details Content -->
            <div class="p-8">
                <div class="mb-6 flex items-center">
                    <a href="{{ route('components.admin.EventManagement') }}" class="text-gray-600 hover:text-gray-900">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </a>
                </div>
                
                <!-- Event Header -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <div class="flex items-center mb-2">
                                <h1 class="text-2xl font-bold text-gray-800">{{$details->name}}</h1>
                             
                            </div>
                            <p class="text-gray-500 mb-2">
                                <i class="fas fa-tag mr-2"></i>{{$details->category->name}} 
                            </p>
                        </div>
                    
                    </div>
                </div>
                
                <!-- Event Details -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Details -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                            <h2 class="text-lg font-semibold text-gray-700 mb-4">Event Information</h2>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-500 mb-1">Date</label>
                                        <p class="text-gray-800">{{$details->event_date}}</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-500 mb-1">Time</label>
                                        <p class="text-gray-800">{{$details->event_time}}</p>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-500 mb-1">Location</label>
                                        <p class="text-gray-800">{{$details->location}}</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-500 mb-1">Guest Count</label>
                                        <p class="text-gray-800">{{$details->guest_count}} guests</p>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="block text-sm font-medium text-gray-500 mb-1">Total Budget</label>
                                        <p class="text-gray-800">{{ $details->total_price ?? 100}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-2">
                                <label class="block text-sm font-medium text-gray-500 mb-1">Description</label>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-gray-800 whitespace-pre-line">{{ $details->description}}</p>
                                </div>
                            </div>
                        </div>
                        
                       
                    <!-- Sidebar -->
                    <div class="lg:col-span-1">
                        <!-- Client Information -->
                        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                            <h2 class="text-lg font-semibold text-gray-700 mb-4">Client Information</h2>
                            
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-gray-500"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">{{$details->client->first_name}} {{$details->client->last_name}}</h3>
                                    <p class="text-sm text-gray-500">Client</p>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <i class="fas fa-envelope text-gray-400 mt-1 mr-3 w-5"></i>
                                    <span class="text-sm">{{$details->client->email}}</span>
                                </div>
                               
                            </div>
                        </div>
                        
                        <!-- Service Provider Information -->
                        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
                            <h2 class="text-lg font-semibold text-gray-700 mb-4">Service Provider</h2>
                            
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-building text-gray-500"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">{{ $details->provider->first_name ?? 'Unknown' }} {{ $details->provider->last_name ?? 'Unknown'}} </h3>
                                    <p class="text-sm text-gray-500">Provider</p>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <i class="fas fa-envelope text-gray-400 mt-1 mr-3 w-5"></i>
                                    <span class="text-sm">{{$details->provider->email ?? 'Unknown'}}</span>
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