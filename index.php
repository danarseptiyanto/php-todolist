<?php
require "function.php";

    $sql = "SELECT * FROM list";
    $result = $conn->query($sql);

    if (isset($_POST["submit"])) {
        addToDo(htmlspecialchars($_POST["baru"]));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todolist</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
</head>
<body style="max-width: 800px;" class="container">
    <br>
    <br>
    <div style="display: flex; justify-content: space-between; align-items: baseline;">
        <h1><i class="ri-file-list-2-fill"></i> Todolist</h1>
        <a style="text-decoration: none;" href=""><h1><i class="ri-github-fill"></i></h1></a>
    </div>
    <div>
        <form action="" method="POST">
            <input type="text" name="baru" autofocus>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <hr>
    <?php foreach($result as $list) : ?>
    <article style="display: flex; justify-content: space-between; align-items: baseline;">
        <p style="text-transform: capitalize; max-width: 500px;"><?= $list["todo"] ?></p>
        <div>
        <a style="padding-right: 5px;" href="edit.php?id=<?= $list["id"] ?>"><button><i class="ri-edit-box-line"></i></button></a>
        <a href="delete.php?id=<?= $list["id"] ?>"><button class="secondary"><i class="ri-delete-bin-2-line"></i></button></a>
        </div>
    </article>
    <?php endforeach ?>
</body>
</html>