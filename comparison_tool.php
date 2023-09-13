<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Comparison Tool</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="my-3">
            <h2>Task 6: Comparison Tool </h2>
            <h5>Comparison between two number </h5>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-start">

                <form action="" method="post" class="card p-3 bordered bg-light">
                    <label for="num01">First comparison number</label>
                    <input class="form-control my-2" type="number" name="num1" id="num01" placeholder="Enter first number " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num1"];};?>" >
                    <label for="num02">Second comparison number</label>
                    <input class="form-control my-2" type="number" name="num2" id="num02" placeholder="Enter second number " required value="<?php if (isset($_POST["num2"])) {echo $_POST["num2"];};?>" >
                    <button class="btn btn-danger my-2" type="submit">See Result</button>
                    <h4 class="text-dark text-center">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $testNum01 = $_POST["num1"];
                            $testNum02 = $_POST["num2"];
                            $testNum01> $testNum02 ? $result = "$testNum01 is the greater number": $result = "$testNum02 is the greater number";
                            echo $result;
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

