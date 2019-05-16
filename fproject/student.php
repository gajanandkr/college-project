<?php
session_start();
include_once 'conn/dbcon.php';

$dept = $_SESSION['udept'];
$session = $_SESSION['usession'];
if ($dept == '' && $session == '') {
    
    echo "<script type=\"text/javascript\">".
        "alert('Please Login');".
        "</script>";
    header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stay At College</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
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

                    <li class="active"><a href="#">View Assignment</a></li<>
                    <li><a href="student_msg.php">Messages</a></li>
                </ul>
            </div>
            <div class="col-md-10 content ">
                <div class="table-responsive" id="sailorTableArea">
                    <table id="sailorTable" class="table table-striped table-bordered" width="auto;">
                        <thead>
                            <tr>
                                <th>Branch</th>
                                <th>Session</th>
                                <th>Last Date</th>
                                <th>Subject Name</th>
                                <th>Code</th>
                                <th>Title</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                            $qry = "select * from assignment where branch='$dept' && session='$session'";
                            $res = mysqli_query($cont, $qry);
                            if (mysqli_affected_rows($cont)) {
                                while ($re = mysqli_fetch_assoc($res)) {
                                    echo "
                                            <tr>
                                                <td>" . $re['branch'] . "</td>
                                                <td>" . $re['session'] . "</td>
                                                <td>" . $re['last_date'] . "</td>
                                                <td>" . $re['subject'] . "</td>
                                                <td>" . $re['code'] . "</td>
                                                <td>" . $re['title'] . "</td>
                                                <td><a class='btn btn-success btn-sm' href='download.php?fileName=" . $re['assignment'] ."'>Download Assignment</a></td>
                                            </tr>";
                                }
                            }
                        } 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="pull-left footer">
                <p class="col-md-12">
                <hr class="divider">
                <div class="copy-w3-agileits">
                    <h2 class="footer-logo"><a href="index.php">Stay At College <span>Online Education</span></a></h2>
			<p>© 2018 Stay at College . All Rights Reserved |  </p>
			<div class="clearfix"></div>
		</div>
                </p>
            </footer>
        </div>	<script type="text/javascript">
        </script>
    </body>
</html>
