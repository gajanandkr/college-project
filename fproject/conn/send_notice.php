<?php
$msg="";
$msg1="";
include_once 'conn/dbcon.php';
$teacher_name = $_SESSION['tea_id'];

if(isset($_POST['btn_send']))
{
    
    $title=$_POST['title'];
    //image upload
    if($_FILES['myfile']['error']==0)
    {
        if($_FILES['myfile']['type']=="application/pdf")
                {
                            
                            $source=$_FILES['myfile']['tmp_name'];
                            $source1=$_FILES['myfile']['name'];
                               $des=$_SERVER['DOCUMENT_ROOT']."/fproject/notice/".$source1;
                               if(move_uploaded_file($source, $des))
                                {
                                   $path="notice/".$source1;
                                    $msg1="notice uploaded.....";
                                    
                                    $qry= "insert into notice values(Null,'$teacher_name','$title','$path')";
                                    $res= mysqli_query($cont, $qry);
                                    if (mysqli_affected_rows($cont)>0) 
                                        {
                                            $msg="successfully send";
                                        }
                                    else {
                                        $msg="Error!".mysqli_error($cont);
                                        }
                                        mysqli_close($cont);
                                }
                                
                                else{
                                $msg1="error in notice upload.....";
                                }
                        }
        else
        {
            $msg1= "Invalid File....";
        }
                        
    }
     else 
                    {
                       $msg1= "file is corrupted....";
                     }
    
    
}
?>