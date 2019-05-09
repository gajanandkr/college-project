<?php
session_start();
include 'conn/dbcon.php';
$tea_id = $_SESSION['tea_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stay At College</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style type="text/css">
            h1.page-header {
                margin-top: -5px;
            }

            .sidebar {
                padding-left: 0;
            }

            .main-container { 
                background: #FFF;
                padding-top: 15px;
                margin-top: -20px;
            }

            .footer {
                width: 100%;
            }      </style>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    </head>
    <body onload="getChat()">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        Hello!
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo $_SESSION['tname']; ?>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header"></li>

                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid main-container">
            <div class="col-md-2 sidebar">
                <ul class="nav nav-pills nav-stacked">

                    <li class="active"><a href="teacher.php">Assignment Upload</a></li<>
                    <li><a href="teacher_msg.php">Messages</a></li>
                </ul>
            </div>
            <div class="col-md-10 content ">
                <div class="">
                    <h3 class=" text-center">Messaging</h3>
                    <div class="messaging">
                        <div class="inbox_msg">
                            <div class="inbox_people">
                                <div class="headind_srch">
                                    <div class="recent_heading">
                                        <h4>Recent</h4>
                                    </div>

                                </div>
                                <div class="inbox_chat">
                                    <?php
                                    $query = "select from_id from message where to_id='$tea_id' group BY from_id";
                                    $resu = mysqli_query($cont, $query);
                                    if (mysqli_affected_rows($cont)) {
                                        while ($row = mysqli_fetch_assoc($resu)) {
                                            $user_id = $row['from_id'];
                                            $qry = "select name from stu where user_id='$user_id'";
                                            $res = mysqli_query($cont, $qry);

                                            if ($rows = mysqli_fetch_assoc($res)) {

                                                echo '<div class="chat_list active_chat">
                                                        <div class="chat_people">
                                                            <div class="tId" id="' . $user_id . '" style="cursor:pointer"><div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="image"> </div>
                                                            <div class="chat_ib">
                                                                <h5>' . $rows['name'] . '</h5>
                                                            </div></div>
                                                        </div>
                                                    </div>';
                                            }
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                            <div class="mesgs">
                                <div class="msg_history" id="show">
                                    
                                </div>
                                <div class="type_msg">
                                    <form method="POST">
                                        <div class="input_msg_write">
                                            <input type="text" name="message" class="write_msg" placeholder="Type a message" />
                                            <button class="msg_send_btn" type="submit" name="sendData">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="pull-left footer">
                <p class="col-md-12">
                <hr class="divider">
                Copyright &COPY; 2015 <a href="#">Gravitano</a>
                </p>
            </footer>
        </div>	
        <script type="text/javascript">
            function getChat(){
                        var user_id= '<?php echo $user_id ?>';
                        $.ajax({
                            url:"conn/msg_tea.php",
                            method:"POST",
                            data:{user_id:user_id},
                            success:function(data){
                               $('#show').html(data); 
                            }
                        });
               }
        </script>
    </body>
</html>
