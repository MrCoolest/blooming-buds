<?php

echo "Hello WOrld </br>";



$entityBody = file_get_contents('php://input');


// echo $entityBody;
// echo gettype($entityBody);
// echo  str_contains($entityBody, 'home_page');


if(str_contains($entityBody, 'home_page')){
    $data = file_get_contents('slider.json');
    $json_arr = json_decode($data, true);
    echo empty($json_arr);
    if(empty($json_arr)){
        $json_arr[] = json_decode($entityBody, true);
        file_put_contents('slider.json', json_encode($json_arr));
    }
    else if(sizeof($json_arr) <= 5){

        $json_arr[] = json_decode($entityBody, true);
        file_put_contents('slider.json', json_encode($json_arr));
    }
    else{
        echo "Slider Limit is 6 only";
    }
}
else{
    // read file
    $data = file_get_contents('./content.json');

    // decode json to array
    $json_arr = json_decode($data, true);

    if(count($json_arr) < 50){

        // add data
        $json_arr[] = json_decode($entityBody, true);


        file_put_contents('./content.json', json_encode($json_arr));
    }
    else{
        echo 'Now Working';
    }

}
// header("Location: ./content_upload.php");





?>