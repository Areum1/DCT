
<?php
$user_id = $_POST['user_id'];
$passwd = $_POST['user_pw'];

$conn = mysqli_connect('localhost','test','1111','testdb');

$query = "select * from login where email = '$user_id';";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
$re = mysqli_fetch_array($result);

?>
<!doctype html>
<html>
    <head>
        <title>결과</title>
        <style>
			body{
				background-color: rgba(241, 241, 241, 1);
			}
			.result{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				/*가운데로 보내줌*/
				width: 450px;
				height: 450px;
				text-align:center;
				background:white;
				border-radius:20px;
    			box-shadow: -8px -8px 30px rgba(0, 0, 0, 0.1), 8px 8px 30px rgba(0, 0, 0, 0.1);
			}
			h1{
				padding-top:90px;
			}
        </style>
    </head>
    <body>
        <div class="result">
            <?php
            if($num == 0){
                echo "<h1>가입된 회원이 아닙니다</h1>"."<br>";
                echo "<h2><a href = 'join.php'>회원가입하기</a></h2>";
            }
            else{
                if($passwd == $re[1]){
                    echo "<h1>로그인 되었습니다.</h1>";
					echo "<h2><a href = 'index.php'>홈으로</a></h2>";
                }
				else{
					echo "<h1>비밀번호가 틀립니다</h1>"."<br>";
					echo "<h2><a href = 'login.php'>다시 로그인하기</a></h2>";
				}
            }
            mysqli_close($conn);
            ?>
        </div>
    </body>
</html>

