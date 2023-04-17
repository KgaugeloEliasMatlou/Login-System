<?php

require_once 'dbh.php';

if (isset($_POST['signup'])) {
    $username = $_POST['urn'];
    $password = $_POST['pwd'];

    echo $username . " " . $password;

    // Check if username already exists
    $sql = "SELECT * FROM employees WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists.";
    } else {
        // Insert new user into database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO employees (username,password) VALUES ('$username','$hashed_password')";
        mysqli_query($conn, $sql);
        echo "Registration successful.";
    }
}
