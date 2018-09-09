<?php require_once('../assets/PHP/initialize.php'); ?>

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
        <a class="navbar-brand" href="#">Courses</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content  -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <button type="button" class="btn btn-primary pull-right">>Add new course</button><br>
      </div>
      <br>

      <div class="row">
        <div class="col-md-4">
          <div class="card" style="padding:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Course 1</strong></h4>
              <p class="card-text">Some quick example text to build on the course card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">View course</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="padding:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Course 2</strong></h4>
              <p class="card-text">Some quick example text to build on the course card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">View course</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="padding:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Course 3</strong></h4>
              <p class="card-text">Some quick example text to build on the course card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">View course</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="padding:20px;">
            <div class="card-body">
              <h4 class="card-title"><strong>Course 4</strong></h4>
              <p class="card-text">Some quick example text to build on the course card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">View course</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include(PHP_PATH . '/footer.php'); ?>

</div>

</body>

<?php include('../assets/php/footerfiles.php'); ?>

</html>
