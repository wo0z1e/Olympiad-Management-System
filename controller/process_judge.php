<?php
$printcookie = "";
setcookie("visit", "1", time() + 36000);
if (isset($_COOKIE["visit"])) {
    $printcookie = "<h3>Welcome Back</h3>";
} else {
    $printcookie = "<h3>Welcome</h3>";
}
$firstnameError = $lastnameError = $emailError = $passwordError = $genderError  = $pnoError = $enoError = $imageError = $orgError=$proftitleError = $profexpError ="";
if (isset($_REQUEST["submit_button"])) {
    if (empty($_REQUEST["first_name"])) {
        $firstnameError = "First name cannot be empty";
    } elseif (strlen($_REQUEST["first_name"]) < 2) {
        $firstnameError = "First name cannot be less than 2 charecters";
    } else {
        $firstnameError = "First name is " . $_REQUEST["first_name"];
    }
    if (empty($_REQUEST["last_name"])) {
        $lastnameError = "Last name cannot be empty";
    } elseif (strlen($_REQUEST["last_name"]) < 2) {
        $lastnameError = "Last name cannot be less than 2 charecters";
    } else {
        $lastnameError = "Last name is " . $_REQUEST["last_name"];
    }

    if (!empty($_REQUEST["email"])) {
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["email"])) {
            $emailError = "Please enter a valid email address";
        } else {
            $emailError = "Your email is " . $_REQUEST["email"];
        }
    } else {
        $emailError = "Email address cannot be empty";
    }

    if (!empty($_REQUEST["password"])) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]
        {6,15}$/', $_REQUEST["password"])) {
            $passwordError = "Password must contain 6 characters of letters, numbers and at least one special character.";
        }
    } else{
        $passwordError = "Password cannot be empty.";
    }
    if (!empty($_REQUEST["pno"])) {
        if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $_REQUEST["pno"])) {
            $pnoError = "Please enter a valid phone number";
        } else {
            $pnoError = "Your Number is " . $_REQUEST["pno"];
        }
    } else {
        $pnoError = "Please enter your Personal contact.";
    }
    if (!empty($_REQUEST["eno"])) {
        if (!preg_match("/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/", $_REQUEST["eno"])) {
            $enoError = "Please enter a valid phone number";
        } else {
            $enoError = "Your Number is " . $_REQUEST["eno"];
        }
    } else {
        $enoError = "Please enter your Emergency contact .";
    }


    if (empty($_REQUEST["gender"])) {
        $genderError = "<br>Please select a Gender .";
    } else {
        $genderError = "Your Gender is " . $_REQUEST["gender"];
    }
    
    if(empty($_REQUEST["org"])){
$orgError="Please enter your organization name .";
    }
   else{
    $orgError="Your organization name is " .$_REQUEST["org"];
   }
    
   if(empty($_REQUEST["proftitle"])){
$proftitleError="Please enter your Professional Title .";
   }
   else{
    $proftitleError="Your Professional Title is ".$_REQUEST["proftitle"];
   }

   if(empty($_REQUEST["profexp"])){
    $profexpError="Please enter your professional experience .";
   }

    
    if (empty($_FILES["image"]["name"])) {
        $imageError = "Enter a file";
    } else {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp_name,'../uploads/'.$_REQUEST["email"] . ".jpg");
    }

    $existingdata = file_get_contents("../data/judgejsondata.json");
    $phpdata = json_decode($existingdata);
    $formdata = array(
        "fname" => $_REQUEST["first_name"],
        "lname" => $_REQUEST["last_name"],
        "email" => $_REQUEST["email"],
        "password" => $_REQUEST["password"],
        "DOB" => $_REQUEST["bdate"],
        "pno" => $_REQUEST["pno"],
        "eno" => $_REQUEST["eno"],
        "gender" => $_REQUEST["gender"],
        "org" =>$_REQUEST["org"],
        "proftitle" =>$_REQUEST["proftitle"],
        "profexp"=>$_REQUEST["profexp"],      
        "file" => "../uploads/" . $_REQUEST["email"] . ".jpg",
    );
    $phpdata[] = $formdata;

    $jsondata = json_encode($phpdata, JSON_PRETTY_PRINT);

    if (file_put_contents("../data/judgejsondata.json", $jsondata)) {
        echo "file written successfully";
    } else {
        echo "file written failed";
    }
}
