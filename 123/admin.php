
    <?php
   @ session_start();
   $inter=$_SESSION['inter'];
   if($inter<>2)
   {
       header("location:index.html");
   }
else
{
    echo "welcome";
}
