<!DOCTYPE html>
<html>
    <head>
        <style>
           .error {color: #FF0000;}
           #pic{
                width:300px;
                height:auto;
           }
        </style>
    </head>

    <body>
        <?php
            // define variable and set to empty values

            echo'<img src="psmza.png" align = center id = "pic"/>';
            $nameErr = $matricErr = $phoneErr = $emailErr = $classErr = $genderErr = $subjectErr = $agreeErr = "";
            $name = $matric = $phone = $email = $class = $address = $gender = $subject = $agree = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                //name
                if(empty($_POST["name"])){
                    $nameErr = "Name is required";
                }else{
                    $name = test_input($_POST["name"]);
                }
                //email
                if(empty($_POST["email"])){
                    $emailErr = "Email is required";
                }else{
                    $email = test_input($_POST["email"]);

                    //check if email address is well-formed
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid email format";
                    }
                }
                    //class input
                if (empty($_POST["class"])){
                    $classErr = "Class is required";
                }else{
                    $class = test_input($_POST["class"]);
                }
                    //matric input
                if (empty($_POST["matric"])){
                    $matricErr = "Matric is required";
                }else{
                    $matric = test_input($_POST["matric"]);
                }
                    //phone input
                if(empty($_POST["phone"])){
                    $phoneErr = "Phone is required";
                }else{
                    $phone = test_input($_POST["phone"]);
                }
                    //address input
                if(empty($_POST["address"])){
                    $addressErr = "Address is required";
                }else{
                    $address = test_input($_POST["address"]);
                }
                    //gender input
                if(empty($_POST["gender"])){
                    $genderErr = "Gender is required";
                }else{
                    $gender = test_input($_POST["gender"]);
                }
                    //subject input
                if (empty($_POST["subject"])){
                    $subjectErr ="You must select at least one or more";
                }else{
                    $subject = $_POST["subject"];
                }
                    // agree check box
                if(empty($_POST["checked"])){
                    $agreeErr = "You must agree to the terms";
                }else{
                    $agree = $_POST["checked"];
                }
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <h2>Class Registration PSMZA Session I 2025/2026</h2>
        <p><span class = "error">* required field.</p>

        <form method = "POST" action = "<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]);?>">
            <table>
                <!--name textfield-->
                <tr>
                    <td>NAME : </td>
                    <td><input type = "text" name = "name" size= 70><span class = "error">* <?php echo $nameErr;?></span></td>
                </tr>
                <!--matric textfield-->
                <tr>
                    <td>MATRIC NUMBER :</td>
                    <td><input type = "text" name = "matric" size = 70><span class = "error">* <?php echo $matricErr;?></span></td>
                </tr>
                <!--phone textfield-->
                <tr>
                    <td>PHONE NUMBER : </td>
                    <td><input type = "text" name = "phone" size = 70><span class = "error">* <?php echo $phoneErr;?></span></td>
                </tr>
                <!--email textfield-->
                <tr>
                    <td>E-mail : </td>
                    <td><input type="text" name="email" size = 70><span class = "error">*<?php echo $emailErr;?></span></td>
                </tr>
                <!--class textfield-->
                <tr>
                    <td>Class : </td>
                    <td><input type = "text" name = "class"><span class = "error"><?php echo $classErr;?></span></td>
                </tr>
                <!--address textfield-->
                <tr>
                    <td>Address : </td>
                    <td><textarea name="address" row="5" cols="40"></textarea></td>
                </tr>
                <!--Gender Radio Button-->
                <tr>
                    <td>Gender : </td>
                    <td>
                        <input type = "radio" name = "gender" value = "Female"> Female
                        <input type = "radio" name = "gender" value = "male"> Male
                        <span class = "error">* <?php echo $genderErr?></span>
                    </td>
                </tr>
                <!--Gender Selection Box-->
                <tr>
                    <td>Select : </td>
                    <td>
                        <select name = "subject[]" size = "4" multiple>
                            <option value = "Web Development"> Web Development</option>
                            <option value = "Mobile Application Developmet"> Mobile Application Development</option>
                            <option value = "Integrated Project"> Integrated Project </option>
                            <option value="Database Administration">Database Administration</option>
                            <option value = "Web Design">Web Design</option>
                        </select>
                    </td>
                </tr>
                 <!--Agree CheckBox-->
                <tr>
                    <td>Agree </td>
                    <td><input type = "checkbox" name="checked" value = "1">
                        <?php if($agree);?>
                        <span class="error">* <?php echo $agreeErr;?></span>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type = "submit" name = "submit" value = "Submit">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            echo "<h2>Information</h2>";
            echo ("<p>Name : $name</p>");
            echo ("<p>Matric Number : $matric</p>");
            echo ("<p>Phone No : $phone</p>");
            echo ("<p>Email : $email</p>");
            echo ("<p>Class : $class</p>");
            echo ("<p>Address : $address</p>");
            echo ("<p>Gender : $gender</p>");

            if(is_array($subject)){
                for($i = 0; $i < count($subject); $i++){
                    echo("Subject : " . $subject[$i]."<br>");
                }
            }
        ?>
    </body>
</html>

