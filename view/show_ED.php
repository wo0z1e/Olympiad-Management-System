<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Details</title>
</head>
<body>
    <p> Welcome To Events Management <p> </br>

<table align="center" > 
   <tr>
   <th>Event Name</th>
   <th>Location</th>
   <th>Purpose</th>
   <th>Date</th>
   <th>Action</th>
    </tr>
    
    
    <?php 

    $data = file_get_contents('../data/events.json');
    $parsed_data = json_decode($data,true);
    if(count($parsed_data) !=0 ){ 
    foreach($parsed_data as $d){
          
        ?>
         <tr>
         
         <td> <?php echo $d['Eventname'] ?> </td>
         <td> <?php echo $d['Eventlocation'] ?> </td>
         <td> <?php echo $d['Eventpurpose'] ?> </td>
         <td> <?php echo $d['EventDate-Time'] ?> </td>

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
