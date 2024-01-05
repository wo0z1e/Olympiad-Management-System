<?php 

include("../controller/session.php");


if($_SESSION["Category"]!="Participant"){
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
    <title>Home_participant</title>
</head>
<body>
     <H1> <?php echo $_SESSION["Category"]?> Dashboard <H1> <br>
     <H2> Hello <?php echo $_SESSION["Username"] ?> <H2> 

    <form action="" method="post">
        <table>
<tr></tr>
    <td>New here ?</td>
    <td><a href="create_team.php">Create a team</a></td>
</tr>
<tr>
    <td>Find your Team</td>
    <td></td>
</tr>

<tr> 
 <td> 
  <a href= "?logout" > Log out </a>  </td>
</tr>
        </table>
    </form>

</body>
</html>