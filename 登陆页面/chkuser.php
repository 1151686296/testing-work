<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<?php
include("conn.php");
$username=$_POST['username'];
$userpwd=$_POST['password'];
class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn.php");
       $sql=mysqli_query($conn,"select * from user where username='".$this->name."'" );
     $info=mysqli_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('账户输入错误！');history.back();</script>";
          exit;
       }
      else{   if($info['password']==$this->pwd)
	       {
			   session_start();
	           $_SESSION['username']=$info['username'];
               header("location:admin.php");
               exit;
            }
             else {
			   echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }
			}

      }    
   }


    $obj=new chkinput(trim($username),trim($userpwd));
    $obj->checkinput();
