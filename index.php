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

    body {
        background-color:#9E9E9E;
    }

    .btn {
        background-color: #37474F; /* Green */
        border: none;
        color: black;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
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
                <button class="btn" onclick=window.location.href='male.php'>Male</button>

                <button class="btn"onclick=window.location.href='female.php'>Female</button>

                <button class="btn" onclick=window.location.href='household.php'>Households</button>
        </div>
</body>
</html>