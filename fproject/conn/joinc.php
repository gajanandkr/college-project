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
            //header("location:index.php");
        }
        else {
            $msg="Error!".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
