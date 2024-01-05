
<?php 
include("../controller/process_createevent.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Creation</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><h2>Welcome</h2></td>
            </tr>
            <tr>
                <td><h3>Create an event .</h3></td>
            </tr>
            <tr>
                <td><label for="eventname">Event Name :</label></td>
                <td><input type="text" for="eventname" name="eventname" ></td>
            </tr>
            <tr>
                <td><label for="eventloc">Event Location :</label></td>
                <td><input type="text" id="eventloc" name="eventloc" >
                </td>
            </tr>
            <tr>
                <td><label for="eventpur">Event Purpose :</label></td>
                <td><input type="text" id="eventpur" name="eventpur" >
                </td>
            </tr>
            <tr>
                <td><label for="eventdatetime">Event Date-Time :</label></td>
                <td><input type="date" id="eventdatetime" name="eventdatetime" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"><input type="reset" value="reset" name="reset"> </td>
            </tr>
        </table>
    </form>
</body>
</html>