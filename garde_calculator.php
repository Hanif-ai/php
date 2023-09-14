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
                <h2>Grade Calculator</h2>
                <input type="number" name="bangla" placeholder="Enter Bangla Score"></br>
                <input type="number" name="english" placeholder="Enter English Score"></br>
                <input type="number" name="math" placeholder="Enter Math Score"></br>
                <button type="submit">See Result</button>
            </form>
            <div class="result">
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $bangla = $_REQUEST["bangla"];
                    $english = $_REQUEST["english"];
                    $math = $_REQUEST["math"];

                    $total = $bangla + $english + $math;
                    $avarage = $total / 3;

                    if($avarage >= 33 && $avarage < 40){
                        $result = "D";
                    }else if($avarage >= 40 && $avarage < 50){
                        $result = "C";
                    }else if($avarage >= 50 && $avarage < 60){
                        $result = "B";
                    }else if($avarage >= 60 && $avarage < 70){
                        $result = "A-";
                    }else if($avarage >= 70 && $avarage < 80){
                        $result = "A";
                    }else if($avarage >= 80 && $avarage <=100 ){
                        $result = "A+";

                    };
                    echo "<h2> Your Result is: \" $result \" </h2>
                    <h2> And avarage number is: \"$avarage\"</h2>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>