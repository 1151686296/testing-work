<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<body>
<form method="post">
    <input type="text" name="age">
    <input type="submit" value="提交" name="ok">
</form>
<?php
if(!isset($_POST["ok"]))
{
    echo $_POST["age"];
}
?>
</body>
</html>