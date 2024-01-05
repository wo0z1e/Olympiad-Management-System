<?php 
include("../controller/session.php");


if($_SESSION["Category"]!="Judge"){
  header("Location:$Home");
  exit();

}

if(!isset($_SESSION["Username"])) { 

  header('Location:login.php');
  exit();
}

 if(isset($_GET['logout'])){
   
  unset($_SESSION["Username"]);
  unset($_SESSION["Category"]);
  unset($_COOKIE["Visit"]);
  header('Location:login.php');
  exit();
     
 }
 if(isset($_COOKIE["Visit"])){
  echo "Welcome Back ".$_SESSION["Username"];
      
 }else{
  echo "Welcome ".$_SESSION["Username"];
 } 


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judge</title>
</head>
<body>
    <H1> <?php echo $_SESSION["Category"]?> Dashboard <H1> <br>
    <H2> Hello <?php echo $_SESSION["Username"] ?> <H2> 

  <table>
<tr>
 
  <td><a href="show_PD.php"><input type="button" value="Show Participants"></a></td>
  <td><a href="show_SD.php"><input type="button" value="Show Scoreboard"></a></td>
  
  


</tr>
<tr>
  
 
 


</tr>
<tr>
  
  <td><a href="Create_report.php"><input type="button" value="Create Report"></a></td>
  <td><a href="Scoreboard.php"><input type="button" value="Entry Score"></a></td>
  


</tr>

<tr>
  
  
  <td><a href="show_RD.php"><input type="button" value="Manage Reports"></a></td>


</tr>
<tr> 
 <td> 
  <a href= "?logout" > Log out </a>  </td>
</tr>
</table>
</body>
</html>
