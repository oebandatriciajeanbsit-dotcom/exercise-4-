<?php

session_start();

// Prevent access if user is not logged in
if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");
    exit();

}

$fullname = $_SESSION["fullname"];
$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Group 2</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="dashboard">

    <div class="dashboard-card">

        <h2>GROUP 2</h2>

        <h1>
            Welcome, <?php echo htmlspecialchars($fullname); ?>!
        </h1>

        <p>
            Welcome Groupmates!
        </p>

        <p>
            You have successfully logged into our
            Integrative Programming activity.
        </p>

        <p>
            <strong>Username:</strong>
            <?php echo htmlspecialchars($username); ?>
        </p>

        <a class="logout" href="logout.php">
            LOGOUT
        </a>

    </div>

</div>

</body>
</html>
