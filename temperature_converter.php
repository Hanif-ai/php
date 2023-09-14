<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include('color.css');?>
    </style>
</head>
<body>
    <div class="container">
        <div class="form_container">

            <h2>Temperature Converter</h2>

            <form method="post" action="#">
                <input type="number" name="celcius_value" placeholder="Enter Celcius">
                </br>
                <select name="conversion_type" id="conversion_type">
                    <option value="Fahrenheit">Fahrenheit</option>
                    <option value="Kelvin">Kelvin</option>
                </select>
                <button type="submit">Convert</button>
            </form>

            <div class="result">
                <?php
                 if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $celcius = $_REQUEST["celcius_value"];
                    $conversion_type = $_REQUEST["conversion_type"];
                    $result= 0;

                    if($conversion_type == "Fahrenheit"){

                        $result = $celcius * (9/5) + 32;
                        $result = $result." ".$conversion_type;

                    }else if($conversion_type == "Kelvin"){
                        $result = $celcius  +273.15;
                        $result = $result." ".$conversion_type;

                    };
                    echo "<h2>Result = $result</h2>";
                    
                 }

                ?>
            </div>

        </div>

    </div>
</body>
</html>