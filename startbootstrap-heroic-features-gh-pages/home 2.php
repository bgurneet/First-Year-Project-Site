<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Whiteboard | Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="csshome.css">
  <link rel="stylesheet" href="csshome1.css">
  <link rel="stylesheet" href="stylesheet1.css">
  <link rel="stylesheet" href="sidenav.css">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>


<div class="content">
  <div id="events" onclick="document.location.href='events.php?sessionid=<?php echo $_GET['sessionid'] ?>&userid=<?php echo $_GET['userid'] ?>'">
    <p >Events</p>
  </div>
  </div>
  <div class="content1">
  <div id="teams" onclick="document.location.href='teams.php?sessionid=<?php echo $_GET['sessionid'] ?>&userid=<?php echo $_GET['userid'] ?>'">
    <p >Teams</p>
  </div>
  </div>
  <div class="content2">
  <div id="notes" onclick="document.location.href='notes.php?sessionid=<?php echo $_GET['sessionid'] ?>&userid=<?php echo $_GET['userid'] ?>'">
    <p >Notes</p>
  </div>
</div>


<!-- Animated Text-->

<div class="textt">
  <p>WELCOME TO WHITEBOARD</p>
</div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php"><img class="logo" src="Logo.png" height="30" width="30">Whiteboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar">
        <a1 href="home.php"><i class="fa fa-fw fa-home"></i> Home</a1>
        <a href="events.php"><i class="fa fa-fw fa-calendar"></i> Events</a>
        <a href="teams.php"><i class="fa fa-fw fa-users"></i> Teams</a>
        <a href="notes.php"><i class="fa fa-fw fa-sticky-note"></i> Notes</a>
        <a href="../Login/login.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </div>
    </div>
  </nav>

  <div id="settingsnav" class="settings">
   <a2 href="#" id="settings">Settings</a2>
   <a href="change_Password.php" id="account">Account</a>
   <a href="#" id="privacy">Privacy</a>
   <a href="#" id="about">About</a>
  </div>

  <!-- Page Content -->

    <!-- Jumbotron Header -->



    <!-- Page Features -->

    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="padding-bottom: 10px;">
    <div class="container">
       <p1>
         WHITEBOARD<sup>©</sup>
       </p1>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php

$servername = "remotemysql.com:3306";
$username = "6s7vM7E9Nh";
$password = "NL70C8aGk7";
$database = "6s7vM7E9Nh";

$userid = $_GET['userid'];
$sessionid = $_GET['sessionid'];

$sql = "SELECT SessionID FROM 'Session' WHERE SessionID=$sessionid AND UserID=$userid";

function alert($msg)
{
  echo "<script type='text/javascript'>";
  echo "alert('$msg');";
  echo "</script>";
}

function doSQL($conn, $sql, $testMsgs)
{
  if($testMsgs)
  {
    echo ("<br><code>SQL: $sql</code>");
    if ($result = $conn->query($sql))
      echo ("<code> - OK </code>");
    else
      echo ("<code> - FAIL! " . $conn->error . " </code>");
  }
  else
    $result = $conn->query($sql);
  return $result;
}

?>
