<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Details</title>
</head>
<body>
    <p> Welcome To Reports Management <p> </br>

<table align="center" > 
   <tr>
   <th>Data</th>
 
    
    
    <?php 

    $data = file_get_contents('../data/report.json');
    $parsed_data = json_decode($data,true);
    if(count($parsed_data) !=0 ){ 
    foreach($parsed_data as $d){
          
        ?>
         <tr>
         
         <td> <?php echo $d['report'] ?> </td>

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
