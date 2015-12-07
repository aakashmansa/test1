<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          © Copyright 2015, All Rights Reserved.
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
          <form method="post" action="profile.php" id="loginform" class="form-horizontal" role="form">
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
                  Remember me </label><div style="margin:0 0 0 50px;" class="pull-right"><a href="#">Forgot password?</a></div><br />

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
<script src="js/jquery.bootstrap.newsbox.js" type="text/javascript"></script>

<script src="js/function.js"></script> 
<script type="text/javascript">
  $(function () {
    $(".demo1").bootstrapNews({
      newsPerPage: 4,
      autoplay: true,
      pauseOnHover:true,
      direction: 'up',
      newsTickerInterval: 4000,
      onToDo: function () {
      }
    });
  });
</script> 
</body>
</html>
