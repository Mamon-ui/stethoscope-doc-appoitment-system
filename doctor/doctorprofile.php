<?php
session_start();
include_once '../login/connection.php';
if(!isset($_SESSION['doctorSession']))
{
header("Location: ../index.html");
}
$usersession = $_SESSION['doctorSession'];
$res=mysqli_query($con,"SELECT * FROM doctor WHERE doctorId=".$usersession);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stylea.css">
    <title>Profile Page</title>
</head>
<center>
<body class="profile-page">
    <div class="wrapper">

        <h2>Profile</h2>
        <form enctype="multipart/form-data">
        <a<i></i> NAME      :   <?php  echo $userRow['Dr.name']; ?> </a>
        <br>
        <a<i></i>  ID       :  <?php echo $userRow['doctorId']; ?> </a>
        
       <br>
       <a<i></i> NUMBER         : <?php echo $userRow['phone'];  ?> </a>
       <br>
       <a<i></i> email         : <?php echo $userRow['email'];  ?> </a>
       <br>
       <a<i></i> Address       : <?php echo $userRow['address'];  ?> </a>
       <br>
       <a<i></i> Specialization       : <?php echo $userRow['speciali'];  ?> </a>
       <br>
       <a<i></i> hospital        : <?php echo $userRow['hospital'];  ?> </a>
  <?php
            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
            <div>
             <a href ="doctordashboard.php">  <button type="button" class="btn">back</button> </a>
            </div>
        </form>
    </div>
</body>
</center>
</html>