<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <?php
    require_once 'dbh.php';

    if (isset($_POST['login'])) {
        $username = $_POST['urn'];
        $password = $_POST['pwd'];

        // Retrieve user from database
        $sql = "SELECT * FROM employees WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                // Login successful
                session_start();
                $_SESSION['username'] = $username;
                echo '<center><div class="alert alert-success">Login Successfull!!</div></center>';
                header('Location: home.php');
                exit;
            } else {
                echo "<h1>Invalid password.<h1>";
            }
        } else {
            echo "User not found.";
        }
    }

    /* if (isset($_SESSION['user_id'])) {
          echo '<center><div class="alert alert-success">Login Successfull!!</div></center>';
        }
        else{
            echo '<center><div class="alert alert-warning">Login Error!!</div></center>';
        }*/
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>