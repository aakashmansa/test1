<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<title>ICS</title>
</head>

<body>
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
        <h1>Advance Roster search</h1>
      </div>
    </div>
    <div class="row">
    <div class="col-md-3">
        <div class="input-group col-md-12">
          <input type="text" class="form-control" placeholder="Search By Name" />
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group col-md-12">
          <select class="form-control">
            <option>- Select Team -</option>
            <option>Washington Redskins</option>
            <option>Cleveland Indians</option>
            <option>Atlanta Braves</option>
            <option>Kansas City Chiefs</option>
            <option>Dallas Cowboys</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group col-md-12">
          <select class="form-control">
            <option>- Select sport -</option>
            <option>Baseball</option>
            <option>Basketball</option>
            <option>Hockey</option>
            <option>Football</option>
            <option>Cricket</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group col-md-12">
          <input type="button" class="theme_button btn btn-default" value="Search" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
          <div class="user_info">
            <div class="user_images">
              <img height="227px" src="images/analyst.jpg">
            </div>
            <div class="user_deatails">
              <h3>Jack Clark</h3>
              <h4>Baseball</h4>
              <h4>St. Louis Cardinals (1985-87)</h4>
              <h4>San Francisco Giants (1975-84)</h4>
              <a href="analyst-profile-view2.php?id=0"><h4>Go to profile</h4></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="user_info">
          <div class="user_images">
            <img height="227px" src="images/analyst2.jpg">
          </div>
          <div class="user_deatails">
            <h3>Dana Cavalea</h3>
            <h4>Baseball</h4>
            <h4>New York Yankees (2001-14)</h4>
            <h4>Strength and Conditioning</h4>
            <a href="analyst-profile-view2.php?id=1"><h4>Go to profile</h4></a>
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
              <a href="analyst-profile.html" id="btn-login" class="btn btn-success">Login as Analyst </a>
              <a href="admin.html" id="btn-login" class="btn btn-success">Login as admin </a> 
              </div>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/function.js"></script>  
</body>
</html>
