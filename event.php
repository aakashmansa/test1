<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ICS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />


    <link href="css/calender.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        .time-slot li:hover{
            background-color: #63aae7;
        }

        .time-slot li.selected{
            background-color: #337ab7;
        }

        .time-slot .list-group-item .disabled{
            background-color: #cccccc;
        }
    </style>

    <!-- HTML5 //#337ab7; shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="logo"> <img id="logo" data-count="1" src="images/Logo_1.png" /> </div>
      </div>
    </div>
  </div>
  <div class="nav_bar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <nav class="navgiaton navbar navbar-default">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                  <li><a href="home.php">HOME</a></li>
                  <li><a href="#product">ABOUT</a>
                    <ul>
                      <li><a href="#">What We Do</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Get Started</a></li>
                    </ul>
                  </li>
                  <li><a href="#news">ANALYSTS</a>
                  <ul>
                      <li><a href="roster.html">Full Roster</a></li>
                      <li><a href="#">By Sport</a></li>
                      <li><a href="#">By Team</a></li>
                      <li><a href="#">For Video Critique</a></li>
                    </ul>
                  </li>
                  <li><a href="event.html">VIDEOCAST SCHEDULE</a>
                  <ul>
                      <li><a href="event.html">Search Capabilities</a></li>
                      <li><a href="#">By Analysts</a></li>
                      <li><a href="#">By Team</a></li>
                    </ul>
                  </li>
                  <li><a href="#contact">MEMORABILIA/APPAREL</a></li>
                  <li><a data-toggle="modal" data-target="#myModal" href="#">SIGN UP / SIGN IN</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="search">
    <div class="container">
      <div class="row">
        <div class="page_title">
          <h1>Advanced search</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group col-md-12">
            <input type="text" class="form-control" placeholder="Search By Roster" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="input-group col-md-12">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                <span></span> <b class="caret"></b>

                <input type="text"  style="display:none" name="report_range" value="" />
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="input-group col-md-12">
            <input type="button" class=" btn btn-default " value="Search" />
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-md-4">
         <div class="user_info">
           <div class="event_image">
             <img src="images/event_img.jpg" />
           </div>
           <div class="event_info">
             <h3>San Francisco</h3>
             <h4>Date : 11 Nov 2015 8:00 PM</h4>
             <h4>Roster : John Samit</h4>
             <a data-toggle="modal" data-target="#bookShow" href="#" class="theme_button btn btn-default">Join</a> 
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="user_info">
           <div class="event_image">
             <img src="images/event_img.jpg" />
           </div>
           <div class="event_info">
             <h3>San Francisco</h3>
             <h4>Date : 11 Nov 2015 9:00 PM</h4>
             <h4>Roster : Matt Adams</h4>
             <a data-toggle="modal" data-target="#bookShow" href="#" class="theme_button btn btn-default">Join</a> 
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="user_info">
           <div class="event_image">
             <img src="images/event_img.jpg" />
           </div>
           <div class="event_info">
             <h3>San Francisco</h3>
             <h4>Date : 11 Nov 2015 10:00 PM</h4>
             <h4>Roster : John Samit</h4>
             <a data-toggle="modal" data-target="#bookShow" href="#" class="theme_button btn btn-default">Join</a> 
           </div>
         </div>
       </div>
       
       
       
     </div>
   </div>
 </section>
 <footer>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="copyright">
           
          © Copyright 2013, All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Sign Up</h4>

      </div>

      <div class="modal-body">
        <div id="loginbox">
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <form method="post" action="profile.html" id="loginform" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
            </div>
            <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="input-group">
              <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1">
                  Remember me </label>   <div style="margin:0 0 0 50px;" class="pull-right"><a href="#">Forgot password?</a></div><br />

                </div>
              </div>
              <div style="margin-top:10px" class="form-group"> 
                <!-- Button -->
                
                <div class="col-sm-12 controls">
                  <button id="btn-login" type="submit" class="btn btn-success">Login </button>
                  <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> 
              <a href="analyst-profile.html" id="btn-login" class="btn btn-success">Login as Analyst </a>  <a href="admin.html" id="btn-login" class="btn btn-success">Login as admin </a> </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12 control">
                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" > Don't have an account! <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Sign Up Here </a> </div>
                  </div>
                </div>
              </form>
            </div>
            
            <div id="signupbox" style="display:none;">
             <div class="panel-body" >
              <div style="float:right;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
              <form method="post" action="profile.html" id="signupform" class="form-horizontal" role="form">
                <div id="signupalert" style="display:none" class="alert alert-danger">
                  <p>Error:</p>
                  <span></span> </div>
                  <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" name="passwd" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control" name="passwd" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group"> 
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                      <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                    </div>
                  </div>
                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    <div class="form-group">
                      <div class="col-md-offset-2 col-md-9">
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i> Sign Up with Facebook</button>
                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i> Sign Up with Google</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
  </div>


  <div id="bookShow" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Book show slot</h4>
                </div>

                <div class="modal-body">
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first">Title</label>
                                        <input value="Test title" disabled name="title" type="text" class="form-control" id="first" placeholder="Title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first">Start Time</label>
                                        <div  class='input-group date' id='datetimepicker1'>
                                            <input disabled name="start_time" type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first">Select slot</label>
                                    </div>
                                    <ul class="time-slot list-group">
                                        <li class="list-group-item text-center">
                                            1:10 PM - 1: 15 PM
                                        </li>
                                        <li class="list-group-item disabled text-center">
                                            1:15 PM - 1: 20 PM
                                        </li>
                                        <li class="list-group-item text-center">
                                            1:20 PM - 1: 25 PM
                                        </li>
                                        <li class="list-group-item disabled text-center">
                                            1:25 PM - 1: 30 PM
                                        </li>
                                        <li class="list-group-item text-center">
                                            1:30 PM - 1: 35 PM
                                        </li>
                                        <li class="list-group-item text-center">
                                            1:35 PM - 1: 40 PM
                                        </li>
                                        <li class="list-group-item text-center">
                                            1:40 PM - 1: 45 PM
                                        </li>
                                        <li class="list-group-item disabled text-center">
                                            1:45 PM - 1: 50 PM
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-small btn-primary" data-dismiss="modal" type="button">Book</button>
                </div>
            </div>
        </div>
    </div>
  

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

<script src="js/fullcalender.js"></script>
<script src="js/function.js"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript">
        $(function() {

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

                $('#reportrange input[name="report_range"]').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#reportrange input[name="report_range"]').change()
            }
            cb(moment(new Date()), moment(new Date()));

            $('#reportrange').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Tommorow': [moment().add(1, 'days'), moment().add(1, 'days')],
                    'Next 7 Days': [moment(), moment().add(6, 'days')],
                    'Next 30 Days': [moment(), moment().add(29, 'days')],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Next Month': [moment().add(1, 'month').startOf('month'), moment().add(1, 'month').endOf('month')]
                }
            }, cb);


            $(document).on("change","#reportrange input[name='report_range']",function(){
                $("#date_range").submit();
            });

            $('#datetimepicker1').datetimepicker({
                defaultDate: moment(),
                sideBySide: true
              });

             $('#datetimepicker1').data("DateTimePicker").date(moment());
        });


    </script>



</body>
</html>