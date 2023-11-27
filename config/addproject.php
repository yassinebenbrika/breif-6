<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectname = $_POST['projectname'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $teamI = $_POST['teamId'];
    $query = "INSERT INTO projects (project_name, description, deadline , 	teamId) VALUES ('$projectname', '$description', '$deadline' , '$teamI')";

    mysqli_query($con, $query);

    header("Location: landing_po.php");
}