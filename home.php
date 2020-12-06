<?php
    include('conn.php');
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css\s1.css">
    <style>
        .button1{
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:100px;
  cursor: pointer;
}
.button2{
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:700px;
  cursor: pointer;
}
.button3{
  background-color: blue;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:570px;
  cursor: pointer;
}
img{
    
  border-radius: 4px;
  padding: 5px;
  width: 250px;
  margin-left:500px;
  
}
        </style>
</head>
<body>
<div class="full">
    <div id="inner_full">
        <div id="header"><h2><a href="home.php" style="text-decoration:none;color:white;">Blood Bank</a></h2></div>
        <div id="body">
            <br><br><br><br>
            <form action="" method="post">
            <div class="container">
            <button class="button1" name="sub">Hospital User</button>
            <button class="button2" name="rr">Receivers</button>
            <img src="image\bb.jpg">
            <button class="button3" name="ss">Request</button>
            </div>
            </form>
            <?php
            if(isset($_POST['sub']))
            {
                    header("Location:index.php"); 
            }
            else if(isset($_POST['rr']))
            {
                 header("Location:registration.php"); 
            }
            else if(isset($_POST['ss']))
            {
                 header("Location:request.php"); 
            }
            ?>
        </div>
        <div id="footer"><h4 align="center"></h4></div>

    </div>

</body>
</html>
