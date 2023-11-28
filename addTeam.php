<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $teamname = $_POST['teamname']; // Fix the array key here
    $query = "INSERT INTO equipe (team) VALUES ('$teamname')"; // Fix the extra single quote here

    mysqli_query($con, $query);

    header("Location: landing_po.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Your Company</title>
</head>

<body class="bg-gradient-to-tr from-orange-400 via-amber-900 to-blue-500 bg-no-repeat h-screen flex items-center justify-center ">
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 w-11/12	">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Account settings</h2>

    <form  method="post">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="projectname">team's Name</label>
                <input id="teamname" name="teamname" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
        <div class="flex justify-end mt-6">
            <button  id="addteamSaver" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">add</button>
        </div>
    </form>
</section>
</body>
</html>