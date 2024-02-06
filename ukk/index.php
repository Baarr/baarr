<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="lgn.css">
</head>
<body>
    <div class="container">
        <form method="post" action="ceklgn.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>

            <button type="submit">Login</button>

        </form>
    </div>
</body>
</html>