<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Tags Management</title>
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
        .tag-card {
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
        .tag-icon {
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background-color: #5E60CE;
            color: white;
        }
        /* Modal background overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 50;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        /* Modal content */
        .modal-container {
            background-color: white;
            border-radius: 0.5rem;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }
        .modal-overlay.active .modal-container {
            transform: translateY(0);
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
                            <i class="fas fa-tags w-5 h-5 mr-3"></i>
                            <span>Events Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.TagsManagement')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Tags Management</h2>
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
            
            <!-- Tags Content -->
            <div class="p-8">
                <div class="mb-6 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-700">All Tags</h3>
                    <div class="flex items-center space-x-4">
                       
                        <button id="openAddTagModal" class="btn-primary px-4 py-2 text-white rounded-md flex items-center">
                            <i class="fas fa-plus mr-2"></i> Add New Tag
                        </button>
                    </div>
                </div>
                
                <!-- Tags Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    <!-- Tag Card 1 -->
                    @foreach ($tags as $tag)    
                    <div class="tag-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="tag-icon mr-3">
                                        <i class="fas fa-hashtag"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-700">{{$tag->name}}</h3>
                                </div>
                                <div class="dropdown relative">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('tag.edit', $tag->id) }}" class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('tag.destroy', $tag->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-gray-400 hover:text-red-600">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>

    <!-- Add Tag Modal -->
    <div id="addTagModal" class="modal-overlay">
        <div class="modal-container">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-gray-800">Add New Tag</h3>
                    <button id="closeAddTagModal" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <form action="{{route('tags.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="tag_name" class="block text-sm font-medium text-gray-700 mb-2">Tag Name</label>
                        <input type="text" id="tag_name" name="name" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                            placeholder="Enter tag name">
                    </div>
                    <div class="flex justify-end mt-6 space-x-3">
                        <button type="button" id="cancelAddTag" class="btn-secondary px-4 py-2 text-white rounded-md">
                            Cancel
                        </button>
                        <button type="submit" class="btn-primary px-4 py-2 text-white rounded-md">
                            Add Tag
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        document.addEventListener('DOMContentLoaded', () => {
            const openAddTagModalBtn = document.getElementById('openAddTagModal');
            const closeAddTagModalBtn = document.getElementById('closeAddTagModal');
            const cancelAddTagBtn = document.getElementById('cancelAddTag');
            const addTagModal = document.getElementById('addTagModal');
            
            // Open modal
            openAddTagModalBtn.addEventListener('click', () => {
                addTagModal.classList.add('active');
            });
            
            // Close modal
            const closeModal = () => {
                addTagModal.classList.remove('active');
            };
            
            closeAddTagModalBtn.addEventListener('click', closeModal);
            cancelAddTagBtn.addEventListener('click', closeModal);

        });
    </script>
</body>
</html>