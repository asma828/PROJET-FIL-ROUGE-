<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Login</title>
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
        .login-container {
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
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md mb-6">
            <h1 class="text-4xl font-extrabold text-center logo-text">Orgazen</h1>
            <h2 class="mt-2 text-center text-lg font-medium text-gray-600">Sign in to your account</h2>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="login-container rounded-xl overflow-hidden shadow-xl">
                <div class="auth-form py-8 px-6 rounded-xl">
                    <form class="space-y-6" action="#" method="POST">
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

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input id="password" name="password" type="password" autocomplete="current-password" required 
                                    class="input-field pl-10 focus:ring-0 focus:outline-none block w-full sm:text-sm rounded-lg py-3" 
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            

                            <div class="text-sm">
                                <a href="#" class="link-accent font-medium">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn-primary w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white focus:outline-none">
                                Sign in
                            </button>
                        </div>
                    </form>

                    
                    
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            <a href="{{Route('components.auth.register')}}" class="link-accent font-medium">
                                Register now
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>