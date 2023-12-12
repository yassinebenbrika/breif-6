<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ID'])) {
    // Fetch the project name from the form
    $ID = mysqli_real_escape_string($con, $_POST['ID']);

    // Fetch the existing project information based on the project name
    $result = mysqli_query($con, "SELECT * FROM equipe where id = $ID");

    if (!$result) {
        die('Query Error: ' . mysqli_error($con));
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            echo '<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://cdn.tailwindcss.com"></script>
                <title>Your Company</title>
            </head>
            <body>
                <section class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center">
                    <div class="px-6 py-16 mx-auto text-center">
                        <!-- Display and pre-fill the existing project information in the form -->
                        <form method="POST" action="modifyTeamName.php">
                            <input type="hidden" name="team" value="' . $row['id'] . '">
                            <input type="text" name="newteam" value="' . $row['team'] . '" class="px-4 py-2 text-gray-700 bg-white border rounded-md mb-4 sm:mx-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" placeholder="team ID" required>

                            <button type="submit" name="submit" class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-700 rounded-md sm:mx-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                Modify
                            </button>
                        </form>
                    </div>
                </section>
            </body>
            </html>';
        }
    }
}

