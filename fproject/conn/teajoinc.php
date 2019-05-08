<?php
session_start();
$msg="";
$msg1="";
$msg2="";

if(isset($_POST['teajoin_submit']))
{
    $name=$_POST['txt_name'];
    $date=$_POST['dob'];
    $gende=$_POST['gender'];
    $mail=$_POST['email'];
    $pass=$_POST['pass'];
    $mobil=$_POST['mobile'];
    $idn=$_POST['idno'];
    $branc=$_POST['branch'];
    
    //image upload
    if($_FILES['myfile']['error']==0)
    {
        if($_FILES['myfile']['type']=="image/png"||$_FILES['myfile']['type']=="image/jpeg"||$_FILES['myfile']['type']=="image/jpg")//confrm the file type other files are not uploaded
                        {
                            $rand= mt_rand();
                            $source=$_FILES['myfile']['tmp_name'];
                            $source1=$rand.$_FILES['myfile']['name'];
                               $des=$_SERVER['DOCUMENT_ROOT']."/fproject/teapic/".$source1;
                               if(move_uploaded_file($source, $des))
                                {
                                   $path="teapic/".$source1;
                                    $msg1="image uploaded.....";
                                }
                                
                                else{
                                $msg1="error in image upload.....";
                                }
                        }
        else
        {
            $msg2= "Invalid File....";
        }
                        
    }
     else 
                    {
                       $msg2= "file is corrupted....";
                     }
    
    $conn= mysqli_connect("localhost","root","","college");
    $qry= "insert into tea values('$name','$date','$gende','$mail','$pass','$mobil','$idn','$branc','$path')";
    $res= mysqli_query($conn, $qry);
    if (mysqli_affected_rows($conn)>0) {
            
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