<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Temperature Converter</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="my-3"><h2>Task 2: Temperature Converter</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-start">

                <form action="" method="post" class="card p-3 bordered bg-light">
                    <label for="">Temperature</label>
                    <input class="form-control my-2" type="number" name="num1" id="" placeholder="Enter temperature " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num1"];};?>" >
                    <label for="">Select converter</label>
                    <select class="form-select my-2" name="converterOptr" id=""><br>
                        <!-- Php code for remaining old value -->
                        <option value="FarhrenToCel" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["converterOptr"])=='FarhrenToCel') {echo 'selected';};?>>Farhrenheit to Celcius</option>
                        <option value="CelToFarhren" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["converterOptr"])=='CelToFarhren') {echo 'selected';};?>>Celcius to Farhrenheit</option>
                    </select>
                    <button class="btn btn-danger my-2" type="submit">See Result</button>
                    <h4 class="text-dark text-center">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $temp = $_POST["num1"];
                            $converter = $_POST["converterOptr"];
                            if ($converter=="FarhrenToCel") {
                                $result= round((($temp-32)*5/9),2);
                                echo "$temp Farhrenheit (°F) = $result Degree Celcius ( °C ) ";
                                
                            } elseif($converter=="CelToFarhren") {
                                $result= round(((9/5*$temp+32)),2);
                                echo "$temp Degree Celcius (°C) = $result Farhrenheit (°F) ";
                            }
                        }
                    ?>
                    </h4>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>

