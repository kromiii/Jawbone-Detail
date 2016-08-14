<?php
require 'getTicks.php';
require 'writeCsv.php';

if(isset($_POST['start_date'])&&($_POST['start_date'] != ''))
{
    $start_time = strtotime($_POST['start_date']);
} else {
    $start_time = strtotime('first day of previous month');
}
if(isset($_POST['end_date'])&&($_POST['end_date'] != ''))
{
    $end_time = strtotime($_POST['end_date']);
} else {
    $end_time = time();
}

$columns = ['time', 'depth'];
$ticks = new GetTicks('sleeps', $_POST['access_token'], $start_time, $end_time, $columns);
$csv = new WriteCSV();
echo $csv->write($ticks->getArray());
?>
