<?php 

include("../controller/session.php");

if($_SESSION["Category"]!="Admin"){
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
      <title>admin</title>
  </head>
  <body>
    <H1> <?php echo $_SESSION["Category"]?> Dashboard <H1> <br>
    <H2> Hello <?php echo $_SESSION["Username"] ?> <H2> 
  
    <table>
  <tr>
    <td><a href="show_VD.php"><input type="button" value="Manage Volunteer"></a></td>
    <td><a href="show_PD.php"><input type="button" value="Manage Participants"></a></td>
    <td><a href="show_JD.php"><input type="button" value="Manage Judge"></a></td>
    <td><a href="show_SD.php"><input type="button" value="Show Scoreboard"></a></td>
   
  
  
  </tr>
  <tr>
    <td><a href="registration_volunteer.php"><input type="button" value="Add Volunteer"></a></td>
    <td><a href="registration_judge.php"><input type="button" value="Add Judge"></a></td>
    <td><a href="registration_participant.php"><input type="button" value="Add Participant"></a></td>
    <td><a href="Scoreboard.php"><input type="button" value="Entry Score"></a></td>
  
  
  </tr>
  <tr>
    <td><a href="create_event.php"><input type="button" value="Create Event"></a></td>
    <td><a href="Create_team.php"><input type="button" value="Create Team"></a></td>
    <td><a href="Create_report.php"><input type="button" value="Create Report"></a></td>
    
  
  
  </tr>
  
  <tr>
    <td><a href="show_ED.php"><input type="button" value="Manage Events"></a></td>
    <td><a href="show_TD.php"><input type="button" value="Manage Teams"></a></td>
    <td><a href="show_RD.php"><input type="button" value="Manage Reports"></a></td>
  
  
  </tr>

  <tr> 
 <td> 
  <a href= "?logout" > Log out </a>  </td>
</tr>
  </table>
  </body>
  </html>

