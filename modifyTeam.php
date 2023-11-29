<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['teamId'])) {
    // Fetch the project name from the form
    $teamId = $_POST['teamId'];

    // Fetch the new project name from the form
    $newteamIdName = mysqli_real_escape_string($con, $_POST['newteamId']);

    // Perform the modification query
    $update_query = "UPDATE users SET teamId = '$newteamIdName' WHERE teamId = '$teamId'";
    mysqli_query($con, $update_query);

    // Redirect back to the page after modification
    header('Location: landing_sm.php');
    exit();
} else {
    // Handle the case when the form is not submitted properly
    // You may want to display an error message or redirect to an error page
}
?>
