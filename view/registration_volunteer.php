<?php 
include("../controller/process_volunteer.php");

echo $printcookie;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<table>
        <form action="" method="post">
            <tr>
            <td><label for="first_name">First Name:</label></td>
                <td><input type="text" id="first_name" name="first_name">
                    <?php echo $firstnameError; ?> </td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name :</label></td>
                <td><input type="text" id="last_name" name="last_name">
                    <?php echo $lastnameError; ?> </td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" id="email" name="email"><?php echo $emailError ;?></td>
                
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password"><?php echo $passwordError ;?></td>
            </tr>
            <tr>
                <td><label for="bdate">Date of Birth :</label></td>
                <td><input type="date" id="bdate" name="bdate">
                </td>
            </tr>
            <tr>
                <td><label for="gender">Gender :</label></td>
                <td>
                    <input type="radio" id="gender" name="gender" value="Male">Male
                    <input type="radio" id="gender" name="gender" value="Female">Female
                    <input type="radio" id="gender" name="gender" value="Rather not say" checked="checked">Rather Not Say
                    <?php echo $genderError ;?>
                </td>
            </tr>
            <tr>
                <td><label for="institution">Institution :</label></td>
                <td> <input type="text" id="institution" name="institution"> <?php echo $institutionError; ?></td>
            </tr>

            <tr>
                <td>
                    <label for="division">
                       Division :
                    </label>

                </td>
                <td>
                    <select name="division" id="division">
                    <option value="">Select a division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Mymensingh">Mymensingh</option>
                    </select>
                    <?php echo $divisionError; ?>
                </td>
            </tr>
            <tr>
                <td><label for="jdate">Joining Date :</label></td>
                <td><input type="date" id="jdate" name="jdate"></td>
            </tr>
            <tr>
                <td><label for="pno">Phone Number :</label></td>
                <td><input type="text" id="pno" name="pno"><?php echo $pnoError; ?></td>
            </tr>
            <tr>
                <td><label for="eno">Emergency Contact :</label></td>
                <td><input type="tel" id="eno" name="eno"><?php echo $enoError; ?></td>
            </tr>
            <tr>
                <td><label for="image">Profile Picture :</label></td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
            <td><input type="checkbox" value="term&conditions">I agree to the terms & conditions .</td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit_button">
                <input type="reset" value="reset"></td>
            </tr>


        </form>
    </table>
</body>
</html>