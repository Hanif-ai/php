<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include("color.css")?>
    </style>
</head>
<body>
    <div class="container">
        <div class="form_container grade">
            <h2>Simple Calculator</h2>
            <form method="post" action="#">
                <input type="number" name="first_number" placeholder="Enter 1st Number"></br>
                <input type="number" name ="second_number" placeholder="Enter 2nd Number"></br>
                <select name="operation_type" id="operation_type">
                    <option value="addition">Addition</option>
                    <option value="substruction">Substruction</option>
                    <option value="multiplication">Multiplication</option>
                    <option value="division">Division</option>
                    <option value="division_reminder">Division Reminder</option>
                </select>
                <button type="submit">Check</button>
            </form>
            <div class="resutl">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $first_number = $_REQUEST["first_number"];
                    $second_number = $_REQUEST["second_number"];
                    $operation_type = $_REQUEST["operation_type"];

                    switch($operation_type){
                        case "addition":
                            $result = $first_number + $second_number;
                            break;
                        case "substruction":
                            $result = $first_number - $second_number;
                            break;
                        case "multiplication":
                            $result = $first_number * $second_number;
                            break;
                        case "division":
                            $result = $first_number / $second_number;
                            break;
                        case "division_reminder":
                            $result = $first_number %  $second_number;
                    }
                    echo $result;

                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
