<?php


session_start();
if(isset($_POST['submit'])){

        $Username = $_POST['uname'];
        $password = $_POST['password'];
        $Category = $_POST['UC'];

 
if($Category=="Participant"){
    $data = file_get_contents('../data/jsondata.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
        // Access array elements using square brackets
       // echo $entry['email'] . " " . $entry['password'] . "</br>";
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            $_SESSION["Category"] = $Category ;
            $_SESSION["Username"] = $entry['fname'] ; 
            setcookie("Visit","1", time()+10,"/");
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){
    
    
    echo "Success" ; 
    header('Location:../view/home_participant.php');
    exit();
}else {

    echo "Error , Try Again " ;
    header('Location:../view/login.php');
    exit();

  
}
}else if($Category=="Volunteer"){

    
    $data = file_get_contents('../data/voljsondata.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
        // Access array elements using square brackets
       // echo $entry['email'] . " " . $entry['password'] . "</br>";
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            $_SESSION["Category"] = $Category ;
            $_SESSION["Username"] = $entry['fname'] ; 
            setcookie("Visit","1", time()+10,"/");
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){
   
    echo "Success" ; 
    header('Location:../view/home_volunteer.php');
    exit();
}else {

    echo "Error , Try Again " ;
    header('Location:../view/login.php');
    exit();

  
}




}else if($Category=="Judge"){

    $data = file_get_contents('../data/judgejsondata.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
        // Access array elements using square brackets
       // echo $entry['email'] . " " . $entry['password'] . "</br>";
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            $_SESSION["Category"] = $Category ;
            $_SESSION["Username"] = $entry['fname'] ;
            setcookie("Visit","1", time()+10,"/"); 
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){

    echo "Success" ; 
    header('Location:../view/home_judge.php');
    exit();
}else {
   
    echo "Error , Try Again " ;
    header('Location:../view/login.php');
    exit();

  
}

}else if($Category=="Admin"){


    $data = file_get_contents('../data/adminData.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
        // Access array elements using square brackets
       // echo $entry['email'] . " " . $entry['password'] . "</br>";
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            $_SESSION["Category"] = $Category ;
            $_SESSION["Username"] = $entry['fname'] ; 
            setcookie("Visit","1", time()+10,"/");
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){

     
    echo "Success" ; 
    header('Location:../view/home_admin.php');
    exit();
}else {

    echo "Error , Try Again " ;
    header('Location:../view/login.php');
    exit();

  
}


}else if($Category=="Manager"){


    $data = file_get_contents('../data/manager.json');
    
    $parsed_data = json_decode($data,true);

   $uStatus = FALSE ; 
    foreach ($parsed_data as $entry) {
       
        if(($entry['email'])==$Username && ($entry['password'])==$password){

            $uStatus = TRUE ; 
            $_SESSION["Category"] = $Category ;
            $_SESSION["Username"] = $entry['fname'] ; 
            setcookie("Visit","1", time()+10,"/");
            break; 
        }
    
    }

  
   
    
if($uStatus==TRUE){
    
    echo "Success" ; 
    header('Location:../view/home_manager.php');
    exit();
}else {

    echo "Error , Try Again " ;
    header('Location:../view/login.php');
    exit();

  
}


}




}

?>

