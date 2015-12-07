<?php 
$json = file_get_contents("data.json");
$users = json_decode($json);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <link href="css/calender.css" rel="stylesheet">
  <style type="text/css">
      .carousel-control.left, .carousel-control.right {
        background: none !important;
      }

  </style>
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
  <style type="text/css">
    #trash{
      border: 1px solid #cccccc;
      border-radius: 5px;
      margin-top: 10px;
      min-height: 35px;
      padding: 5px;
    }

    #time-line{
      margin-top: 10px;
      min-height: 35px;
      padding: 5px;
    }

  </style>
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
                        <li><a href="roster.php">Full Roster</a></li>
                        <li><a href="#">By Sport</a></li>
                        <li><a href="#">By Team</a></li>
                        <li><a href="#">For Video Critique</a></li>
                      </ul>
                    </li>
                    <li><a href="event.php">VIDEOCAST SCHEDULE</a>
                      <ul>
                        <li><a href="event.php">Search Capabilities</a></li>
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