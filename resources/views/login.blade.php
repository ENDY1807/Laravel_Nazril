<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="justify-content-center align-items-center d-flex flex-column p-2 m-5">
            <div class="card p-2 m-5 justify-content-center">
                <h1>Login</h1>
                <form action="login.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>