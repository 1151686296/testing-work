<html>
<head>
    <meta charset="UTF-8">
    <title>123</title>
</head>
<body>
<form method="post">
    <input type="text" name="age">
    <input type="submit" value="提交" name="name">
</form>
<?php
if(!isset($_POST["submit"]))
{
    echo $_POST["age"];
}
?>
<form method="post">
    <input type="text" name="345">
    <input type="submit" value="123">

</form>
<?php
if (!isset($_POST["submit"]))
{
    echo $_POST["345"];
}
?>
</body>
</html>
