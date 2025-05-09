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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
                        <a href="{{Route('components.admin.dashboard')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
                            <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.UserManagement')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-users w-5 h-5 mr-3"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.EventManagement')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-calendar-check w-5 h-5 mr-3"></i>
                            <span>Event Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.CategoryManagement')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg">
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
                        <a href="{{Route('components.admin.serviceProvider')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-building w-5 h-5 mr-3"></i>
                            <span>Service Providers</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{Route('components.admin.Payment')}}"
                            class="nav-link flex items-center px-4 py-3 rounded-lg">
                            <i class="fas fa-credit-card w-5 h-5 mr-3"></i>
                            <span>Payment & Finance</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="mt-auto">
                <form action="{{ route('logout') }}" method="POST"
                    class="nav-link flex items-center px-4 py-3 rounded-lg">
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
                        
                        <div class="flex items-center space-x-3">
                            <img src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt=""
                                class="w-10 h-10 rounded-full">
                            <div>
                                <p class="text-sm font-medium text-gray-700">{{$profile->first_name}} {{$profile->last_name}}</p>
                                <p class="text-xs text-gray-500">Admin</p>
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
                                <p class="text-2xl font-bold text-indigo-600">{{$TotalEvent}}</p>
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
                                <p class="text-2xl font-bold text-pink-600">{{$TotalUsers}}</p>
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
                                <p class="text-2xl font-bold text-amber-600">{{$TotalProviders}}</p>
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
                                <p class="text-2xl font-bold text-emerald-600">{{$TotalRevenus}}</p>
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
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Event Name</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Client</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Amount</th>
                                    <th
                                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
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
                                                    <div class="text-sm text-gray-900">{{$event->client->first_name}}
                                                        {{$event->client->last_name}}</div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$event->event_date}}</div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{$event->total_price ?? 100}}</td>
                                            <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{Route('reservation.detail',$event->id)}}" class="text-indigo-600 hover:text-indigo-900 mr-3">View</a>
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
                        @foreach ($TopProviders as $provider)
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <img src="{{ $provider->image ? asset('storage/' . $provider->image) : asset('https://intranet.youcode.ma/storage/users/profile/thumbnail/1049-1728486663.JPG') }}"
                                        alt="Provider" class="w-10 h-10 rounded-full mr-3">
                                    <div class="flex-1">
                                        <h4 class="text-sm font-medium text-gray-900">{{$provider->first_name}}
                                            {{$provider->last_name}}</h4>
                                        <div class="flex items-center">
                                            <div class="flex">
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <span class="text-indigo-600 text-sm font-medium">0.0</span> --}}
                                </li>
                        @endforeach
                        </ul>
                    </div>

                    <!--Popular event types-->
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Popular Event Types</h3>
                        <ul class="space-y-4">
                            @foreach ($popularCategories as $Categories)
                            <li class="flex items-center justify-between pb-3 border-b border-gray-100">
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900">{{$Categories->name}}</h4>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="p-1 text-green-500 hover:text-green-700">
                                        <span class="text-indigo-600 text-sm font-medium">{{$Categories->reservation_count}}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
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