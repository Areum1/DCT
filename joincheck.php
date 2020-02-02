<!doctype html>
<html>
	<head>
		<style>
			body{
				background-color: rgba(241, 241, 241, 1);
			}
			.result{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				/* 가운데로 보내줌 */
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
		<div class = "result">
			<?php
				$id = $_POST['user_id'];
				$pw = $_POST['user_pw'];


				$conn = mysqli_connect('localhost','test','1111','testdb');
				$query = "insert into login (email, password) values ('{$id}','{$pw}');";
				$result = mysqli_query($conn, $query);
			
				echo "<h1>등록완료<h1>";
				echo "<h2><a href = 'index.php'>홈으로</a></h2>";	
				mysqli_close($conn);
			?>
		</div>
	</body>
</html>