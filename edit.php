<?php
require "function.php";

    $idEdit = $_GET["id"];
    $sql = "SELECT * FROM list WHERE id=$idEdit";
    $result = $conn->query($sql);

    if (isset($_POST["edit"])) {
        editToDo(htmlspecialchars($_POST["edittask"]), $idEdit);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Todolist</title>
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
    <form action="" method="POST">
        <?php foreach($result as $list) : ?>
            <input type="text" name="edittask" value="<?= $list["todo"] ?>">
        <?php endforeach ?>
        <button type="submit" name="edit">Simpan</button>
    </form>
</body>
</html>