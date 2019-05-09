<?php
session_start();
include_once 'conn/dbcon.php';

$dept = $_SESSION['udept'];
$session = $_SESSION['usession'];
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
    <body>
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
                                <?php echo $_SESSION['uname']; ?>
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

                    <li class="active"><a href="student.php">View Assignment</a></li<>
                    <li><a href="#">Messages</a></li>
                </ul>
            </div>
            <div class="col-md-10 content ">
                <div class="">
                    <h3 class=" text-center">Messaging</h3>
                    <div class="messaging">
                        <div class="inbox_msg">
                            <div class="inbox_people">
                                <div class="headind_srch row">
                                    <div class="recent_heading">
                                            <div class="col-md-6">
                                                <h4 style="padding-top:8px">Teacher</h4>
                                            </div>
                                            <div class="col-md-6"><select class="btn " required="" name="branch" >
                                                    <option value="" hidden="">Select Branch</option>
                                                    <option value="IT">IT</option>
                                                    <option value="CSE">CSE </option>
                                                    <option value="ME">ME</option>
                                                    <option value="ECE">ECE </option>
                                                    <option value="AEIE">AEIE </option>
                                                    <option value="EE">EE </option>
                                                    <option value="CE">CE</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="inbox_chat">

                                    <?php
                                    $qry = "select * from tea ";
                                    $res = mysqli_query($cont, $qry);
                                    if (mysqli_affected_rows($cont)) {
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            echo '<div class="chat_list active_chat">
                                        <div class="chat_people">
                                            <a href="#"><div class="chat_img"><img src="' . $row['teapic'] . '" alt="image"> </div>
                                            <div class="chat_ib">
                                                <h5>' . $row['name'] . '</h5>
                                            </div></a>
                                        </div>
                                    </div>';
                                        }
                                    }
                                    ?>
                                    <!--<div class="chat_list active_chat">
                                        <div class="chat_people">
                                            <div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput</h5>
                                            </div>
                                        </div>
                                    </div>-->


                                </div>
                            </div>
                            <div class="mesgs">
                                <div class="msg_history">
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>Test which is a new approach to have all
                                                    solutions</p>
                                                <span class="time_date"> 11:01 AM    |    June 9</span></div>
                                        </div>
                                    </div>
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                            <p>Test which is a new approach to have all
                                                solutions</p>
                                            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                                    </div>
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>Test, which is a new approach to have</p>
                                                <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                                        </div>
                                    </div>
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                            <p>Apollo University, Delhi, India Test</p>
                                            <span class="time_date"> 11:01 AM    |    Today</span> </div>
                                    </div>
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>We work directly with our designers and suppliers,
                                                    and sell direct to you, which means quality, exclusive
                                                    products, at a price anyone can afford.</p>
                                                <span class="time_date"> 11:01 AM    |    Today</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="type_msg">
                                    <div class="input_msg_write">
                                        <input type="text" class="write_msg" placeholder="Type a message" />
                                        <button class="msg_send_btn" type="button">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                    </div>
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
        </div>	<script type="text/javascript">
        </script>
    </body>
</html>