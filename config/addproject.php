<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $team = $_POST['teamId'];

    $query = "INSERT INTO projects (project_name, description, deadline, team) VALUES ('$projectname', '$description', '$deadline', '$teamId')";

    mysqli_query($con, $query);

    header("Location: landing_po.php");
}