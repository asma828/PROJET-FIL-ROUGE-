<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - My Services</title>
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
                        <a href="{{Route('components.provider.Chat')}}" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-comment-alt w-5 h-5 mr-3"></i>
                            <span>Live Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.provider.MyService')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">My Services</h2>
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
            
         
                
                
                <!-- Service Details -->
                <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Service Information</h3>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Category</label>
                        <div class="flex items-center bg-gray-100 rounded-lg p-3">
                            <i class="fas fa-heart text-pink-500 mr-3"></i>
                            <span class="text-gray-800">Wedding Planning</span>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Description</label>
                        <textarea class="w-full border border-gray-300 rounded-lg p-3 text-gray-700 text-sm resize-none h-32" readonly>We provide comprehensive wedding planning services for couples looking to create their dream wedding day. From venue selection to decoration, catering, entertainment, and more, we handle all aspects of your special day with meticulous attention to detail. Our team of experienced wedding planners will work closely with you to ensure your vision becomes reality.</textarea>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Service Area</label>
                            <div class="flex items-center bg-gray-100 rounded-lg p-3">
                                <i class="fas fa-map-marker-alt text-indigo-500 mr-3"></i>
                                <span class="text-gray-800">Casablanca, Rabat, Marrakech</span>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Experience Level</label>
                            <div class="flex items-center bg-gray-100 rounded-lg p-3">
                                <i class="fas fa-medal text-amber-500 mr-3"></i>
                                <span class="text-gray-800">5+ years of experience</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700 transition">
                            Edit Service Information
                        </button>
                    </div>
                </div>
                
                <!-- Gallery -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Service Gallery</h3>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700 transition">
                            <i class="fas fa-upload mr-2"></i>Add Photos
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="relative group">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Gallery Image" class="w-full h-32 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                <button class="p-1 bg-white rounded-full text-red-500 mr-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="p-1 bg-white rounded-full text-indigo-500">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Gallery Image" class="w-full h-32 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                <button class="p-1 bg-white rounded-full text-red-500 mr-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="p-1 bg-white rounded-full text-indigo-500">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Gallery Image" class="w-full h-32 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                <button class="p-1 bg-white rounded-full text-red-500 mr-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="p-1 bg-white rounded-full text-indigo-500">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="Gallery Image" class="w-full h-32 object-cover rounded-lg">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                                <button class="p-1 bg-white rounded-full text-red-500 mr-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="p-1 bg-white rounded-full text-indigo-500">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>