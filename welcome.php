<html>
<head>
    <meta charset="utf-8" >
    <title>123</title>
</head>
<body>
< method="get">
    名字:<input type="text" name="fname" />
    年龄:<input type="text" name="age" />
    <input type="submit" value="提交" />
    <?php echo $_GET["fname"]; ?>!<br>
    你的年龄是<?php echo $_GET["age"]; ?>
    岁

</body>
</html>