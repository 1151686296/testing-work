
    <?php
    session_start();
    var_dump($_SESSION['inter']);
    $inter=$_SESSION['inter'];
    if ($inter<>2)
    {
        header("location:index.html");

    }
    echo "xbhzs";
