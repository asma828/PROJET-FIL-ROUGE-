<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Live Chat</title>
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
        .chat-message-mine {
            background-color: #5E60CE;
            color: white;
            border-radius: 12px 12px 0 12px;
        }
        .chat-message-theirs {
            background-color: #f0f0f0;
            color: #333;
            border-radius: 12px 12px 12px 0;
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
                        <a href="{{Route('components.provider.dashboard')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
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
                        <a href="{{Route('components.provider.Chat')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
        <div class="flex-1 overflow-hidden flex flex-col">
            <!-- Top Navigation -->
            <div class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-8 py-4">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">Live Chat</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-2 text-gray-500 hover:text-gray-700 relative">
                                <i class="fas fa-bell"></i>
                                <span class="notification-badge flex items-center justify-center w-5 h-5 bg-red-500 text-white text-xs rounded-full">3</span>
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
            
            <!-- Chat Area -->
            <div class="flex-1 flex overflow-hidden">
                <!-- Chat List -->
                <div class="w-80 bg-white border-r overflow-y-auto">
                    <!-- Search -->
                    <div class="p-4 border-b">
                        <div class="relative">
                            <input type="text" placeholder="Search conversations..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Conversation List -->
                    <div class="divide-y divide-gray-200">
                        <!-- Active Chat -->
                        <div class="p-4 flex items-center space-x-3 bg-indigo-50 border-l-4 border-indigo-500 cursor-pointer">
                            <div class="relative">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">Sara Boulahia</h3>
                                    <span class="text-xs text-gray-500">2m</span>
                                </div>
                                <p class="text-xs text-gray-600 truncate">Yes, I'd like to discuss the flowers for my wedding...</p>
                            </div>
                        </div>
                        
                        <!-- Other Conversations -->
                        <div class="p-4 flex items-center space-x-3 hover:bg-gray-50 cursor-pointer">
                            <div class="relative">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-300 rounded-full border-2 border-white"></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">Kaoutar Laamiri</h3>
                                    <span class="text-xs text-gray-500">1h</span>
                                </div>
                                <p class="text-xs text-gray-600 truncate">I need to change the venue for my reception</p>
                            </div>
                        </div>
                        
                        <div class="p-4 flex items-center space-x-3 hover:bg-gray-50 cursor-pointer">
                            <div class="relative">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">Mehdi & Fatima</h3>
                                    <span class="text-xs text-gray-500">3h</span>
                                </div>
                                <p class="text-xs text-gray-600 truncate">Thank you for the information!</p>
                            </div>
                        </div>
                        
                        <div class="p-4 flex items-center space-x-3 hover:bg-gray-50 cursor-pointer">
                            <div class="relative">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-300 rounded-full border-2 border-white"></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">Omar & Layla</h3>
                                    <span class="text-xs text-gray-500">Yesterday</span>
                                </div>
                                <p class="text-xs text-gray-600 truncate">We'll be there on time for the meeting</p>
                            </div>
                        </div>
                        
                        <div class="p-4 flex items-center space-x-3 hover:bg-gray-50 cursor-pointer">
                            <div class="relative">
                                <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-12 h-12 rounded-full object-cover">
                                <span class="absolute bottom-0 right-0 w-3 h-3 bg-gray-300 rounded-full border-2 border-white"></span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-sm font-medium text-gray-900 truncate">Amine & Leila</h3>
                                    <span class="text-xs text-gray-500">Mar 18</span>
                                </div>
                                <p class="text-xs text-gray-600 truncate">Can we add 10 more guests to our event?</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Chat Messages -->
                <div class="flex-1 flex flex-col bg-white">
                    <!-- Chat Header -->
                    <div class="px-6 py-4 border-b flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Sara Boulahia</h3>
                                <p class="text-xs text-green-600">Online</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button class="p-2 text-gray-500 hover:text-gray-700 rounded-full hover:bg-gray-100">
                                <i class="fas fa-phone"></i>
                            </button>
                            <button class="p-2 text-gray-500 hover:text-gray-700 rounded-full hover:bg-gray-100">
                                <i class="fas fa-video"></i>
                            </button>
                            <button class="p-2 text-gray-500 hover:text-gray-700 rounded-full hover:bg-gray-100">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Booking Info Banner -->
                    <div class="px-6 py-3 bg-indigo-50 border-b">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-calendar-check text-indigo-600"></i>
                                <span class="text-sm font-medium">Wedding Ceremony & Reception • Mar 24, 2025</span>
                            </div>
                            <button class="text-xs text-indigo-600 hover:underline">View Booking</button>
                        </div>
                    </div>
                    
                    <!-- Messages -->
                    <div class="flex-1 overflow-y-auto p-6 space-y-4">
                        <!-- Date Marker -->
                        <div class="flex justify-center">
                            <span class="text-xs bg-gray-200 text-gray-600 px-3 py-1 rounded-full">Mar 20, 2025</span>
                        </div>
                        
                        <!-- Their Message -->
                        <div class="flex items-end space-x-2">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="chat-message-theirs max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Hello Ahmed! I wanted to check in about the flowers for my wedding ceremony. Can we go with white roses as we discussed?</p>
                                </div>
                                <span class="text-xs text-gray-500">10:24 AM</span>
                            </div>
                        </div>
                        
                        <!-- My Message -->
                        <div class="flex items-end justify-end space-x-2">
                            <div class="flex flex-col items-end">
                                <div class="chat-message-mine max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Hi Sara, absolutely! White roses would be perfect for the ceremony. How many arrangements would you like? We can also add some baby's breath and greenery to enhance the look.</p>
                                </div>
                                <span class="text-xs text-gray-500">10:30 AM</span>
                            </div>
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Me" class="w-8 h-8 rounded-full object-cover">
                        </div>
                        
                        <!-- Their Message -->
                        <div class="flex items-end space-x-2">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="chat-message-theirs max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">That sounds beautiful! I think we'll need about 10 large arrangements for the ceremony and 15 smaller ones for the reception tables. Would that be possible within our budget?</p>
                                </div>
                                <span class="text-xs text-gray-500">10:35 AM</span>
                            </div>
                        </div>
                        
                        <!-- My Message -->
                        <div class="flex items-end justify-end space-x-2">
                            <div class="flex flex-col items-end">
                                <div class="chat-message-mine max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Yes, I believe we can make that work! Let me put together a detailed cost breakdown for you. I'll have it ready by tomorrow. Is there a specific style you have in mind for the table arrangements?</p>
                                </div>
                                <span class="text-xs text-gray-500">10:42 AM</span>
                            </div>
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Me" class="w-8 h-8 rounded-full object-cover">
                        </div>
                        
                        <!-- Date Marker -->
                        <div class="flex justify-center">
                            <span class="text-xs bg-gray-200 text-gray-600 px-3 py-1 rounded-full">Today</span>
                        </div>
                        
                        <!-- Their Message -->
                        <div class="flex items-end space-x-2">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="chat-message-theirs max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Good morning Ahmed! For the table arrangements, I was thinking of something elegant but not too tall so guests can see each other. I liked the round arrangement you showed me last time with the roses and eucalyptus.</p>
                                </div>
                                <span class="text-xs text-gray-500">9:15 AM</span>
                            </div>
                        </div>
                        
                        <!-- Their Message with Image -->
                        <div class="flex items-end space-x-2">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="chat-message-theirs max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm mb-2">Something like this:</p>
                                    <div class="rounded-lg overflow-hidden bg-gray-100 w-48 h-48 flex items-center justify-center">
                                        <i class="fas fa-image text-4xl text-gray-400"></i>
                                    </div>
                                </div>
                                <span class="text-xs text-gray-500">9:16 AM</span>
                            </div>
                        </div>
                        
                        <!-- My Message -->
                        <div class="flex items-end justify-end space-x-2">
                            <div class="flex flex-col items-end">
                                <div class="chat-message-mine max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Perfect! I remember that arrangement. I'll include it in the proposal I'm preparing. Is there anything else you'd like to discuss about the flowers or any other aspects of the wedding?</p>
                                </div>
                                <span class="text-xs text-gray-500">9:20 AM</span>
                            </div>
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Me" class="w-8 h-8 rounded-full object-cover">
                        </div>
                        
                        <!-- Their Message -->
                        <div class="flex items-end space-x-2">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Client" class="w-8 h-8 rounded-full object-cover">
                            <div>
                                <div class="chat-message-theirs max-w-md px-4 py-3 mb-1">
                                    <p class="text-sm">Yes, I'd like to discuss the flowers for the bridesmaids. How many bouquets would you recommend? I have 4 bridesmaids plus my maid of honor.</p>
                                </div>
                                <span class="text-xs text-gray-500">9:24 AM</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Message Input -->
                    <div class="px-6 py-4 border-t">
                        <div class="flex space-x-2">
                            <button class="p-3 text-gray-500 hover:text-gray-700 rounded-full hover:bg-gray-100">
                                <i class="fas fa-paperclip"></i>
                            </button>
                            <div class="relative flex-1">
                                <input type="text" placeholder="Type a message..." class="w-full px-4 py-3 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 flex space-x-1">
                                    <button class="p-2 text-gray-500 hover:text-gray-700">
                                        <i class="far fa-smile"></i>
                                    </button>
                                    <button class="p-2 text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-microphone"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="p-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>