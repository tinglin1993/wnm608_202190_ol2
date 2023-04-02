<?php

include "../lib/php/functions.php";

$users_array = file_get_contents("../data/users.json");
$users = json_decode($users_array, true);


if(isset($_POST['submit'])) {


    $id = $_POST['id'];


    $users['users'][$id]['name'] = $_POST['name'];
    $users['users'][$id]['type'] = $_POST['type'];
    $users['users'][$id]['email'] = $_POST['email'];
    $users['users'][$id]['classes'] = explode(",", $_POST['classes']);

  
    $json = json_encode($users, JSON_PRETTY_PRINT);

    file_put_contents('../data/users.json', $json);

  
    header("Location: users.php?id=".$id);
    exit();
}


function showUserPage() {
    global $users;


    $id = $_GET['id'];

    $user = $users['users'][$id];

    $classes = implode(",", $user['classes']);


    echo <<<HTML
    <nav class="nav nav-crumbs">
        <ul>
            <li><a href="admin/users.php">Back</a></li>
        </ul>
    </nav>
    <div>
        <form method="post">
            <input type="hidden" name="id" value="$id">
            <h2>User Details</h2>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{$user['name']}">
            </div>
            <div>
                <label for="type">Type:</label>
                <input type="text" name="type" value="{$user['type']}">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{$user['email']}">
            </div>
            <div>
                <label for="classes">Classes:</label>
                <input type="text" name="classes" value="{$classes}">
            </div>
            <div>
                <input type="submit" name="submit" value="Update">
            </div>
        </form>
    </div>
    HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>
    
    <?php include "../parts/meta.php";?>
</head>
<body>

    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php showUserPage(); ?>

</body>
</html>
