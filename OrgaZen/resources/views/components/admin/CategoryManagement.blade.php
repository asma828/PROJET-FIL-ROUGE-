<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Service Provider Categories</title>
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
        .category-card {
            transition: all 0.3s ease;
            border-left: 4px solid #5E60CE;
        }
       
        .modal {
            transition: opacity 0.3s ease;
        }
        .modal-content {
            transition: transform 0.3s ease;
        }
        .btn-primary {
            background-color: #5E60CE;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4E50BE;
        }
        .btn-secondary {
            background-color: #6C757D;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #5A6268;
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
                        <a href="{{Route('components.admin.CategoryManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                            <i class="fas fa-tags w-5 h-5 mr-3"></i>
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
                        <a href="#" class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-credit-card w-5 h-5 mr-3"></i>
                            <span>Payment & Finance</span>
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
                        <h2 class="text-xl font-semibold text-gray-800">Events Categories</h2>
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
            
            <!-- Categories Content -->
            <div class="p-8">
                <div class="mb-6 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-700">All Events Categories</h3>
                    <button onclick="openAddCategoryModal()" class="btn-primary px-4 py-2 text-white rounded-md flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add New Category
                    </button>
                </div>
                
                <!-- Categories Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Weddings</h3>
                                    <p class="text-sm text-gray-500">12 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A wedding is a joyful celebration of love and commitment</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                          
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                45 Bookings
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Birthdays</h3>
                                    <p class="text-sm text-gray-500">8 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A birthday is a special celebration marking another year of life, filled with joy.</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                            
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                32 Bookings
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Festivals</h3>
                                    <p class="text-sm text-gray-500">10 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A festival is a vibrant celebration of culture, tradition, and community.</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                38 Bookings
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Corporate Events</h3>
                                    <p class="text-sm text-gray-500">6 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A corporate event is a professional gathering designed to foster networking, collaboration.</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                           
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                28 Bookings
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                               
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Childern party</h3>
                                    <p class="text-sm text-gray-500">5 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A children's party is a fun-filled celebration with games, decorations, and treats.</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                24 Bookings
                            </div>
                        </div>
                    </div>
                    
                    <!-- Category Card -->
                    <div class="category-card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">Luxury Private Dinners</h3>
                                    <p class="text-sm text-gray-500">9 Service Providers</p>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">A luxury private dinner is an exclusive dining experience featuring gourmet cuisine, elegant ambiance.</p>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                36 Bookings
                            </div>
                        </div>
                    </div>
                </div>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="modal-content bg-white rounded-xl shadow-lg w-full max-w-md mx-4 transform transition-all">
            <div class="flex justify-between items-center border-b border-gray-200 px-6 py-4">
                <h3 class="text-xl font-semibold text-gray-800">Add New Category</h3>
                <button onclick="closeAddCategoryModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">
                <form>
                    <div class="mb-4">
                        <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                        <input type="text" id="categoryName" name="categoryName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="categoryIcon" class="block text-sm font-medium text-gray-700 mb-2">Category Icon</label>
                        <div class="flex items-center">
                            <button type="button" class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-md mr-2">
                                <i class="fas fa-plus text-gray-600"></i>
                            </button>
                            <select id="categoryIcon" name="categoryIcon" class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option value="camera">select category</option>
                                <option value="utensils"></option>
                                <option value="palette"></option>
                                <option value="music"></option>
                                <option value="birthday-cake"></option>
                                <option value="location-arrow"></option>
                                <option value="gift"></option>
                                <option value="tshirt"></option>
                                <option value="lightbulb"></option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="categoryDescription" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea id="categoryDescription" name="categoryDescription" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>
                    <div class="flex justify-end space-x-3 mt-6">
                        <button type="button" onclick="closeAddCategoryModal()" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">Cancel</button>
                        <button type="submit" class="btn-primary px-4 py-2 text-white rounded-md">Save Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function openAddCategoryModal() {
            document.getElementById('addCategoryModal').classList.remove('hidden');
        }
        
        function closeAddCategoryModal() {
            document.getElementById('addCategoryModal').classList.add('hidden');
        }
        
      
        
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButtons = document.querySelectorAll('.dropdown button');
            
            dropdownButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dropdown = this.nextElementSibling;
                    dropdown.classList.toggle('hidden');
                });
            });
        });
    </script>
</body>
</html>