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
                        <a href="{{Route('components.provider.dashboard')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Service Provider Dashboard</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-2 text-gray-500 hover:text-gray-700 relative">
                                <i class="fas fa-bell"></i>
                                {{-- <span class="notification-badge flex items-center justify-center w-5 h-5 bg-red-500 text-white text-xs rounded-full">3</span> --}}
                            </button>
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
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-indigo-100 p-3 mr-4">
                                <i class="fas fa-calendar-check text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Bookings</h3>
                                <p class="text-2xl font-bold text-indigo-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-pink-100 p-3 mr-4">
                                <i class="fas fa-clock text-pink-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Pending Requests</h3>
                                <p class="text-2xl font-bold text-pink-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-amber-100 p-3 mr-4">
                                <i class="fas fa-dollar-sign text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Earnings</h3>
                                <p class="text-2xl font-bold text-amber-600">0</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-emerald-100 p-3 mr-4">
                                <i class="fas fa-star text-emerald-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Rating</h3>
                                <p class="text-2xl font-bold text-emerald-600">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Booking Requests -->
                <div class="card bg-white rounded-xl shadow-sm p-6 mb-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-700">Recent Booking </h3>
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
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                            <div class="text-sm text-gray-900">Sara Boulahia</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-medium text-gray-900">Wedding Ceremony</div>
                                        <div class="text-xs text-gray-500">50 guests • Marrakech Garden</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Mar 24, 2025</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">$3,500</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                          
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                            <div class="text-sm text-gray-900">Kaoutar Laamiri</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-medium text-gray-900">Wedding Reception</div>
                                        <div class="text-xs text-gray-500">120 guests • Royal Palace Hotel</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Apr 15, 2025</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">$5,200</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                          
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                            <div class="text-sm text-gray-900">Taha Malaiki</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4">
                                        <div class="text-sm font-medium text-gray-900">Engagement Party</div>
                                        <div class="text-xs text-gray-500">75 guests • Seaside Villa</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 02, 2025</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">$2,800</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                          
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Bottom Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Upcoming Events -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-700">Upcoming Events</h3>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">View All</a>
                        </div>
                        <ul class="space-y-4">
                            <li class="border-b border-gray-100 pb-3">
                                <div class="flex justify-between mb-1">
                                    <h4 class="text-sm font-medium text-gray-900">Mehdi & Fatima Wedding</h4>
                                    <span class="text-xs text-gray-500">Mar 28</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Golden Palace, Casablanca</span>
                                </div>
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                <div class="flex justify-between mb-1">
                                    <h4 class="text-sm font-medium text-gray-900">Omar & Layla Wedding</h4>
                                    <span class="text-xs text-gray-500">Apr 10</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Atlantic Resort, Rabat</span>
                                </div>
                            </li>
                            <li class="border-b border-gray-100 pb-3">
                                <div class="flex justify-between mb-1">
                                    <h4 class="text-sm font-medium text-gray-900">Yasmin & Khalid Wedding</h4>
                                    <span class="text-xs text-gray-500">May 05</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Mountain View Hotel, Ifrane</span>
                                </div>
                            </li>
                            <li>
                                <div class="flex justify-between mb-1">
                                    <h4 class="text-sm font-medium text-gray-900">Nadia & Amine Wedding</h4>
                                    <span class="text-xs text-gray-500">May 18</span>
                                </div>
                                <div class="flex items-center text-xs text-gray-500">
                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                    <span>Royal Gardens, Marrakech</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    
                    
                    <!-- Recent Reviews -->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-700">Recent Reviews</h3>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">View All</a>
                        </div>
                        <ul class="space-y-4">
                            <li class="pb-3 border-b border-gray-100">
                                <div class="flex justify-between mb-1">
                                    <div class="flex">
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">1 week ago</span>
                                </div>
                                <p class="text-xs text-gray-600 mb-1">"Ahmed did an amazing job with our wedding. Everything was perfect!"</p>
                                <p class="text-xs font-medium text-gray-900">- Amal & Hassan</p>
                            </li>
                            <li class="pb-3 border-b border-gray-100">
                                <div class="flex justify-between mb-1">
                                    <div class="flex">
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">2 weeks ago</span>
                                </div>
                                <p class="text-xs text-gray-600 mb-1">"Very professional service. Our guests were impressed with the arrangements."</p>
                                <p class="text-xs font-medium text-gray-900">- Youssef & Maryam</p>
                            </li>
                            <li class="pb-3 border-b border-gray-100">
                                <div class="flex justify-between mb-1">
                                    <div class="flex">
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">1 month ago</span>
                                </div>
                                <p class="text-xs text-gray-600 mb-1">"Best wedding planner in the city! Ahmed took care of everything."</p>
                                <p class="text-xs font-medium text-gray-900">- Leila & Karim</p>
                            </li>
                            <li>
                                <div class="flex justify-between mb-1">
                                    <div class="flex">
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        <i class="far fa-star text-yellow-400 text-xs"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">2 months ago</span>
                                </div>
                                <p class="text-xs text-gray-600 mb-1">"Great service overall. Small issues with timing but otherwise perfect."</p>
                                <p class="text-xs font-medium text-gray-900">- Samir & Nora</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>