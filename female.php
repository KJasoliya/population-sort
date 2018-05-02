<!DOCTYPE html>
<html lang="en">
<head>Population</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    h1.heading {
        font-size: 48px;
        font-family: fantasy;
    }

    .table {
        font-size: 18px;
    }

    body {
        /*background-image: url('./background.jpg');*/
    }

    .headertext {
        text-align: center;
        padding-top: 5%;
        padding-bottom: 5%;
    }
</style>

<?php
require_once("functions.php");

if (isset($_POST['submit']) || !isset($_POST['submit'])) {

    $url = 'populationdata.xml';

    $xml = simplexml_load_file($url) or die("feed not loading");
    $i = 0;
    $tosort = array();

    foreach ($xml->item as $item) {
        $tosort[$i] = (int)$item->total_females;
        $i++;
    }

    $time_start = microtime(true);
    $data = mergesort($tosort);
    $time_end = microtime(true);
    $time[0] = $time_end - $time_start;
    $tech[0] = "Merge Sort";
    $result[0] = $data[0];

    $time_start = microtime(true);
    $data = selection_sort($tosort);
    $time_end = microtime(true);
    $time[1] = $time_end - $time_start;
    $tech[1] = "Selection Sort";
    $result[1] = $data[0];

    $time_start = microtime(true);
    $data = insertion_Sort($tosort);
    $time_end = microtime(true);
    $time[2] = $time_end - $time_start;
    $tech[2] = "Insertion Sort";
    $result[2] = $data[0];

    $time_start = microtime(true);
    $data = bubble_Sort($tosort);
    $time_end = microtime(true);
    $time[3] = $time_end - $time_start;
    $tech[3] = "Bubble Sort";
    $result[3] = $data[0];

    $time_start = microtime(true);
    $data = quick_sort($tosort);
    $time_end = microtime(true);
    $time[4] = $time_end - $time_start;
    $tech[4] = "Quick Sort";
    $result[4] = $data[0];
}
?>

<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Rank</th>
            <th>Sorting Technique</th>
            <th>Time(seconds)</th>
            <th>Total Females</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr><td>" . ($i + 1) . "</td><td>" . $tech[$i] . "</td><td>" . number_format($time[$i], 10) . "</td><td>" . $result[$i] . "</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php

unset($time);
unset($tech);
unset($tosort);
unset($right);
unset($left);
unset($array);
?>

</body>
</html>
