<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Register</title>
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
        .register-container {
            background-image: url('/api/placeholder/1200/800');
            background-size: cover;
            background-position: center;
        }
        .logo-text {
            background: linear-gradient(135deg, #A0522D, #CE9F5E, #CE5E60);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .auth-form {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.85);
        }
        .btn-primary {
            background-color: #A0522D;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #A0522D;
            transform: translateY(-2px);
        }
        .btn-secondary {
            background-color: #CE9F5E;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #be8f4e;
            transform: translateY(-2px);
        }
        .link-accent {
            color: #CE5E60;
            transition: all 0.3s ease;
        }
        .link-accent:hover {
            color: #b64e50;
        }
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        .input-field:focus {
            border-color: #A0522D;
            box-shadow: 0 0 0 3px rgba(94, 96, 206, 0.1);
        }
        .social-btn {
            transition: all 0.3s ease;
        }
        .social-btn:hover {
            transform: translateY(-2px);
        }
        .tab {
            transition: all 0.3s ease;
        }
        .tab.active {
            color: #A0522D;
            border-color: #A0522D;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col justify-center py-8 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md mb-4">
            <h1 class="text-4xl font-extrabold text-center logo-text">Orgazen</h1>
            <h2 class="mt-2 text-center text-lg font-medium text-gray-600">Create your account</h2>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-xl">
            <div class="register-container rounded-xl overflow-hidden shadow-xl">
                <div class="auth-form py-6 px-6 rounded-xl">
                    <!-- User Type Tabs -->
                    <div class="flex border-b border-gray-200 mb-6">
                        <button class="tab flex-1 py-3 px-4 text-center font-medium border-b-2 border-transparent text-gray-500 active" id="client-tab">
                            <i class="fas fa-user mr-2"></i>Client
                        </button>
                        <button class="tab flex-1 py-3 px-4 text-center font-medium border-b-2 border-transparent text-gray-500" id="provider-tab">
                            <i class="fas fa-building mr-2"></i>Service Provider
                        </button>
                    </div>

                    <form class="space-y-4" action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input id="first_name" name="first_name" type="text" required 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                        placeholder="name">
                                </div>
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input id="last_name" name="last_name" type="text" required 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                        placeholder="last name">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input id="email" name="email" type="email" autocomplete="email" required 
                                    class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                    placeholder="youremail@gmail.com">
                            </div>
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input id="password" name="password" type="password" required 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                        placeholder="••••••••">
                                </div>
                            </div>

                            <div>
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm password</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input id="confirm_password" name="confirm_password" type="password" required 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                        placeholder="••••••••">
                                </div>
                            </div>
                        </div>

                        <!-- Service Provider Fields (hidden by default) -->
                        <div id="provider-fields" class="hidden space-y-4">
                            <div>
                                <label for="business_name" class="block text-sm font-medium text-gray-700">Business name</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-building text-gray-400"></i>
                                    </div>
                                    <input id="business_name" name="business_name" type="text" 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                        placeholder="Your Business Name">
                                </div>
                            </div>
                            
                            <div>
                                <label for="service_type" class="block text-sm font-medium text-gray-700">Service type</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-briefcase text-gray-400"></i>
                                    </div>
                                    <select id="service_type" name="service_type" 
                                        class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3">
                                        <option value="">Select event type</option>
                                        <option value="photography">Weddings</option>
                                        <option value="catering">Birthdays</option>
                                        <option value="decoration">Corporate Events</option>
                                        <option value="music">Festivals</option>
                                        <option value="venue">Childern party</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                       

                        <div>
                            <button type="submit" class="btn-primary w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white focus:outline-none">
                                Create Account
                            </button>
                        </div>
                    </form>

                    
                    
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account?
                            <a href="{{Route('components.auth.login')}}" class="link-accent font-medium">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple tab switching logic
        document.getElementById('client-tab').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('provider-tab').classList.remove('active');
            document.getElementById('provider-fields').classList.add('hidden');
        });
        
        document.getElementById('provider-tab').addEventListener('click', function() {
            this.classList.add('active');
            document.getElementById('client-tab').classList.remove('active');
            document.getElementById('provider-fields').classList.remove('hidden');
        });
    </script>
</body>
</html>