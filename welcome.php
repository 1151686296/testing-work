<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<body>
<form method="post">
    <input type="text" name="agr">
    <input type="submit" value="提交">
</form>
<?php
if(!empty($_POST["submit"]))
{
    echo $_POST["age"];
}
?>
</body>
</html>