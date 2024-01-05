<?php 
include("../controller/process_score.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Home</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h4>Update Score </h4></td>
            </tr>
            <tr>
                <td>Segment</td>
                <td>
            <select name="Seg" id="Seg">
                    <option value="">Segment</option>
                        <option value="Future Innovators">Future Innovators</option>
                        <option value="Future Engineers">Future Engineers</option>
                       
                    </select> </td>

</tr>
            <tr>
                <td><label for="tname">Team Name</label></td>
                <td><input type="text" id="tname" name="tname"></td>
            </tr>
            
           
           
            <tr>
                <td><label for="part1name">Innovation Impact Score : </label></td>
                <td><input type="text" id="part1name" name="part1name"></td>
            </tr>
           
           
            <tr>
                <td><label for="part2name">Usability :</label></td>
                <td><input type="text" id="part2name" name="part2name"></td>
            </tr>
            
            
            <tr>
                <td><label for="part3name">Cost Effeciency :</label></td>
                <td><input type="text" id="part3name" name="part3name"></td>
            </tr>

            <tr>
                <td><input type="submit" id="submit" name="submit" > <input type="reset" id="reset" name="reset" ></td>
            </tr>
         
            
        </table>
    </form>
    
</body>
</html>