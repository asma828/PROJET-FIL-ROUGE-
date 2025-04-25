<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Edit Category</title>
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
        .btn-primary {
            background-color: #5E60CE;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #4E50BE;
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
                        <a href="{{Route('components.admin.TagsManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                            <i class="fas fa-hashtag w-5 h-5 mr-3"></i>
                            <span>Tags Management</span>
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
                        <h2 class="text-xl font-semibold text-gray-800">Edit Category</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-2 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-bell"></i>
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
            
            <!-- Edit Category Content -->
            <div class="p-8">
                <div class="mb-6 flex items-center">
                    <a href="{{ route('components.admin.CategoryManagement') }}" class="mr-4 text-gray-600 hover:text-gray-800">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="text-lg font-semibold text-gray-700">Edit Category: {{ $category->name }}</h3>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm p-6 max-w-2xl">
                    <form method="POST" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">Category Name</label>
                            <input type="text" id="categoryName" name="categoryName" value="{{ $category->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        </div>
                        
                        <div class="mb-6">
                            <label for="categoryImage" class="block text-sm font-medium text-gray-700 mb-2">Category Image</label>
                            <div class="mt-1">
                                <img src="{{ Str::startsWith($category->image, 'http') || Str::startsWith($category->image, 'images/') ? asset($category->image) : asset('storage/' . $category->image) }}" 
                                    alt="Current category image" class="h-40 object-cover rounded-md mb-4">
                                
                                <div class="flex items-center">
                                    <label class="cursor-pointer flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-upload mr-2"></i>
                                        <span>Upload New Image</span>
                                        <input type="file" id="categoryImage" name="categoryImage" accept="image/*" class="hidden">
                                    </label>
                                    <p class="ml-3 text-xs text-gray-500">JPEG, PNG, or GIF. Max 2MB.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="categoryDescription" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="categoryDescription" name="categoryDescription" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ $category->description }}</textarea>
                        </div>
                        
                        <div class="flex justify-end space-x-3 mt-8">
                            <a href="{{ route('components.admin.CategoryManagement') }}" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">Cancel</a>
                            <button type="submit" class="btn-primary px-6 py-2 text-white rounded-md">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>