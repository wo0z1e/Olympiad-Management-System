<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Details</title>
</head>
<body>
    <p> Welcome To Participants Management <p> </br>

<table align="center" > 
   <tr>
   <th>Team Name</th>
   <th>Segment Name</th>
   <th>Innovation </th>
   <th>Usability </th>
   <th>Cost Effeciency </th>
   
   <th>Action</th>
    </tr>
    
    
    <?php 

    $data = file_get_contents('../data/scoreboard.json');
    $parsed_data = json_decode($data,true);
    if(count($parsed_data) !=0 ){ 
    foreach($parsed_data as $d){
          
        ?>
         <tr>
         
         <td> <?php echo $d['teamname'] ?> </td>
         <td> <?php echo $d['seg'] ?> </td>
        
         <td> <?php echo $d['Innovation'] ?> </td>
         <td> <?php echo $d['Usability'] ?> </td>
         <td> <?php echo $d['Cost Impact'] ?> </td>

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
