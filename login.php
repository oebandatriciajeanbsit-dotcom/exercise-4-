<?php

session_start();

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {

        $message = "Please enter your username and password.";

    } else {

        $stmt = $conn->prepare(
            "SELECT id, fullname, username, password
             FROM users
             WHERE username = ?"
        );

        $stmt->bind_param("s", $username);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {

            $user = $result->fetch_assoc();

            if (password_verify($password, $user["password"])) {

                $_SESSION["user_id"] = $user["id"];
                $_SESSION["fullname"] = $user["fullname"];
                $_SESSION["username"] = $user["username"];

                header("Location: dashboard.php");
                exit();

            } else {

                $message = "Invalid username or password.";

            }

        } else {

            $message = "Invalid username or password.";

        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Group 2</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">

        <h1>GROUP 2</h1>

        <p>Integrative Programming Activity</p>

    </div>

    <div class="card">

        <h2>LOGIN</h2>

        <?php if ($message != ""): ?>

            <div class="message error">
                <?php echo htmlspecialchars($message); ?>
            </div>

        <?php endif; ?>

        <form method="POST" action="login.php">

            <div class="form-group">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Enter username"
                    required
                >

            </div>

            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter password"
                    required
                >

            </div>

            <button class="btn" type="submit">
                LOGIN
            </button>

        </form>

        <div class="link">

            Don't have an account?

            <a href="register.php">
                Register here
            </a>

        </div>

    </div>

</div>

</body>
</html>
