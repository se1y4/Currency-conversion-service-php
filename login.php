<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
   
    if ($username == "admin" && $password == "password") {
        
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        
        
        header('Location: currencyconvertor.php');
        exit();
    } else {
        
        echo "Wrong login or password.";
    }
}
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Аутентификация пользователя</title>
</head>
<body>
    <h2>Sing in</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="username">Login:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Sing in</button>
        </div>
    </form>
</body>
</html>