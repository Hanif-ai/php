<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style><?php include('color.css');?></style>
</head>
<body>
    <div class="container">
        <div class="form_container grade">
            <form method="post" action="#">
                <h2>Even Odd Checker</h2>
                <input type="number" name="number" placeholder="Enter Number"></br>
                <button type="submit">Check</button>
            </form>
            <div class="result">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    
                    $number = $_REQUEST["number"];
                    if($number % 2 == 0 ){
                        $result = "<h2>$number is an even number</h2>";
                    }else if($number % 2 == 1){
                        $result = "<h2>$number is an odd number</h2>";
                    }
                    echo $result;
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>