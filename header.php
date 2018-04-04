<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="BTL_css/headercss.css">
</head>
<body>
 
    <div class="header">
      <div class="row">
        <?php
          include 'vitri.php';
          include 'dangki.php'
        ?>
        <div class="col-sm-12">
          <nav class="List-menu navbar navbar-default"> 
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                  include 'logo.php';
                  include 'menu.php';
                ?>
              </div>
          </nav>
      </div>
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
