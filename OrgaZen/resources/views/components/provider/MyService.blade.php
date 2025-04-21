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
            
         
                
                
<!-- Service Information Form -->
<div class="card bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="border-b border-gray-200">
        <div class="flex">
            <button class="px-6 py-3 text-orange-700 border-b-2 border-orange-700 font-medium">Service Information</button>
        </div>
    </div>
    
    <div class="p-6">
        <!-- Service Information Form -->
        <form action="{{route('services')}}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="service_category" class="block text-sm font-medium text-gray-700 mb-1">Service</label>
                <div class="flex items-center">
                    <i class="fas fa-heart text-pink-500 mr-3"></i>
                    <input type="text" id="service_category" name='name' value="{{ $service->name ?? '' }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
            <input type="hidden" name="provider_id" value="{{ auth()->id() }}">
            <div class="mb-6">
                <label for="service_description" class="block text-sm font-medium text-gray-700 mb-1">Service Description</label>
                <textarea id="service_description" name='description' rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">{{ $service->description ?? '' }}</textarea>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="service_area" class="block text-sm font-medium text-gray-700 mb-1">Service Area</label>
                    <input type="text" id="service_area" name="service_area" value="{{ $service->service_area ?? '' }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="experience_level" class="block text-sm font-medium text-gray-700 mb-1">Experience Level</label>
                    <input type="text" id="experience_level" name="experience_level" value="{{ $service->experience_level ?? '' }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Base Price ($)</label>
                    <input type="number" id="price" name="price" value="{{ $service->price ?? '' }}" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="guest_count" class="block text-sm font-medium text-gray-700 mb-1">For How Many Guests</label>
                    <input type="number" id="guest_count" name="guest_count" value="{{ $service->guest_count ?? '' }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
           
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@if(isset($service) && $service)
                <!-- Gallery -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Service Gallery</h3>
                        <!-- Upload Button / Form -->
                        <form action="{{ route('service.images.store', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-700 transition cursor-pointer">
                                <i class="fas fa-upload mr-2"></i>Add Photos
                                <input type="file" name="images[]" multiple class="hidden" onchange="this.form.submit()">
                            </label>
                        </form>
                    </div>
                    @if($service->images && count($service->images) > 0)
                    @foreach($service->images as $image)
                    <div class="relative group mb-4 mr-4 inline-block w-48">
                        <img src="{{ asset('storage/' . $image->image_path) }}" 
                             alt="Gallery Image" 
                             class="w-full h-32 object-cover rounded-lg shadow-sm">
                        
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition rounded-lg">
                            <form action="{{ route('service.images.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Delete this image?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 bg-white rounded-full text-red-500 hover:bg-red-100 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
                @else
                <p class="text-gray-500">No images uploaded yet.</p>
            @endif
            </div>
            @else
    <div class="bg-white rounded-xl shadow-sm p-6">
        <p class="text-gray-500">Please create a service first before adding images.</p>
        <!-- Maybe add a link to create a service here -->
    </div>
@endif
        </div>
    </div>
</body>
</html>