<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
    <title>DCT</title>

</head>
<body>
    <!-- 전체를 감싸는 태그 -->
    <div id ="wrapper">

        <a href="login.php" id="login">로그인</a>
        <a href="join.php" id="signin">회원가입</a>

        <div id="Lv">Lv: </div>
        <!-- navigation -->
        <nav id="navigation">

        </nav>
		<div id="label">
			<progress value="10" max="100" id="progress"></progress>
		</div>
		
        <!-- content -->
        <div class="content">
			<!-- 단기 -->
            <div id="content-short" class="content">
				<table>
					<li onclick="onMouseOver(1)">1.
						<div class="img item1">
						<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px; ">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(2)">2.
						<div class="img item2">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(3)">3.
						<div class="img item3">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(4)">4.
						<div class="img item4">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(5)">5.
						<div class="img item5">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li onclick="onMouseOver(1)">
				</table>		
			</div>
			
			<!-- 장기 -->
            <div id="content-long" class="content">
						<table>
					<li onclick="onMouseOver(6)">1.
						<div class="img item6">
						<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px; ">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(7)">2.
						<div class="img item7">
						<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(8)">3.
						<div class="img item8">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(9)">4.
						<div class="img item9">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
					
					<li onclick="onMouseOver(10)">5.
						<div class="img item10">
							<img src="img/check.png" class="img-1" width=3%; style="margin-top:2px; float:right; margin-left:4px; margin-right:4px;">
						<img src="img/plus.png" class="img-1" width=4%; style="margin-top:2px; float:right; margin-left:4px;">
						<img src="img/trash.png" class="img-1" width=3%; style=" margin-top:2px; float:right; margin-left:4px;">
						</div>	
					</li>
				</table>	
			</div>
        </div>

        <!-- footer -->
        <footer id="footer">

        </footer>
    </div>
</body>
</html>