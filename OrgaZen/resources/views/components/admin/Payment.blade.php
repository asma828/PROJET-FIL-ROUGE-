<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Payment & Finance</title>
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
        .tab-button {
            transition: all 0.3s ease;
        }
        .tab-button.active {
            background-color: #5E60CE;
            color: white;
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
                        <a href="{{Route('components.admin.Payment')}}" class="nav-link flex items-center px-4 py-3 rounded-lg bg-white bg-opacity-10">
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
                        <h2 class="text-xl font-semibold text-gray-800">Payment & Finance</h2>
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

            <!-- Payment & Finance Content -->
            <div class="p-8">
                <!-- Financial Overview Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="card bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center">
                            <div class="rounded-full bg-indigo-100 p-3 mr-4">
                                <i class="fas fa-dollar-sign text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700">Total Revenue</h3>
                                <p class="text-2xl font-bold text-indigo-600">00.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="mb-6">
                    <div class="flex border-b border-gray-200">
                        <button class="tab-button active py-3 px-6 text-sm font-medium" data-tab="transactions">
                            Transactions
                        </button>
                        
                    </div>
                </div>

                <!-- Tab Content -->
                <div id="transactions" class="tab-content">
                    <!-- Transactions Table -->
                    <div class="card bg-white rounded-xl shadow-sm p-6 mb-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead>
                                    <tr class="border-b border-gray-200">
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Transaction ID</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">From/To</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">#TXN-0001</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Mar 15, 2025</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Payment</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                                <div class="text-sm text-gray-900">Sara Boulahia</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Sara Wedding</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-indigo-600">00.00</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">#TXN-0002</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Mar 17, 2025</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Commission</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                                <div class="text-sm text-gray-900">Ahmed sami</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Sara Wedding</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-indigo-600">00.00</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">#TXN-0003</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Mar 18, 2025</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Payout</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                                <div class="text-sm text-gray-900">Hamza Lhadouchi</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900"> Family Reunion</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-red-600">00.00</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">#TXN-0004</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Mar 18, 2025</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Deposit</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full mr-2" src="https://i.pinimg.com/736x/80/23/48/8023488a5b2223e0744e8e8a4a9f2060.jpg" alt="">
                                                <div class="text-sm text-gray-900">Ilyass Anida</div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">Annual Meeting</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-indigo-600">00.00</td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     
                    </div>
                </div>
</body>
</html>