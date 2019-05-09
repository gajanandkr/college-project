<?php
$msg="";
include_once 'conn/dbcon.php';
    if(isset($_POST["Submit"]))
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        
        $q="select * from stu where mail='$email' and password='$pass'";
        $re= mysqli_query($cont,$q);
        
        
        
        if(mysqli_affected_rows($cont)){
            $res= mysqli_fetch_assoc($re);
                $_SESSION['uname']=$res[name];
                $_SESSION['uemail']=$res[mail];
                $_SESSION['udept']=$res['dept'];
                $_SESSION['usession']=$res['session'];
                $_SESSION['user_id']=$res['user_id'];
                header("location:student.php");
            
            
            //$res= mysqli_fetch_assoc($re);
            //$_SESSION['uname']=$res[name];
            //$_SESSION['uemail']=$res[mail];
            //header("location:index.php");
            //echo 'yes';     //through  weblesson
        }
        else{
            //echo 'no';//through weblesson
            echo "<script type=\"text/javascript\">".
        "alert('Invalid data');".
        "</script>";
            //$msg="invalid details";
        }
        mysqli_close($cont);//useless or usefull??
    }
    //session_destroy();//useless or usefull??
   // if(isset($_POST["action"]))
    //{
      //  unset($_SESSION["email"]);
    //}
?>