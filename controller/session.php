<?php

 $Admin = "home_admin.php";
 $manager = "home_manager.php";
 $judge = "home_judge.php";
 $participant = "home_participant.php";
 $voluneer = "home_volunteer.php";
 $Home=" "; 

 session_start();
 
  if(isset($_SESSION["Category"])){

      $cat = $_SESSION["Category"];

       if($cat=="Admin"){
        $Home = $Admin ; 

       }else if($cat=="Participant"){
        $Home = $participant ; 

       }else if($cat=="Judge"){

        $Home = $judge ; 
       }else if($cat=="Volunteer"){

        $Home = $voluneer ; 
       }else if($cat=="Manager"){

        $Home = $manager ; 
       }


 }

?> 