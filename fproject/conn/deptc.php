<?php
$msg="";

if(isset($_POST["depart"]))
{
    
    $depart=$_POST["depart"];
    $cont= mysqli_connect("localhost","root","","college");
    $query="select name,teapic from tea where depart='$depart'";
    $re=$cont->query($query);
//$r= mysqli_query($cont, $query);
    if($re->num_rows>0)
//if(mysqli_affected_rows($cont))
    {
        while($row=$re->fetch_assoc())
        //while($row= mysqli_fetch_assoc($r))
        {
            echo '
                <div class="col-md-3 col-sm-3 col-xs-3 slidering" style="padding-bottom: 15px">
                        <div class="thumbnail" style="width=200; height=200;">
                        
                            <img src="'.$row["teapic"].'" alt="Image" style="max-width:100%;" >
                        
                        </div>
                        
			<h5>'.$row["name"].'</h5>
                            <button id="chat" name="chat" class="btn btn-primary btn-md btn-block">Chat</button>
                    </div>
                ';
        }
    }
    else{
        echo "NO Data";
    } 
}

?>