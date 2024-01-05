<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judge Details</title>
</head>
<body>
    <p> Welcome To Judge Management <p> </br>

<table align="center" > 
   <tr>
   <th>Image</th>
   <th>Name</th>
   <th>organization</th>
   <th>Professional Title</th>
   <th>Action</th>
    </tr>
    
    
    <?php 

    $data = file_get_contents('../data/judgejsondata.json');
    $parsed_data = json_decode($data,true);
    if(count($parsed_data) !=0 ){ 
    foreach($parsed_data as $d){
          
        ?>
         <tr>
         <td> <img style="Height:50px" src="<?php echo "../uploads/".$d['email'].".jpg"?>" alt=""> </td>
         <td> <?php echo $d['fname'] ?> </td>
         <td> <?php echo $d['org'] ?> </td>
         <td> <?php echo $d['proftitle'] ?> </td>

         <td>
         <select name="Action" id="Action">
                    <option value="">Action</option>
                        <option value="Update">Update</option>
                        <option value="Delete">Delete</option>
                       
                    </select>


           </td>

          </tr>
         
         <?php

      }
     }

?>
</table>

</body>
</html>
