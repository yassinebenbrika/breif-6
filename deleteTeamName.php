<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ID'])) {
    // Sanitize the input
    $ID = mysqli_real_escape_string($con, $_POST['ID']);

    // Update projects table to set teamId to NULL or another valid team id
    $update_query = "UPDATE projects SET teamId = NULL WHERE teamId = (SELECT id FROM equipe WHERE team = '$ID')";
    mysqli_query($con, $update_query);

    // Perform the deletion query
    $delete_query = "DELETE FROM equipe WHERE team = '$ID'";
    mysqli_query($con, $delete_query);

    // Redirect back to the page after deletion
    header('Location: landing_sm.php');
    exit();
}
?>
