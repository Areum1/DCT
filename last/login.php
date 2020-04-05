<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div id="wrapper">
        <form id="form" method="post" action = "logincheck.php">
            <p id="title">Login</p>
            <p id="email">EMAIL</p>
            <input type="text" id="id" name = "user_id">
            <p id="Pw">PASSWORD</p>
            <input type="password" id="password" name = "user_pw">
            <button type="submit" id="login">로그인</button>
        </form>
    </div>
</body>
</html>