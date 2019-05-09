<?php
session_start();
include_once 'conn/dbcon.php';
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
        
        $user_id= "STU-".mt_rand(100,999);
        
        $qry="insert into stu values('','$user_id',$name','$date','$gende','$mail','$pass','$mobil','$rol','$branc','$sessio')";
        mysqli_query($cont,$qry);
        if (mysqli_affected_rows($cont)>0) {
            //header("location:index.php");
            //$msg= "Registered";
            echo "<script type=\"text/javascript\">".
        "alert('successfully Register');".
        "</script>";
            //header("location:index.php");
        }
        else {
            $msg="Error!".mysqli_error($cont);
        }
        mysqli_close($cont);
    }
?>

