<?php 

include 'header.php';

$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;

$user = $users[$id];

?>
<div class="container">
  <div class="row profile">
    <div class="container target">
      <div class="row">
        <div class="col-sm-3">
          <div class="profile-sidebar list-group">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
              <img alt="" class="img-responsive" src="<?php echo $user->image; ?>">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                <?php echo $user->name; ?>
              </div>
              <div class="profile-usertitle-job">
                ICS Analyst
              </div>
            </div>
          </div>

          <!--left col-->
          <ul class="list-group">
            <li class="list-group-item text-muted" contenteditable="false">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span>22-Nov-2015</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span><?php echo $user->name; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Position: </strong></span>Hitter</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Teams: </strong></span>
              <?php foreach ($user->teams as $team) {
                  echo $team.'<br/>';
              } ?>
            </li>
          </ul>

          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Sports Talk Shows</strong></span> 3</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">One on One Consults</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span>3785</li>
          </ul>
                        <!-- <div class="panel panel-default">
                            <div class="panel-heading">Social Media</div>
                            <div class="panel-body">    <i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i> 
                                <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>

                            </div>
                          </div> -->
                        </div>
                        <!--/col-3-->
                        <div class="col-sm-9" style="" contenteditable="false">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Overview</a></li>
                            <li role="presentation"><a id="stks" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sports Talk Shows</a></li>
                            <li role="presentation"><a id="otov" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">One on One Consults</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Memorabilia</a></li>
                          </ul>

                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                              <div class="panel panel-default">
                                <div class="panel-heading"><?php echo $user->name; ?>'s Bio</div>
                                <div class="panel-body">
                                  <p>
                                  <?php echo $user->bio; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                              <h1>Sports Talk Shows</h1>
                              <div class="">
                                <div id="calendar"></div>
                              </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                              <div>
                                <h1>
                                  Available timings
                                </h1>

                              </div>

                              <div class="">
                                <div id="weekcalendar"></div>
                              </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings"></div>
                          </div>                        
                        </div>
                      </div>
                    </div>
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
                                  <input disabled name="title" type="text" class="form-control" id="first" placeholder="Title">
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


                    <div id="myotherModal" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Book One on One video consult</h4>
                          </div>

                          <div class="modal-body">
                            <div>
                              <form>
                                <div class="">
                                  <div class="">
                                    <div class="form-group">
                                      <label for="first">Start Time</label>
                                      <div class='input-group date' id='datetimepicker1'>
                                        <input disabled="" name="start_time" type='text' class="form-control" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="first">Duration</label>
                                      <select class="form-control" name="call_duration">
                                        <option value="0">- Select call duration -</option>
                                        <option value="5">5 Min</option>
                                        <option value="15">15 Min</option>
                                        <option value="30">30 Min</option>
                                        <option value="45">45 Min</option>
                                        <option value="60">60 Min</option>
                                      </select>        
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                      <div class="well">
                                        <p>Please choose your time:</p>
                                        <input data-type="begining"  type="radio" autocomplete="off" name="start_slot" value="0"><span id="choice1">Begining</span><br/>
                                        <input data-type="end" type="radio" autocomplete="off" name="start_slot" value="55"><span id="choice2">End</span><br/>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div>

                              <div style="margin-top:20px;">Available time (<span id="duration">45 Min</span>)</div>
                              <div data-count="25" id="trash" class="clearfix">
                                <div id="booked_time" disabled class="btn btn-default" data-min="15" style="width: 23%;">15 Min</div>
                                <div id="fillable"></div>
                              </div>
                              <div id="time-line" class="clearfix">

                              </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button class="btn btn-small btn-primary" data-dismiss="modal" type="button">Book Call</button>
                          </div>
                        </div>
                      </div>
                    </div>



                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/moment.js"></script>
                    <script src="js/bootstrap-datetimepicker.min.js"></script>
                    <script src="js/fullcalender.js"></script>
                    <script src="js/function.js"></script>
                    <script type="text/javascript">
                      $(function () {
                        $('#datetimepicker1').datetimepicker();
                      });
        /*!
 * FullCalendar v1.6.4
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
 $(document).ready(function(){

  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: false,
    defaultView: 'month',
    events: [
    {
      id: 999,
      title: 'Sports Talk Show 1',
      start: new Date(y, m, d+3,13,0),
      end: new Date(y, m, d+3, 14, 0),
      allDay: false
    },
    {
      id: 1000,
      title: 'Sports Talk Show 2',
      start: new Date(y, m, d+4,14,0),
      end: new Date(y, m, d+4, 15, 0),
      allDay: false
    },
    {
      id: 1001,
      title: 'Sports Talk Show 3',
      start: new Date(y, m, d+5,15,0),
      end: new Date(y, m, d+5, 16, 0),
      allDay: false
    },
    {
      id: 1002,
      title: 'Sports Talk Show 4',
      start: new Date(y, m, d,16,0),
      end: new Date(y, m, d, 18, 0),
      allDay: false
    },
    {
      id: 1003,
      title: 'Sports Talk Show 5',
      start: new Date(y, m, d+2,13,0),
      end: new Date(y, m, d+2, 14, 0),
      allDay: false
    }, 
    ],
    eventClick: function(event, element) {
      var modal = $("#bookShow"),
      currentDate = new Date(),
      title = modal.find("input[name='title']");

      if(event.start > currentDate){
        modal.modal('show');
        title.val(event.title)
        $(modal).find('#datetimepicker1').datetimepicker({
          defaultDate: event.start,
          sideBySide: true
        });
        $(modal).find('#datetimepicker1').data("DateTimePicker").date(event.start);
      }
      else
      {
        alert('Cannot book old show');
      }
    }
  });



$('#weekcalendar').fullCalendar({
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
  },
  editable: false,
  defaultView: 'month',
  events: [
  {
    id: 999,
    title: 'Free for call',
    start: new Date(y, m, d+3,13,0),
    end: new Date(y, m, d+3, 14, 0),
    allDay: false
  },
  {
    id: 1000,
    title: 'Free for call',
    start: new Date(y, m, d+2,14,0),
    end: new Date(y, m, d+2, 15, 0),
    allDay: false
  },
  {
    id: 1001,
    title: 'Free for call',
    start: new Date(y, m, d+1,15,0),
    end: new Date(y, m, d+1, 16, 0),
    allDay: false
  },
  {
    id: 1002,
    title: 'Free for call',
    start: new Date(y, m, d+4,16,0),
    end: new Date(y, m, d+4, 18, 0),
    allDay: false
  },
  {
    id: 1003,
    title: 'Free for call',
    start: new Date(y, m, d+2,13,0),
    end: new Date(y, m, d+2, 14, 0),
    allDay: false
  }, 
  ],
  eventClick: function(event, element) {
    var modal = $("#myotherModal"),
    currentDate = new Date(),
    duration  = moment.duration(moment(event.end).diff(moment(event.start)));
    total_time = duration.asHours(),
    g_start = moment(event.start),
    g_end = moment(event.end);

    if(event.start > currentDate){

      modal.modal('show');

      $(modal).find('#datetimepicker1').datetimepicker({
        defaultDate: date,
        sideBySide: true
      });

      var min_length = (1/(total_time * 60)) * 100;

      //default_ele.css('width',Math.floor(15*min_length)+'%')
      $trash.html('');
      curr_time = moment(event.start);
      $(modal).find('#datetimepicker1').data("DateTimePicker").date(curr_time);

      var left_time = moment.duration(moment(event.end).diff(moment(event.start)));
      $(modal).find("#duration").html(left_time.asMinutes()+' Min');
    }
    else
    {
      alert('Please select future time');
    }
  }
});

var $gallery = $( "#gallery" ),
$trash = $( "#trash" ),
total_time = 0.0,
curr_time = moment(),
g_start = moment(),
g_end = moment();

// $(document).on("click","select[name='call_duration'] option", function(){
//   var val = parseInt($(this).val()),
//   choice_time_start = moment(g_start),
//   choice_time_end = moment(g_end);

//   $(document).find("#choice1").html(moment(choice_time_start).format('hh:mm a'));

//   $(document).find("#choice2").html(moment(choice_time_end).subtract(val, 'minutes').format('hh:mm a'));

//   $(document).find("input[name='start_slot']").each(function(){
//     $(this).val(val);
//   });

//   $("#collapseExample").collapse('show');
// });

$(document).on("click","select[name='call_duration'] option", function(){

  var val = parseInt($(this).val()),
  ele = $('<div id="booking_slot"></div>').addClass('btn btn-success'),
  count = parseFloat($trash.data('count')),
  min_length = (1/(total_time * 60)) * 100,
  l_start = g_start.clone();

  if(val!=0){

    if(val==5){
      if((count+(val*min_length)) <= 100 ){

        if($(document).find("#booking_slot").length == 0){
          l_end = g_end.clone();
          ele.html(l_end.subtract(val, 'minutes').format('hh:mm a')+'-'+g_end.format('hh:mm a')).addClass('pull-right').appendTo($trash);
        }
        else
        {
          l_end = g_end.clone();

          ele = $(document).find("#booking_slot");
          ele.html(l_end.subtract(val, 'minutes').format('hh:mm a')+'-'+g_end.format('hh:mm a')).removeClass('pull-right').addClass('pull-right');
        }

        var left_time = moment.duration(l_end.diff(l_start));
        $(document).find("#duration").html(left_time.asMinutes()+' Min');
      }
      else{
        alert('Cannot book, requested minutes are greater than Available minutes');
      }
    }
    else{
      if((count+(val*min_length)) <= 100 ){

        if($(document).find("#booking_slot").length == 0){
          l_start = g_start.clone();
          ele.html(l_start.format('hh:mm a')+'-'+l_start.add(val, 'minutes').format('hh:mm a')).removeClass('pull-right').appendTo($trash);
          l_start = curr_time;

        }
        else
        {
          l_start = g_start.clone();

          ele = $(document).find("#booking_slot");
          ele.html(l_start.format('hh:mm a')+'-'+l_start.add(val, 'minutes').format('hh:mm a')).removeClass('pull-right');
        }

        var left_time = moment.duration(moment(g_end).diff(l_start));
        $(document).find("#duration").html(left_time.asMinutes()+' Min');

        //$(document).find("select[name='call_duration']").attr('disabled','disabled');
      }
      else{
        alert('Cannot book, requested minutes are greater than Available minutes');
      }
    }
  }
});



$(document).on("click","#stks",function(){
  $("#profile").find(".fc-button-month").click();
});

$(document).on("click",".time-slot li:not(.disabled)",function(){
  var eles = $(".time-slot li");

  eles.each(function(){
    $(this).removeClass('selected');
  })
  $(this).addClass('selected')
});

});




</script>
</body>
</html>