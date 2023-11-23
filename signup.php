<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User Authentication</title>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-8 bg-white rounded-md shadow-md">
        <form id="signupForm">
            <h2 class="text-2xl font-semibold mb-4">Sign Up</h2>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" id="email" name="email" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="grid grid-cols-2 gap-4">
                
                <div class="mb-4">
                    <label for="firstName" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="lastName" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">SIGN UP</button>
            <div class="mt-4 text-center">
                <div class="  mt-4 flex justify-center">
                <input type="checkbox"><p class="ml-4">i agree with this <a href="term&condition.php" class="text-blue-500 hover:underline">term&condition</a>.</p>
                </div>
                <p class="">Do you already have an account? <a href="login.php" class="text-blue-500 hover:underline">login.</a></p>
            </div>
        </form>
</body>
</html>