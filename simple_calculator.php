<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Simple Calculator</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="my-3"><h2>Task 7: Simple calculator</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form action="" method="post" class="card p-3 bordered bg-dark">
                    <input class="form-control my-2" type="number" name="num1" id="" placeholder="Enter first number " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num1"];};?>" >
                    <input class="form-control my-2" type="number" name="num2" id="" placeholder="Enter second number " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num2"];};?>" >
                    <!-- <input type="text" name="num3" id="" value="" readonly > -->
                    <select class="form-select my-2" name="operator" id=""><br>
                        <option value="sum" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["operator"])=='sum') {echo 'selected';};?>>Add</option>
                        <option value="sub" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["operator"])=='sub') {echo 'selected';};?>>Substract</option>
                        <option value="mul" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["operator"])=='mul') {echo 'selected';};?>>Multiplication</option>
                        <option value="div" <?php if ($_SERVER["REQUEST_METHOD"]=='POST' && ($_POST["operator"])=='div') {echo 'selected';};?>>Division</option>
                    </select>
                    <button class="btn btn-danger my-2" type="submit">Result</button>
                    <h4 class="text-white">
                    <?php
                        function calculation($calculate, $x, $y) {
                            $result = 0;
                            if ($calculate=='sum') {
                                $result = $x + $y;
                            }elseif ($calculate=='sub') {
                                $result = $x - $y;
                            }
                            elseif($calculate== 'mul'){
                                $result = $x * $y;
                            }
                            elseif ($calculate=='div') {
                                if ($y!=0) {
                                    $result = round(($x/$y),2);
                                }elseif($y==0){
                                    $result = "Undefined";
                                    return $result;
                                }
                            }
                            else{
                                $result = "No input";
                            }
                            return $result;
                        }
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $x = $_POST["num1"];
                            $y = $_POST["num2"];
                            $calculate = $_POST["operator"];

                            echo "Result = " . calculation($calculate, $x, $y);
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

