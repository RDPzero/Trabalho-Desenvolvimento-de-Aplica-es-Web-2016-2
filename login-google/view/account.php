<?php
session_start();
if (!isset($_SESSION['google_data'])):header("Location:/view/login.php");
endif;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../include/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../include/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../include/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../include/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="../include/logout.php?logout">Logout</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Trabalho</h3>
      </div>

      <div class="jumbotron">
        <h2>Google Profile Details </h2>
        <?php
            echo '<div>Welcome <b>' . $_SESSION['google_data']['given_name'] . '</b></div>';
            echo '<p class="image"><img src="' . $_SESSION['google_data']['picture'] . '" alt="" width="300" height="220"/></p>';
            echo '<p><b>Google ID : </b>' . $_SESSION['google_data']['id'] . '</p>';
            echo '<p><b>Name : </b>' . $_SESSION['google_data']['name'] . '</p>';
            echo '<p><b>Email : </b>' . $_SESSION['google_data']['email'] . '</p>';
            echo '<p><b>Gender : </b>' . $_SESSION['google_data']['gender'] . '</p>';
            echo '<p><b>Locale : </b>' . $_SESSION['google_data']['locale'] . '</p>';
            echo '<p><b>Google+ Link : </b>' . $_SESSION['google_data']['link'] . '</p>';
            echo '<p><b>You are logged in with : </b>Google</p>';
            ?>
        <p><a class="btn btn-lg btn-success" href="../include/logout.php?logout" role="button">Logout</a></p></div>
      </div>

<!--      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>-->

      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div>  
    <script src="../include/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
