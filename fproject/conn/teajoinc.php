<?php

$msg = "";
$msg1 = "";
$msg2 = "";
include_once 'conn/dbcon.php';
if (isset($_POST['teajoin_submit'])) {
    $name = $_POST['txt_name'];
    $date = $_POST['dob'];
    $gende = $_POST['gender'];
    $mail = $_POST['email'];
    $pass = $_POST['pass'];
    $mobil = $_POST['mobile'];
    $idn = $_POST['idno'];
    $branc = $_POST['branch'];

    $teacher_id = "TEA-" . mt_rand(100, 999);
    //image upload
    if ($_FILES['myfile']['error'] == 0) {
        if ($_FILES['myfile']['type'] == "image/png" || $_FILES['myfile']['type'] == "image/jpeg" || $_FILES['myfile']['type'] == "image/jpg") {//confrm the file type other files are not uploaded
            $rand = mt_rand();
            $source = $_FILES['myfile']['tmp_name'];
            $source1 = $rand . $_FILES['myfile']['name'];
            $des = $_SERVER['DOCUMENT_ROOT'] . "/fproject/teapic/" . $source1;
            if (move_uploaded_file($source, $des)) {
                $path = "teapic/" . $source1;
                $msg1 = "image uploaded.....";
                $qry = "insert into tea values(Null,'$teacher_id','$name','$date','$gende','$mail','$pass','$mobil','$idn','$branc','$path')";
                $res = mysqli_query($cont, $qry);
                if (mysqli_affected_rows($cont) > 0) {

                    echo "<script type=\"text/javascript\">" .
                    "alert('successfully Register');" .
                    "</script>";
                    //header("location:index.php");
                } else {
                    $msg = "Error!" . mysqli_error($cont);
                }
                mysqli_close($cont);
            } else {
                $msg1 = "error in image upload.....";
            }
        } else {
            $msg2 = "Invalid File....";
        }
    } else {
        $msg2 = "file is corrupted....";
    }
}
?>