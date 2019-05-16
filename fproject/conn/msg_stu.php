<?php

session_start();
$cont= mysqli_connect("localhost","root","","college");
$user_id = $_SESSION['user_id'];
//$teacher_id=$_SESSION['tname'];

if (isset($_POST['tea_id'])) {
    $tea_id = $_POST['tea_id'];
    $_SESSION['tea_id']=$tea_id;

    $query = "select * from message where (to_id='$tea_id' AND from_id='$user_id') OR (to_id='$user_id' AND from_id='$tea_id') order by timestamp ASC";
    $resu = mysqli_query($cont, $query);

    if (mysqli_affected_rows($cont) > 0) {
        foreach($resu as $r)
	{ 
            $output = '';
            if($r['from_id'] == $tea_id){
              $output .=  '<div class="incoming_msg"><div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>'.$r['msg'].'</p>
                                                <span class="time_date"> '. $r['timestamp'].'</span>
                                            </div>
                                        </div>
                                    </div>';
            }
            
            else{
                $output .='<div class="outgoing_msg">
                                        <div class="sent_msg">
                                            <p>'.$r['msg'].'</p>
                                            <span class="time_date">'. $r['timestamp'].'</span> 
                                        </div>
                                    </div>';
            }
            
            echo $output;
        }
    }
}
?>