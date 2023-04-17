<?php


?>
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
    <div class="bg-primary">
        <div class="container">
            <form method="post" action="logincode.php">
                <div class="col">
                    <div class="hide-md-lg">
                        <H4 class="text-white">Login</H4>
                    </div>

                    <input type="text" name="urn" placeholder="Username" required>
                    <input type="password" name="pwd" placeholder="Password" required>
                    <button class="btn btn-sm btn-dark" type="submit" name="login">Login</button>
                </div>

            </form>


        </div>
        <br>
        <div class="container">
            <form method="post" action="signupcode.php">
                <div class="col">
                    <div class="hide-md-lg">
                        <H4 class="text-white">Register a new User</H4>
                    </div>

                    <input type="text" name="urn" placeholder="Username" required>
                    <input type="password" name="pwd" placeholder="Password" required>
                    <button class="btn btn-sm btn-dark" type="submit" name="signup">Signup</button>
                </div>

            </form>
        </div>

        <br>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>