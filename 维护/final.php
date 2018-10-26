<?php
@ session_start();
$inter=$_SESSION['inter'];
if($inter<>2)
{
    header("location:index.html");
}
?>
<html>

<head>
	<title>Parcel Sandbox</title>
	<meta charset="UTF-8" />
	<style type="text/css">
		
		body,div{
			 font-family:"方正兰亭超细黑简体";
			color:white;
			padding:0;
			margin:0;
		
		}
		.da {
			position:absolute;
			left: 0;
			top: 0;
			 padding: 10px; margin: 0px; 
			width: 100%;
			height: 100%;}
			background: url(https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/U4l_-timg%201.jpg) no-repeat 0px 0px;
		
		.box1{
			 background-color:transparent; 
			 height:100%;width: 100%; 
			 border: 0px solid #ffffff; 
			 padding: 10px; margin: 0px;
			 position: absolute;
		}
.zuo{
	height:681px;
	width:180px;
	
	 background:rgba(74,84,121,0.3);
	 z-index:-1;
}
.box2{ background-color:;
 height:200px;width:90px;
  border: 0px solid black;
	 padding: 45px; margin:0px; }
		.guan{
			 line-height:30px;
			 color:#ffffff;
			 position:relative;
			 top:10px;
		}
		.cala{
			font-size:25px;color:#ffffff;
			 font-family:"Microsoft Yahei";
			 text-align:center;

		}
		.bottoms{
    background-color:transparent;
    height:180px;width:100px; 
    border: 0px solid #ffffff;
    padding: 20px 40px; margin: 0px;
		}
		.bottom{
			background:transparent;
			border:transparent;
			color:white;
			font-size:16px;
			line-height:50px;
		
		}
		.shang{
			 height:236px; width:950px; background:rgba(74,84,121,0.3); z-index:1;
			 border: 0px solid #ffffff;padding: 23px; margin:0px;
			 position:relative;
			 left:200px;
			 bottom:680px;
		}
		.xiao{
			 background:rgba(255,255,255,0.3);
    height:30px;
  width:860px;
		color:black;
		font-size:18px;
		font-family:"Microsoft Yahei";
		 border:none;
		vertical-align:middle;

		}
.quer{
	 background:transparent; 
	 border:transparent; 
	 color:white; opacity:0.7;
	 font-size:16px;
	float:right;
	position:relative;
	top:5px;

}
		.qqq{
			
			height:358px;
			 border: 0px solid black; padding: 0px; margin:0px;
		position:relative;
		left:185px;bottom:675px;
		}
		.lll{
			 height:380px; 
			 width:440px;border-color:white;
			 border: 0px solid black; padding:0px 22px; margin:0px;
			 border-color:transparent;
			background:rgba(74,84,121,0.3); float:left;z-index:1;
			 margin:15px;
			 float:left;
			 
		}

		.latter{
			
			width:20px;height:800px;
    color:white;
	 writing-mode: vertical-lr;writing-mode: tb-lr;
		font:30px "Microsoft Yahei";
		position:relative;
		left:1210px;
		bottom:1350px;
	
		
		}

		</style>
</head>

<body>
	<div class="da">
	  <div class="box1">
		 <div class="zuo">
		  <div class="box2">
		   
		   <img src="https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/nwEg-fbc5e52c8dca2ff66794c911d00c194b.gif" height="90px" width="90px"/> 
			 
		   <div class="guan">管理员：<br/>状态：<br/>权限等级:
		   </div>
		  </div>
		  <div class="cala">CATALOGUE
			</div>
      <div class="bottoms">
			 <input type="button" value="更改介绍内容" onclick="1" class="bottom">
		   <input type="button" value="查看网站流量" onclick="1" class="bottom">
		   <input type="button" value="后台日志" onclick="1" class="bottom">
		   <input type="button" value="权限管理" onclick="1" class="bottom">
      </div>
		 </div>
		<div class="shang">

    <?php
   include ('conn.php');
    ?>
<form method="post" action="工大圈圈.php">
    <?php
    $sql=mysqli_query($conn,"select * from 修改内容 where id='工大圈圈'");
    $info=mysqli_fetch_array($sql);
    ?>
	<label for="myName">工大圈圈----------</label>
	<input type="text" name="text1" class="xiao" value="<?php echo $info["内容"]; ?>">
	<input type="button" value="确认更改" onclick="1" class="quer"><br/>
</form>
 <form method="post" action="精弘论坛.php">
    <?php
    $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘论坛'");
    $info=mysqli_fetch_array($sql);
    ?>
	<label for="myName">精弘论坛----------</label>
	<input type="text" name="text2" class="xiao" value="<?php echo $info["内容"]; ?>">
	<input type="button" value="确认更改" onclick="1" class="quer"><br/>
 </form>
<form method="post" action="feel电台.php">
    <?php
    $sql=mysqli_query($conn,"select * from 修改内容 where id='feel电台'");
    $info=mysqli_fetch_array($sql);
    ?>
    <label for="myName">feel电台----------</label>
	<input type="text" name="text3" class="xiao" value="<?php echo $info["内容"]; ?>">
	<input type="button" value="确认更改" onclick="1" class="quer"><br/>
</form>
<form method="post" action="精弘网盘.php">
    <?php
    $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘网盘'");
    $info=mysqli_fetch_array($sql);
    ?>
<label for="myName">精弘网盘----------</label>
	<input type="text" name="text4" class="xiao" value="<?php echo $info["内容"]; ?>">
	<input type="button" value="确认更改" onclick="1" class="quer"><br/>
</form>
<form method="post" action="精弘资讯.php">
    <?php
    $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘资讯'");
    $info=mysqli_fetch_array($sql);
    ?>
<label for="myName">精弘资讯----------</label>
	<input type="text" name="text5" class="xiao" value="<?php echo $info["内容"]; ?>">
	<input type="button" value="确认更改" onclick="1" class="quer">
</form>
		</div>
		
		<div class="qqq">
		 <div class="lll">
      <p>今日流量</p>
      <p></p>
		 </div>
		 <div class="lll">
		  <p>后台日志</p>
		  <p></p>
		 </div>
		 
		</div>
		<div class="latter">Background Management interface</div>
		
	  
		<div style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;">
			<img src="https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/eRqq-%E6%B6%B2%E6%B0%AE2018-10-23.jpg" width="100%" height="100%"/></div>
	</div>
	</div>
		

	
</body>

</html>