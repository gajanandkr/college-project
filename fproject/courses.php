<?php

include_once 'conn/dbcon.php';
include_once 'conn/login.php';
$msg="";
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Stay At Colege</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <style>
            .blinking{
                font-family: cursive;
                color: red;
            }
        </style>
        <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
    </head>

    <body>
        <!--Header-->

        <?php
        include_once 'head/othnav.php';
        include_once 'head/signmodal.php';
        ?>
        <!--//inner_banner-->
        <!--/short-->
        <div class="services-breadcrumb-w3ls-agile">
            <div class="inner_breadcrumb">

                <ul class="short">
                    <li><a href="index.php">Home</a><span>|</span></li>
                    <li>Notice</li>
                </ul>
            </div>
        </div>

        <div class="container" style="height: 350px">
            <div class="row">
                <?php
                $qry=" select * from notice";
                $res= mysqli_query($cont, $qry);
                if(mysqli_affected_rows($cont))
                {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<div style='background-color: lightgray;width:100%'><hr><h4><a class='about-sub-gd ' href='down_notice.php?fileName=" . $row['notice'] ."'>".$row['title']." <span class='blinking'>&nbsp; new</span></a></h4><hr></div>"; 
                    }
                }
                else{
                    $msg="";
                }
                //<h4>Create your snippet's HTML, CSS and Javascript in the editor tabs</h4>
                    ?>
            </div>
        </div>


        <!--footer -->
        <?php include_once 'head/footer.php'; ?>
        <!--/footer -->


        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
        <!--search-bar-->
        <script src="js/main.js"></script>
        <!--gallery -->
        <script src="js/jquery.chocolat.js"></script>
        <!--light-box-files -->
        <script type="text/javascript">
            $(function () {
                $('.gallery-grid1 a').Chocolat();
            });
        </script>
        <!-- //gallery -->
        <!--//search-bar-->
        <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


    </body>

</html>