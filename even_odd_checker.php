<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Even-Odd checker</title>
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="my-3"><h2>Task 4: Even Odd Checker</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-start">

                <form action="" method="post" class="card p-3 bordered bg-light">
                    <label for="num01">Number for checking 'Even' or 'Odd'</label>
                    <input class="form-control my-2" type="number" name="num1" id="num01" placeholder="Enter number " required value="<?php if (isset($_POST["num1"])) {echo $_POST["num1"];};//for remaining old value ?>" >
                    <button class="btn btn-danger my-2" type="submit">See Result</button>
                    <h4 class="text-dark text-center">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $testNum = $_POST["num1"];
                            $reminder= $testNum % 2;

                            if ($reminder==0) {
                                echo "$testNum is an even number";
                            }  else {
                                echo "$testNum is an odd number";
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

