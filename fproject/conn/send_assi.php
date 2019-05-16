<?php
$msg="";
$msg1="";
include_once 'conn/dbcon.php';

if(isset($_POST['btn_send']))
{
    $branc=$_POST['branch'];
    $session=$_POST['session'];
    $last=$_POST['date_sub'];
    $subject=$_POST['sub_name'];
    $code=$_POST['sub_code'];
    $title=$_POST['title'];
    //image upload
    if($_FILES['myfile']['error']==0)
    {
        if($_FILES['myfile']['type']=="application/pdf")
                {
                            
                            $source=$_FILES['myfile']['tmp_name'];
                            $source1=$branc.$session.$_FILES['myfile']['name'];
                               $des=$_SERVER['DOCUMENT_ROOT']."/fproject/file_upload/".$source1;
                               if(move_uploaded_file($source, $des))
                                {
                                   $path="file_upload/".$source1;
                                    $msg1="Assignment uploaded.....";
                                    
                                    $qry= "insert into assignment values('$branc','$session','$last','$subject','$code','$title','$path')";
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
                                $msg1="error in assignment upload.....";
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