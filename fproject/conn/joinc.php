<?php
session_start();
$msg="";
    if(isset($_POST["submit"])){
            
        $name=$_POST['txt_name'];
        $date=$_POST['dob'];
        $gende=$_POST['gender'];
        $mail=$_POST['email'];
        $pass=$_POST['pass'];
        $mobil=$_POST['mobile'];
        $rol=$_POST['roll'];
        $branc=$_POST['branch'];
        $sessio=$_POST['session'];
        
        
        $conn= mysqli_connect("localhost","root","","college");
        $qry="insert into stu values('$name','$date','$gende','$mail','$pass','$mobil','$rol','$branc','$sessio')";
        mysqli_query($conn,$qry);
        if (mysqli_affected_rows($conn)>0) {
            //header("location:index.php");
            //$msg= "Registered";
            echo "<script type=\"text/javascript\">".
        "alert('successfully Register');".
        "</script>";
            header("location:index.php");
        }
        else {
            $msg="Error!".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
<!-- login -->
<?php
$msg="";
    if(isset($_POST["email"]))
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $con= mysqli_connect("localhost","root","","college");
        $q="select * from stu where mail='$email' and password='$pass'";
        $re= mysqli_query($con,$q);
        
        if(mysqli_affected_rows($con)){
            $res= mysqli_fetch_assoc($re);
            $_SESSION['uname']=$res[name];
            $_SESSION['uemail']=$res[mail];
            header("location:index.php");
            echo 'yes';     //through  weblesson
        }
        else{
            echo 'no';//through weblesson
            $msg="invalid details";
        }
       // mysqli_close($con);//useless or usefull??
    }
    //session_destroy();//useless or usefull??
    if(isset($_POST["action"]))
    {
        unset($_SESSION["email"]);
    }
?>