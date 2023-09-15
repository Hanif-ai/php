<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style><?php include('color.css');?></style>
</head>
<body>
    <div class="container">
        <div class="form_container grade">
            <form method="post" action="#">
                <h2>Weather Report</h2>
                <input type="number" name="tempareture" placeholder="Enter Tempareture"></br>
                <button type="submit">Check</button>
            </form>
            <div class="result">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $tempareture = $_REQUEST["tempareture"];
                    if($tempareture <= 20){
                        echo "<h2>Oh! it's freezing</h2>";
                    }else if ($tempareture > 20 && $tempareture <= 30){
                        echo "<h2>Wow! it's cool</h2>";
                    }else if ($tempareture > 30 && $tempareture <= 38){
                        echo "<h2>Oh! it's Warm</h2>";
                    }else if ($tempareture > 38 ){
                        echo "<h2>Oh no ! it's Burning</h2>";
                    };
                };
                
                ?>
            </div>
        </div>
    </div>
</body>
</html>