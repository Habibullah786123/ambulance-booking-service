<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Shahbaz Medical Center</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100">

    <?php include 'includes/navbar.php'; ?>

    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Create Account</h2>

            <?php
            if (isset($_SESSION['error'])) {
                echo '<p class="text-red-600 mb-4">' . htmlspecialchars($_SESSION['error']) . '</p>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<p class="text-green-600 mb-4">' . htmlspecialchars($_SESSION['success']) . '</p>';
                unset($_SESSION['success']);
            }
            ?>


            <form id="registerForm" action="includes/register_process.php" method="POST" class="space-y-5">
                <div>
                    <label for="username" class="block mb-2 text-gray-700 font-semibold">Username</label>
                    <input type="text" id="username" name="username" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <div>
                    <label for="email" class="block mb-2 text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <div>
                    <label for="password" class="block mb-2 text-gray-700 font-semibold">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <div>
                    <label for="confirm_password" class="block mb-2 text-gray-700 font-semibold">Confirm
                        Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md transition-colors">
                    Register
                </button>
            </form>

            <p class="mt-4 text-center text-gray-600" onclick="openLoginModal()">
                Already have an account?
                <span class="text-blue-600 hover:text-blue-800 font-semibold cursor-pointer">Login here</span>
            </p>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="js/script.js"></script>

</body>

</html>