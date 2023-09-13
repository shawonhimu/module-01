<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Grade Calculator</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="my-3"><h2>Task 3: Grade Calculator</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-start">

                <form action="" method="post" class="card p-3 bordered bg-light">
                    <label for="num01">First subject number</label>
                    <input class="form-control my-2" type="number" name="num1" id="num01" placeholder="Enter first subject number " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num1"];};?>" >
                    <label for="num02">Second subject number</label>
                    <input class="form-control my-2" type="number" name="num2" id="num02" placeholder="Enter second subject number " required value="<?php if (isset($_POST["num2"])) {echo $_POST["num2"];};?>" >
                    <label for="num03">Third subject number</label>
                    <input class="form-control my-2" type="number" name="num3" id="num03" placeholder="Enter third subject number " required value="<?php if (isset($_POST["num3"])) {echo $_POST["num3"];};?>" >
                    <button class="btn btn-danger my-2" type="submit">See Result</button>
                    <h4 class="text-dark text-center">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $testMark01 = $_POST["num1"];
                            $testMark02 = $_POST["num2"];
                            $testMark03 = $_POST["num3"];
                            $avgMarks = round((($testMark01+$testMark02+$testMark03)/3),2);
                            if (($avgMarks>100 || $avgMarks<0 || $testMark01>100 || $testMark01<0 || $testMark02>100 || $testMark02<0 ||$testMark03>100 && $testMark03<0)) {
                                echo "Invalid input";
                            } elseif ($avgMarks<=100 && $avgMarks>=80) {
                                echo "Average Mark= $avgMarks <br />";
                                echo "Result = A";
                            } elseif ($avgMarks<=80 && $avgMarks>=70) {
                                echo "Average Mark= $avgMarks <br />";
                                echo "Result = B";
                            }  elseif ($avgMarks<=70 && $avgMarks>=60) {
                                echo "Average Mark= $avgMarks <br />";
                                echo "Result = C";
                            }  elseif ($avgMarks<=60 && $avgMarks>=50) {
                                echo "Average Mark= $avgMarks <br />";
                                echo "Result = D";
                            }  else {
                                echo "Average Mark= $avgMarks <br />";
                                echo "Result = F";
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

