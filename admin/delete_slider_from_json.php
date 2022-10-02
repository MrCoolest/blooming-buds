<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {

$del_id = $_GET['id'];

// echo $del_id;

// read json file
$data = file_get_contents('slider.json');

// // decode json to associative array
$json_arr = json_decode($data, true);



    unset($json_arr[$del_id]);

// // rebase array
$json_arr = array_values($json_arr);

// // encode array to json and save to file
file_put_contents('slider.json', json_encode($json_arr));


header("Location: ./content_upload.php?deleled=success");

}
?>