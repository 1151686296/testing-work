<html>

<head>
	<title>Parcel Sandbox</title>
	<meta charset="UTF-8" />
	<style type="text/css">
	
	 
	.da{
	padding:0;
	}
	 div,body{padding:0}
	.window{
	 -moz-border-radius:0.5em; -webkit-border-radius:0.5em; border-radius:0.5em;
		width:280px;
		height:320px;
		 background-color:black;
		 opacity:0.6;
		 
		 Z-index:1;
position:relative;
top:150px;
left:500px;
	}
	.denglu{
		
		font:30px "方正兰亭超细黑简体";font-weight:bold;
		color:white;
		margin: 0 auto;
		 text-align:center;
		 position:relative;
		 top:20px;
	}
	.box1{background-color:;
		 width: 200px; 
		 border: 5px solid #000000;
		 padding: 25px; 
		 margin: 10px;
	}
	.lll{
		 1-moz-border-radius:0.5em; 1-webkit-border-radius:0.5em; 1border-radius:0.5em;
		 background-color:#E6E6FA;opacity:0.1
		 padding:7px 4px;
		  width:200px;  height:30px;
			margin:5px 0;
			
			border-width:5px;
			
			 border-style: solid;
			  border-color:#E6E6FA;
		
		 font-size: 16px; 
		
	}

	
	label{
		font:16px "方正兰亭超细黑简体";
color:white;

	}
.qqq{
	color:white;border-color:#4a4b4f;
	 1-moz-border-radius:0.5em; 1-webkit-border-radius:0.5em; 1border-radius:0.5em;
	height:40px;width:200px;
	background-color:#4a4b4f;
font:20px "方正兰亭超细黑简体";
position:relative;
top:20px;

}
	</style>

</head>

<body>
	
	<div class="da">
	<div class="window">
		<br/>
		<div class="denglu">
			管理员登录
		</div>
		<div class="box1">
<form method="post" action="chkuser.php">
	<label for="myName">账号：</label>
	<input type="text" name="username"   class="lll">
	
  <br/>
	
<label for="pass">密码：</label>
  <input type="password" name="password"  class="lll">
	
<input type="submit" value="登录" name="submitBtn" class="qqq" />

	</form>
		</div>
		</div>
  </div>
	<div style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;">
		<img src="https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/eRqq-%E6%B6%B2%E6%B0%AE2018-10-23.jpg" width="100%" height="100%"/></div>
	</div>

	
</body>

</html>