<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Providers Management</title>
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
                        <a href="{{Route('components.admin.EventManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
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
                        <a href="{{Route('components.admin.serviceProvider')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Service Providers Management</h2>
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
            
            <!-- Service Providers Content -->
            <div class="p-8">
                
                
                <!-- Provider Categories -->
                <div class="mb-6 flex flex-wrap gap-3">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm">All Providers</button>
                    <button class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm shadow-sm">Weddings</button>
                    <button class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm shadow-sm">Birthdays</button>
                    <button class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm shadow-sm">Festivals</button>
                    <button class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm shadow-sm">Corporate Events</button>
                    <button class="bg-white text-gray-700 px-4 py-2 rounded-lg text-sm shadow-sm">Childern party</button>
                </div>
                
                <!-- Providers Table -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Provider
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Rating
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Events
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Revenue
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($providers as $provider)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{$provider->first_name}} {{$provider->last_name}}</div>
                                                <div class="text-sm text-gray-500">{{$provider->email}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$provider->eventCategory->name}}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 text-xs mr-1"></i>
                                            <span class="text-sm text-gray-900">0.0</span>
                                            <span class="text-sm text-gray-500 ml-1">(00)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $provider->total_events }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{$provider->total_revenue}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($provider->is_active)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Disabled
                                            </span>
                                        @endif
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <form action="{{ route('admin.providers.toggle', $provider->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="px-3 py-1 rounded {{ $provider->is_active ? 'bg-red-500' : 'bg-green-500' }} text-white">
                                                {{ $provider->is_active ? 'Ban' : 'Activate' }}
                                            </button>
                                        </form>
                                         </td>
                                </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
             
                
                
                <!-- Pending Verification -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Pending Verification</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Provider
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date Applied
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Kaoutar Laamiri</div>
                                                <div class="text-sm text-gray-500">kaoutar@sweetdelights.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Childern party</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Mar 15, 2025</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">pending</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="bg-green-500 text-white px-3 py-1 rounded-md mr-2"></button>