<?php require_once('assets/php/initialize.php'); ?>

<?php include(PHP_PATH . '/header.php'); ?>

<?php include(PHP_PATH . '/navigation.php'); ?>

    <div class="main-panel">

      <!-- Top menu -->

        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

	<!-- Content  -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-primary" style="border-color:#f0ad4e;">
                <div class="panel-heading" style="background-color:#f0ad4e;border-color:#f0ad4e;">
                  <div class="row">
                    <div class="col-xs-9">
                      <h2><i class="fas fa-graduation-cap"></i> Courses</h2>
                    </div>
                    <div class="col-xs-3 text-right">
                      <div>
                        <h1>4</h1></div>
                    </div>
                  </div>
                </div>
                <a href="pages/courses.php">
                  <div class="panel-footer">
                    <span class="pull-left">Go to courses</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-primary" style="border-color:#5cb85c;">
                <div class="panel-heading" style="background-color:#5cb85c;border-color:#5cb85c;">
                  <div class="row">
                    <div class="col-xs-9">
                      <h2><i class="fas fa-user-friends"></i> Users</h2>
                    </div>
                    <div class="col-xs-3 text-right">
                      <div>
                        <h1>6</h1></div>
                    </div>
                  </div>
                </div>
                <a href="pages/users.php">
                  <div class="panel-footer">
                    <span class="pull-left">Go to users</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

 <?php include(PHP_PATH . '/footer.php'); ?>

 </div>
</body>

<?php include('assets/php/footerfiles.php'); ?>


</html>
