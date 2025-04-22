<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Admin Dashboard</title>
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
        /* .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        } */
        .card {
            transition: all 0.3s ease;
        }
        /* .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        } */
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
                        <a href="{{Route('components.admin.dashboard')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-2 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-bell"></i>
                                {{-- <span class="notification-badge flex items-center justify-center w-5 h-5 bg-red-500 text-white text-xs rounded-full">3</span> --}}
                            </button>
                        </div>
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
            
            <!-- Dashboard Content -->
            <div class="p-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-indigo-100 p-3 mr-4">
                                <i class="fas fa-calendar-alt text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Events</h3>
                                <p class="text-2xl font-bold text-indigo-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-pink-100 p-3 mr-4">
                                <i class="fas fa-users text-pink-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                                <p class="text-2xl font-bold text-pink-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-amber-100 p-3 mr-4">
                                <i class="fas fa-building text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Service Providers</h3>
                                <p class="text-2xl font-bold text-amber-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-emerald-100 p-3 mr-4">
                                <i class="fas fa-dollar-sign text-emerald-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Revenue</h3>
                                <p class="text-2xl font-bold text-emerald-600">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Events -->
                <div class="card bg-white rounded-xl shadow-sm p-6 mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-700">Recent Events</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event Name</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    @foreach ($events as $event)
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{$event->name}}</div>
                                        <div class="text-xs text-gray-500">{{$event->category->name}}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm text-gray-900">{{$event->client->first_name}} {{$event->client->last_name}}</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{$event->event_date}}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">{{$event->total_price ?? 100}}</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
                                        <a href="#" class="text-gray-600 hover:text-gray-900">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Bottom Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Top Service Providers -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Top Service Providers</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Provider" class="w-10 h-10 rounded-full mr-3">
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Ahmed sami</h4>
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 ml-1">(00 reviews)</span>
                                    </div>
                                </div>
                                <span class="text-indigo-600 text-sm font-medium">0.0</span>
                            </li>
                            <li class="flex items-center">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Provider" class="w-10 h-10 rounded-full mr-3">
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Ayoub ahnou</h4>
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 ml-1">(00 reviews)</span>
                                    </div>
                                </div>
                                <span class="text-indigo-600 text-sm font-medium">0.0</span>
                            </li>
                            <li class="flex items-center">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Provider" class="w-10 h-10 rounded-full mr-3">
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Houssam bensltana</h4>
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 ml-1">(00 reviews)</span>
                                    </div>
                                </div>
                                <span class="text-indigo-600 text-sm font-medium">0.0</span>
                            </li>
                            <li class="flex items-center">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Provider" class="w-10 h-10 rounded-full mr-3">
                                <div class="flex-1">
                                    <h4 class="text-sm font-medium text-gray-900">Hamza lhadouchi</h4>
                                    <div class="flex items-center">
                                        <div class="flex">
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 ml-1">(00 reviews)</span>
                                    </div>
                                </div>
                                <span class="text-indigo-600 text-sm font-medium">0.0</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Pending Approvals -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Pending Approvals</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">New Service Provider</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-green-500 hover:text-green-700">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Event Approval</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-green-500 hover:text-green-700">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Payout Request</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-green-500 hover:text-green-700">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">New client</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-green-500 hover:text-green-700">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Refund Request</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-green-500 hover:text-green-700">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--Popular event types-->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Popular Event Types</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Weddings</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="p-1 text-green-500 hover:text-green-700">
                                        <span class="text-indigo-600 text-sm font-medium">0</span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Birthdays</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="p-1 text-green-500 hover:text-green-700">
                                        <span class="text-indigo-600 text-sm font-medium">0</span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Day events</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="p-1 text-green-500 hover:text-green-700">
                                        <span class="text-indigo-600 text-sm font-medium">0</span>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">Childern party</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="p-1 text-green-500 hover:text-green-700">
                                        <span class="text-indigo-600 text-sm font-medium">0</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    </script>
</body>
</html>
                  