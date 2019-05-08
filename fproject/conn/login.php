<?php
$msg="";
    if(isset($_POST["Submit"]))
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $con= mysqli_connect("localhost","root","","college");
        $q="select * from stu where mail='$email' and password='$pass'";
        $re= mysqli_query($con,$q);
        
        //admin login
        $qy="select * from admin where name='$email' and password='$pass'";
        $result= mysqli_query($con, $qy);
        
        /*if($email=='admin@gmail.com' && $passs=='admin')
        {
            header("location:teajoinc.php");
        }*/
        
        if(mysqli_affected_rows($con)){
            if($res= mysqli_fetch_assoc($re)){
                $_SESSION['uname']=$res[name];
                $_SESSION['uemail']=$res[mail];
                header("location:index.php");
            }
            elseif($res= mysqli_fetch_assoc($result)) 
            {
            $_SESSION['uname']=$res[name];
                $_SESSION['uemail']=$res[mail];
                header("location:teajoin.php");
                
            }
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
        mysqli_close($con);//useless or usefull??
    }
    //session_destroy();//useless or usefull??
   // if(isset($_POST["action"]))
    //{
      //  unset($_SESSION["email"]);
    //}
?>