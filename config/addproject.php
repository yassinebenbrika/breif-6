<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $team = $_POST['team'];

    $query = "INSERT INTO projects (project_name, description, deadline, team) VALUES ('$projectname', '$description', '$deadline', '$team')";

    mysqli_query($con, $query);

    header("Location: landing_po.php");
}