<?php include 'header.php'; ?>
<style type="text/css">
  .glyphicon
  {
    margin-right:4px !important; /*override*/
  }

  .pagination .glyphicon
  {
    margin-right:0px !important; /*override*/
  }

  .pagination a
  {
    color:#555;
  }

  .panel ul
  {
    padding:0px;
    margin:0px;
    list-style:none;
  }

  .news-item
  {
    padding:4px 4px;
    margin:0px;
    border-bottom:1px dotted #555; 
  }
  .no-padding{
    padding: 0 6px !important;
  }

</style>
<section id="search">
  <div class="container">
    <div class="col-md-4">
      <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Live Shows</b></div>
        <div class="panel-body">
          <div class="row">


            <div class="col-xs-12">
              <ul class="demo1">
                <li class="news-item">
                  <div class="clearfix">
                    <div class="col-md-3">
                      <img src="images/analyst.jpg" width="60" height="60" class="" />
                    </div>
                    <div class="col-md-8 no-padding">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                      <a href="show.php">Go to show</a>
                    </div>
                  </div>
                </li>
                <li class="news-item">
                  <div class="clearfix">
                    <div class="col-md-3">
                      <img src="images/analyst2.jpg" width="60" height="60" class="" />
                    </div>
                    <div class="col-md-8 no-padding">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                      <a href="show.php">Go to show</a>
                    </div>
                  </div>
                </li>
                <li class="news-item">
                 <div class="clearfix">
                  <div class="col-md-3">
                    <img src="images/analyst.jpg" width="60" height="60" class="" />
                  </div>
                  <div class="col-md-8 no-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                    <a href="show.php">Go to show</a>
                  </div>
                </div>
              </li>
              <li class="news-item">
                <div class="clearfix">
                  <div class="col-md-3">
                    <img src="images/analyst2.jpg" width="60" height="60" class="" />
                  </div>
                  <div class="col-md-8 no-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                    <a href="show.php">Go to show</a>
                  </div>
                </div>
              </li>
              <li class="news-item">
                  <div class="clearfix">
                    <div class="col-md-3">
                      <img src="images/analyst.jpg" width="60" height="60" class="" />
                    </div>
                    <div class="col-md-8 no-padding">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                      <a href="show.php">Go to show</a>
                    </div>
                  </div>
                </li>
                <li class="news-item">
                  <div class="clearfix">
                    <div class="col-md-3">
                      <img src="images/analyst2.jpg" width="60" height="60" class="" />
                    </div>
                    <div class="col-md-8 no-padding">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                      <a href="show.php">Go to show</a>
                    </div>
                  </div>
                </li>
                <li class="news-item">
                 <div class="clearfix">
                  <div class="col-md-3">
                    <img src="images/analyst.jpg" width="60" height="60" class="" />
                  </div>
                  <div class="col-md-8 no-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                    <a href="show.php">Go to show</a>
                  </div>
                </div>
              </li>
              <li class="news-item">
                <div class="clearfix">
                  <div class="col-md-3">
                    <img src="images/analyst2.jpg" width="60" height="60" class="" />
                  </div>
                  <div class="col-md-8 no-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                    <a href="show.php">Go to show</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel-footer"> </div>
    </div>
  </div>
  <div data-ride="carousel" class="carousel vertical slide col-md-4" id="myCarousel">
    <div role="" class="carousel-inner">
      <div class="item active">
        <div class="">

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
    </div>

    <div class="item">
      <div class="">
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

  <!-- Left and right controls -->
  <a data-slide="prev" role="button" href="#myCarousel" class="left carousel-control">
    <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a data-slide="next" role="button" href="#myCarousel" class="right carousel-control">
    <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="col-md-4">
  <div class="panel panel-default" style="margin-top: 20px;">
        <div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Powered by Sportseed</b></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12" style="height: 312px; text-align: center;">
                Videos from Sportseed
            </div>
        </div>
      </div>
      <div class="panel-footer"> </div>
    </div>
</div>

</div>
</section>
<?php include 'footer.php'; ?>