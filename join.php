<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Join</title>
</head>
<body>
    <div id="wrapper">
        <form id="form" method="post" action = "joincheck.php">
            <p id="title">Join</p>
            <p id="email">EMAIL</p>
            <input type="text" id="id" name = "user_id" placeholder="Enter email here">
            <p id="Pw">PASSWORD</p>
            <input type="password" id="password" name = "user_pw" placeholder="Enter password here">
            <input type="submit" value="로그인" id="login">
			
			<div class = "warning">
				<p style = "text-align:center;">
					데이터베이스 안에 있는 아이디와 중복되면 안됩니다.
				</p>
			</div>
        </form>
    </div>
</body>
</html>