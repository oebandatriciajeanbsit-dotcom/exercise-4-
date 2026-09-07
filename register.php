<?php

include "db.php";

$message = "";
$message_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST["fullname"]);
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (empty($fullname) || empty($username) || empty($password)) {

        $message = "Please fill in all fields.";
        $message_type = "error";

    } elseif ($password !== $confirm_password) {

        $message = "Passwords do not match.";
        $message_type = "error";

    } else {

        // Check if username already exists
        $check = $conn->prepare(
            "SELECT id FROM users WHERE username = ?"
        );

        $check->bind_param("s", $username);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {

            $message = "Username already exists.";
            $message_type = "error";

        } else {

            // Hash password before saving
            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            $stmt = $conn->prepare(
                "INSERT INTO users (fullname, username, password)
                 VALUES (?, ?, ?)"
            );

            $stmt->bind_param(
                "sss",
                $fullname,
                $username,
                $hashed_password
            );

            if ($stmt->execute()) {

                $message = "Registration successful! You can now login.";
                $message_type = "success";

            } else {

                $message = "Registration failed.";
                $message_type = "error";
            }

            $stmt->close();
        }

        $check->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Group 2</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">

        <h1>GROUP 2</h1>

        <p>Integrative Programming Activity</p>

    </div>

    <div class="card">

        <h2>CREATE ACCOUNT</h2>

        <?php if ($message != ""): ?>

            <div class="message <?php echo $message_type; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>

        <?php endif; ?>

        <form method="POST" action="register.php">

            <div class="form-group">

                <label>Full Name</label>

                <input
                    type="text"
                    name="fullname"
                    placeholder="Enter your full name"
                    required
                >

            </div>

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

            <div class="form-group">

                <label>Confirm Password</label>

                <input
                    type="password"
                    name="confirm_password"
                    placeholder="Confirm password"
                    required
                >

            </div>

            <button class="btn" type="submit">
                REGISTER
            </button>

        </form>

        <div class="link">

            Already have an account?

            <a href="login.php">
                Login here
            </a>

        </div>

    </div>

</div>

</body>
</html>
