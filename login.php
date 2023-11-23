<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $loginUsername = $_POST['loginUsername'];
    $loginPassword = $_POST['loginPassword'];

    $query = "SELECT * FROM users WHERE email = '$loginUsername' AND password = '$loginPassword' AND";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {

        $userData = mysqli_fetch_assoc($result);

        header("Location: welcome.php}");
        exit();
    } else {
        
        echo "Invalid username or password";
    }
    
}
?>
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
        <form action="" method="POST">
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
            <div class="mb-4">
                <label for="loginUsername" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="loginPassword" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Login</button>
        </form>
        <div class="mt-4 text-center">
            <p>Don't have an account yet? <a href="signup.php" class="text-blue-500 hover:underline">Sign Up</a></p>
        </div>
    </div>
</body>

</html>
