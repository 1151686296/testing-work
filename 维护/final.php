<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>精弘网络后台管理</title>

	<style type="text/css">
		body,
		div,
		img {
			color: white;
			padding: 0;
			margin: 0;
		}

		.leftDirector {
			width: 180px;
			height: 680px;
			background-color: rgba(255, 255, 255, 0.31);
			float: left;
			margin: 20px 20px 20px 60px;
		}

		.mainpart {
			width: 990px;
			height: 680px;
			background-color: rgba(255, 255, 255, 0.31);
			float: left;
			margin: 20px;
		}


		.rightTitle {
			width: 100px;
			height: 680px;
			float: left;
			margin: 20px;
			writing-mode: vertical-lr;
			writing-mode: tb-lr;
			font: 40px "Microsoft Yahei";
		}

		.enter {
			height: 200px;
			width: 90px;
			border: 0px solid black;
			padding: 45px;
			margin: 0px;
		}


		.guan {
			line-height: 30px;
			color: #ffffff;
			position: relative;
			top: 10px;
		}

		.catalogue {
			font-size: 25px;
			color: #ffffff;
			font-family: "Microsoft Yahei";
			text-align: center;

		}

		.bottoms {
			background-color: transparent;
			height: 180px;
			width: 100px;
			border: 0px solid #ffffff;
			padding: 20px 40px;
			margin: 0px;
		}

		.bottom {
			background: transparent;
			border: transparent;
			color: white;
			font-size: 16px;
			line-height: 50px;
		}

		.shang {
			height: 236px;
			width: 950px;
			background: rgba(74, 84, 121, 0.3);
			z-index: 1;
			border: 0px solid #ffffff;
			padding: 23px;
			margin: 0px;
		}

		.shan {
			border: 0px solid #ffffff;
			padding: 0px;
			margin: 0px;
		}

		.xiao {
			background: rgba(255, 255, 255, 0.3);
			height: 60px;
			width: 860px;
			color: black;
			font-size: 18px;
			font-family: "Microsoft Yahei";
			border: none;
			vertical-align: middle;

		}

		.quer {
			background: transparent;
			border: transparent;
			color: white;
			opacity: 0.7;
			font-size: 16px;
			float: right;
		}
	</style>



</head>

<body>
	<div style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;">
		<img src="https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/eRqq-%E6%B6%B2%E6%B0%AE2018-10-23.jpg" width="100%" height="100%"/></div>
    </div>

    <!--left-directory-->
    <div class="leftDirector">
      
      
        <div class="enter">
										
                    <img src="https://uploads.codesandbox.io/uploads/user/3cc99fe1-109b-4238-b6a6-848e402878db/nwEg-fbc5e52c8dca2ff66794c911d00c194b.gif" height="90px" width="90px"/>
                        <?php
                        session_start();
                        $username=$_SESSION["username"];
                        ?>
                        <div class="guan">管理员：<?php echo $username; ?><br/>状态：<br/>权限等级: </div>
        </div>
            
        <div class="catalogue">CATALOGUE</div>
					
        <div class="bottoms">
        <input type="button" value="更改介绍内容" onclick="1" class="bottom">
        <input type="button" value="查看网站流量" onclick="1" class="bottom">
        <input type="button" value="后台日志" onclick="1" class="bottom">
        <input type="button" value="权限管理" onclick="1" class="bottom">
        </div>

    </div>
   
   
   
   
    <!--mainpart-->
    <div class="mainpart">

            <div class="shang">

            <?php include ('conn.php');?>
        <div class="shan">
        <form method="post" action="工大圈圈.php">
            <?php $sql=mysqli_query($conn,"select * from 修改内容 where id='工大圈圈'");
            $info=mysqli_fetch_array($sql);?>
            <label for="myName">工大圈圈----------</label>
            <input type="text" name="text1" class="xiao" value="<?php echo $info["内容"]; ?>">
            <input type="submit" value="确认更改" onclick="1" class="quer"><br/>
        </form>
        </div>
        <div class="shan">
        <form method="post" action="精弘论坛.php">
            <?php
            $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘论坛'");
            $info=mysqli_fetch_array($sql);
            ?>
            <label for="myName">精弘论坛----------</label>
            <input type="text" name="text2" class="xiao" value="<?php echo $info["内容"]; ?>">
            <input type="submit" value="确认更改" onclick="1" class="quer"><br/>
        </form>
        </div>
        <div class="shan">
        <form method="post" action="feel电台.php">
            <?php
            $sql=mysqli_query($conn,"select * from 修改内容 where id='feel电台'");
            $info=mysqli_fetch_array($sql);
            ?>
            <label for="myName">feel电台----------</label>
            <input type="text" name="text3" class="xiao" value="<?php echo $info["内容"]; ?>">
            <input type="submit" value="确认更改" onclick="1" class="quer"><br/>
        </form>
        </div>
        <div class="shan">
        <form method="post" action="精弘网盘.php">
            <?php
            $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘网盘'");
            $info=mysqli_fetch_array($sql);
            ?>
            <label for="myName">精弘网盘----------</label>
            <input type="text" name="text4" class="xiao" value="<?php echo $info["内容"]; ?>">
            <input type="submit" value="确认更改" onclick="1" class="quer"><br/>
        </form>
        </div>
        <div class="shan">
        <form method="post" action="精弘资讯.php">
            <?php
            $sql=mysqli_query($conn,"select * from 修改内容 where id='精弘资讯'");
            $info=mysqli_fetch_array($sql);
            ?>
            <label for="myName">精弘资讯----------</label>
            <input type="text" name="text5" class="xiao" value="<?php echo $info["内容"]; ?>">
            <input type="submit" value="确认更改" onclick="1" class="quer">
        </form>
        </div>
        </div>
        
        <div style="margin-top:60px">网站累计浏览次数：</div>
        <?php
require_once ('conn.php');
$sql=mysqli_query($conn,"select * from 浏览次数 where 网站='精宏首页'");
$info=mysqli_fetch_array($sql);
$number=$info["次数"];

?>
<div class="xiao" style="margin-top:35px;width:100px;font-size: 40px;"   ><?php echo $number; ?></div>


</div>


    </div>
   
   
   
    <!--right-title-->
    <div class="rightTitle" >Background Management interface</div>
</body>
</html>