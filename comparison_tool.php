<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include("color.css")?>
    </style>
</head>
<body>
    <div class="container">
        <div class="form_container grade">
            <h2>Comparsion Tool</h2>
            <form method="post" action="#">
                <input type="number" name="first_number" placeholder="Enter 1st Number"></br>
                <input type="number" name ="second_number" placeholder="Enter 2nd Number"></br>
                <button type="submit">Check</button>
            </form>
            <div class="resutl">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $first_number = $_REQUEST["first_number"];
                    $second_number = $_REQUEST["second_number"];
                    $result = $first_number > $second_number ? "$first_number is Greater than $second_number": "$second_number Number is Greate than $first_number";
                    echo "<h2>$result</h2>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>