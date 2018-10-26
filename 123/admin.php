
    <?php
   @ session_start();
   echo $_SESSION['inter'];
   $inter=$_SESSION['inter'];
   if($inter<>2)
   {
       header("location:index.html");
   }
else
{
    echo "welcome";
}
