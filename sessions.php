<?php
/*
     session are stored in the server
     so it can be used across multiple pages     
     */
session_start();
if (isset($_POST['submit'])) {
    $email = filter_input(
        INPUT_POST,
        'email',
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $password = $_POST['password'];
    if (
        $email == 'vy@gmail.com'
        && $password == '123456'
    ) {
        $_SESSION['email'] = $email;
        //redirect to another page
        header('Location: ./dashboard.php');
    } else {
        echo "Incorrect email/password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo
                    htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input style="margin-left: 23px;" type="text" name="email">
        </div>
        <div style="margin-top: 20px;">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input style="margin-top: 20px; margin-left: 100px;" type="submit" value="Submit" name="submit">
    </form>
</body>

</html>