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
        .category-image {
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .file-upload-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .file-upload-container input[type=file] {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
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
                        <li>
                            <a href="{{Route('components.admin.TagsManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                                <i class="fas fa-hashtag w-5 h-5 mr-3"></i>
                                <span>Tags Management</span>
                            </a>
                        </li>
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
                    @foreach($categories as $categorie)
                    <div class="category-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <img src="{{ Str::startsWith($categorie->image, 'http') || Str::startsWith($categorie->image, 'images/') ? asset($categorie->image) : asset('storage/' . $categorie->image) }}" alt="Wedding" class="category-image w-full">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-700">{{$categorie->name}}</h3>
                                </div>
                                <div class="dropdown relative">
                                    <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden z-10">
                                        <a href="{{ route('category.edit', $categorie->id) }}" 
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Edit
                                         </a>
                                       <form action="{{ route('category.destroy', $categorie->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                        <button class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 border-t border-gray-100">
                                <p class="text-sm text-gray-600">{{$categorie->description}}</p>
                            </div>
                            <div class="flex justify-between mt-4 pt-4 border-t border-gray-100">
                                <div class="text-sm text-gray-500">
                                    <i class="fas fa-calendar-check text-green-500 mr-1"></i>
                                    {{ $categorie->reservation_count}} Bookings
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
<div id="addCategoryModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden overflow-auto">
    <div class="modal-content bg-white rounded-xl shadow-lg w-full max-w-md mx-4 transform transition-all">
        <div class="flex justify-between items-center border-b border-gray-200 px-6 py-4">
            <h3 class="text-xl font-semibold text-gray-800">Add New Category</h3>
            <button onclick="closeAddCategoryModal()" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </a>
        </div>
        <div class="p-6">
            <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <input type="hidden" name="category_id" id="categoryId">
                    <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                    <input type="text" id="categoryName" name="categoryName" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="categoryImage" class="block text-sm font-medium text-gray-700 mb-2">Category Image</label>
                    <div class="mt-1 flex items-center">
                        <label class="cursor-pointer flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-upload mr-2"></i>
                            <span>Upload Image</span>
                            <input type="file" id="categoryImage" name="categoryImage" accept="image/*" class="hidden">
                        </label>
                        <p class="ml-3 text-xs text-gray-500">JPEG, PNG, or GIF. Max 2MB.</p>
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
            // Handle dropdown toggle
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