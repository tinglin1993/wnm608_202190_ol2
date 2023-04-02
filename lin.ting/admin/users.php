<?php

include "../lib/php/functions.php";

// Load the users from the JSON file
$users_array = file_get_contents("../data/users.json");
$users = json_decode($users_array, true);

// Handle the form submission
if(isset($_POST['submit'])) {

    // Get the user ID from the form data
    $id = $_POST['id'];

    // Update the user's data with the new values from the form
    $users['users'][$id]['name'] = $_POST['name'];
    $users['users'][$id]['type'] = $_POST['type'];
    $users['users'][$id]['email'] = $_POST['email'];
    $users['users'][$id]['classes'] = explode(",", $_POST['classes']);

    // Encode the updated user data as JSON
    $json = json_encode($users, JSON_PRETTY_PRINT);

    // Save the updated JSON data to the file
    file_put_contents('../data/users.json', $json);

    // Redirect back to the user's page
    header("Location: users.php?id=".$id);
    exit();
}

// Function to display the user details page
function showUserPage() {
    global $users;

    // Get the user ID from the query string
    $id = $_GET['id'];

    // Get the user data from the array
    $user = $users['users'][$id];

    // Convert the classes array to a comma-separated string
    $classes = implode(",", $user['classes']);

    // Display the user details form
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
