<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>clinic</title>
</head>
<body>
    <h1>Body Mass Index</h1>


    <div id="global">
        <div id="text">
            <p><strong>An easy tool for body mass index mesure about: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </strong></p>
        </div>

        <div id="form">
            <form action="index.php" method="get">
                <br><h3>Name</h3>
                <input type="text" name="name" placeholder="Example: Adriel" required>

                <br><h3>Gender</h3>
                <input type="text" name="gender" placeholder="Example: M or F" required>

                <br><h3>Height</h3>
                <input type="text" name="height" placeholder="Example: 1.55 m" required>

                <br><h3>Weight</h3>
                <input type="text" name="weight" placeholder="Example: 55 kg" required>

                <br><br><button type="submit">calculate</button>
                <br><br>
            </form>

            <?php

            function BMI(){
                @$name = $_GET['name'];
                @$gender = $_GET['gender'];
                @$height = $_GET['height'];
                @$weight = $_GET['weight'];

                @$multiple = ($height * $height);
                @$divide = ($weight / $multiple);

                print_r("<h3>Hello $name / $gender your BMI is = $divide");

                if($divide < 18.5){
                    print_r("<h3 style='color:red'>!DANGER! MAGREZA</h3>");
                }elseif($divide < 24.9){
                    print_r("<h3 style='color:green'>!ATTENTION! NORMAL</h3>");
                }elseif($divide < 29.9){
                    print_r("<h3 style='color:yellow'>!CAUTION! SOBREPESO</h3>");
                }elseif($divide < 34.9){
                    print_r("<h3 style='color:red'>!DANGER! OBESO LVL EASY</h3>");
                }elseif($divide < 39.9){
                    print_r("<h3 style='color:red'>!!DANGER!! OBESO LVL MEDIUM</h3>");
                }elseif($divide > 40){
                    print_r("<h3 style='color:red'>!!!DANGER!!! OBESO LVL HARD</h3>");
                }

            }
            $result = BMI();
            return $result;
            ?>

        </div>

    </div>
    
</body>
</html>