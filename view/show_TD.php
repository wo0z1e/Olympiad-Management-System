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
   <th>leader Name </th>
   <th>Participant 1 Name </th>
   <th>Participant 2 Name </th>
   <th>Participant 3 Name </th>
   <th>Participant 4 Name </th>
   <th>Participant 5 Name </th>
   <th>Action</th>
    </tr>
    
    
    <?php 

    $data = file_get_contents('../data/team_details.json');
    $parsed_data = json_decode($data,true);
    if(count($parsed_data) !=0 ){ 
    foreach($parsed_data as $d){
          
        ?>
         <tr>
         
         <td> <?php echo $d['teamname'] ?> </td>
         <td> <?php echo $d['segment'] ?> </td>
         <td> <?php echo $d['teamleader'] ?> </td>
         <td> <?php echo $d['participant1name'] ?> </td>
         <td> <?php echo $d['participant2name'] ?> </td>
         <td> <?php echo $d['participant3name'] ?> </td>
         <td> <?php echo $d['participant4name'] ?> </td>
         <td> <?php echo $d['participant5name'] ?> </td>

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
