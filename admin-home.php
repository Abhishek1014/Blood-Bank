<?php
    include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css\s1.css">
</head>
<body>
<div class="full">
    <div id="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration:none;color:white;">Blood Bank</a></h2></div>
        <div id="body">
        <br>
        <?php
        $un=$_SESSION['un'];
        if(!$un)
        {
            header("Location:index.php");
        }
        ?>
            <h1>Welcome Hospital User</h1><br><br><br>
            <ul>
                <li><a href="donner-red.php">Add Blood Info</a></li>
                <li><a href="donor-list.php">View Request</a></li>
                <li><a href="stock-blood-list.php">Available Blood Samples</a></li>
    </ul>
        </div>
        <div id="footer"><h4 align="center"></h4>
        <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
      </div>
  </div>
</div>
</body>
</html>
