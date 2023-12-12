<?php
require_once('config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  isset($_POST['newteam']) && isset($_POST['team']) ) {
    // Fetch the original teamId and new teamId from the form
    $teamId = mysqli_real_escape_string($con, $_POST['team']);
    $newteamId = mysqli_real_escape_string($con, $_POST['newteam']);

    // Perform the modification query
    $update_query = "UPDATE equipe SET team = '$newteamId' WHERE id = '$teamId'";
    mysqli_query($con, $update_query);

    // Redirect back to the page after modification
    header('Location: landing_sm.php');
    exit();
}
?>

?>
