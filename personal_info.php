<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <title><?php echo "Personal Info"; ?></title>
    <style>
        <?php include "style.css";?>
    </style>
</head>
<body class="text-center">
    <div class="my-5">
        <h2><?php echo "Task 1: Personal Information Page"; ?></h2>
    </div>
    <div class="container">
        <div class="cardArea">
            <div class="row">
                <!-- <div class="col-4">
                    <img src="" alt=""> 
                </div> -->
                <div class="col-md-12">
                    <div class="aboutDetails py-4 text-start">
                        <div class="name bg-dark text-light">
                            <h3 class="ms-3 py-2">Name : <?php $name='Md. Shawanuzzaman'; echo $name; ?></h3>
                        </div>
                        <div class="details mx-3">
                            <h4>Age : 
                                <?php 
                                    $age= 26; 
                                    echo $age; 
                                ?>
                            </h4>
                            <h4>Country : 
                                <?php 
                                    $country='Bangladesh'; 
                                    echo $country; 
                                ?>
                            </h4>
                            <h4>
                                <?php 
                                    $details='B. Sc. in Electrical and Electronic Engineering, <br> Bangabandhu Sheikh Mujibur Rahman Science and Technology University ,Gopalganj-8100 '; 
                                    echo $details; 
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php

// Task 01

// $name= 'Md. Shawanuzzaman (Himu)' ;
// $certificateName= 'Md. Shawanuzzaman' ;
// $nickName= 'Himu' ;
// $age= 26 ;
// $country= 'Bangladesh' ;