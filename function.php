<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todolist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

function addToDo($newTask) {
    global $conn;
    $insert = "INSERT INTO list VALUES ('', '$newTask')";
    mysqli_query($conn, $insert);
    header('Location: index.php');
}

function deleteToDo($idDelete) {
    global $conn;
    $delete = "DELETE FROM list WHERE id = $idDelete";
    mysqli_query($conn, $delete);
    header('Location: index.php');
}

function editToDo($edittask, $idedit) {
    global $conn;
    $edit = "UPDATE list SET todo='$edittask' WHERE id='$idedit'";
    mysqli_query($conn, $edit);
    header('Location: index.php');
}
?>