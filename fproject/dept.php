<?php
//session_start();
include_once 'conn/dbcon.php';
include_once 'conn/login.php';
include_once 'conn/deptc.php';

if (isset($_POST['chat'])) {

    if (isset($_SESSION)) {

        echo "<script type=\"text/javascript\">" .
        "alert('Please Login');" .
        "</script>";
        
       // header("location:student.php");
    } 
    else {
      header("location:student.php");
    }
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Stay At College</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

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
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </head>
    <body>
<?php
include_once 'head/othnav.php';
include_once 'head/signmodal.php';
?>
        <div class="services-breadcrumb-w3ls-agile">
            <div class="inner_breadcrumb">

                <ul class="short">
                    <li><a href="index.php">Home</a><span>|</span></li>
                    <li>Department</li>
                </ul>
            </div>
        </div>
        <div class="container-fluid container" style="height: auto">
            <br>
            <br>
            <h1><center>Hey! Your Department</center></h1>
            <div align="center"><br><br>
                <div>
                    <button type="button" class="btn" name="CSE" id="CSE" value="CSE">Computer Science & Engineering</button>

                    <button type="button" class="btn" name="ECE" id="ECE" value="ECE">Electronics & Communication</button>
                    <button type="button" class="btn" name="EE" id="EE" value="EE">Electrical Engineering</button>
                    <button type="button" class="btn" name="IT" id="IT" value="IT">Information Technology</button>
                </div>

                <br>
                <br>
                <div class="btn" id="AEIE">AEIE</div>
                <div class="btn">Mechanical Engineering</div>
                <div class="btn">Civil Engineering</div>
                <br>
                <br>
                <div class="btn">BCA</div>
                <div class="btn">MCA</div>

            </div>
            <div class="clearfix"></div>
        </div>
        <br>

        <div class="top_spl_courses">
            <div class="container">

                <div class="inner_sec_w3_agileinfo">
                    <form method="POST">
                        <div class="item active">
                            <div id="show" class="row" >
                                <!--<div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                            <div class="thumbnail"><a href=""><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></a></div>
                                                <h5>Business &amp; Management</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                                <div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
                                                <h5>Data Structures</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                                <div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
                                                <h5>Digital Marketing</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                                <div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
                                                <h5>Financial Analyst Course</h5>
                                        </div>
                                </div>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





<?php include_once 'head/footer.php'; ?>




        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
        <!--search-bar-->
        <script src="js/main.js"></script>
        <!--//search-bar-->
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
        <script>
            $(document).ready(function () {
                $('#IT').click(function () {
                    //var dept=$('#IT').val();
                    var depart = $(this).attr("id");
                    $.ajax({
                        url: "conn/deptc.php",
                        method: "POST",
                        data: {depart: depart},
                        success: function (data) {
                            $('#show').html(data);
                        }
                    });
                });
            });


        </script>
    </body>
</html>


<!--web lesson  -->
<!--<script>
$(document).on('click', '.view_data', function(){
//$('#dataModal').modal();
var depart = $(this).attr("id");
$.ajax({
url:"select.php",
method:"POST",
data:{employee_id:employee_id},
success:function(data){
$('#employee_detail').html(data);
}
});
});
}); 
</script>-->