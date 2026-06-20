<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-heartbeat text-blue-600 text-2xl mr-3"></i>
                        <span class="font-bold text-xl text-gray-800">Shahbaz Medical Center</span>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                    <a href="services.php"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Services</a>
                    <a href="about.php"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                    <a href="contact.php"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Logged in user menu -->
                        <a href="dashboard.php"
                            class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Dashboard</a>
                        <div class="relative group">
                            <button class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                                <i class="fas fa-user mr-2"></i><?php echo htmlspecialchars($_SESSION['username']); ?>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                                <a href="dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                <a href="includes/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Not logged in menu -->
                        <button onclick="openLoginModal()"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            <i class="fas fa-sign-in-alt mr-2"></i>Login
                        </button>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-blue-600 p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Home</a>
                <a href="services.php" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Services</a>
                <a href="about.php" class="block px-3 py-2 text-gray-700 hover:text-blue-600">About</a>
                <a href="contact.php" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Contact</a>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="dashboard.php" class="block px-3 py-2 text-gray-700 hover:text-blue-600">Dashboard</a>
                    <div class="px-3 py-2 text-blue-600 font-medium">
                        <i class="fas fa-user mr-2"></i><?php echo htmlspecialchars($_SESSION['username']); ?>
                    </div>
                    <a href="includes/logout.php" class="block px-3 py-2 text-red-600 hover:text-red-800">Logout</a>
                <?php else: ?>
                    <button onclick="openLoginModal()" class="w-full text-left px-3 py-2 text-blue-600 font-medium">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Login</h2>
                <button onclick="closeLoginModal()" class="text-gray-500 hover:text-gray-700 cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form id="loginForm" action="includes/login_process.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email/Username</label>
                    <input type="text" name="username" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors">
                    Login
                </button>

                <div class="mt-4 text-center">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>