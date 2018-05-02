<?php

require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Population</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
    h1.heading {
        font-size: 48px;
        font-family: fantasy;
    }

    .headertext {
        text-align: center;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .btn {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
        width: 250px;
    }

</style>

    <div class="container">
        <div class="headertext">
            <h1 class="heading">Population Data Sorting</h1>
            <h2>Time taken to sort a population data by different sorting algorithms</h2>
            <h4>You can find the dummy data <a href="populationdata.xml" target="_blank">here</a></h4>
            <h4>Click to find the maximum of the following...</h4>
                <button class="btn"><a href="male.php" target="_blank">Male</button>

                <button class="btn"><a href="female.php" target="_blank">Female</button>

                <button class="btn"><a href="household.php" target="_blank">Households</button>
        </div>
</body>
</html>