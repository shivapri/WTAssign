<?php
header("Content-type: application/json");
require 'mydata.php';
$req = $_GET['req']?? null;

if($req){
    $jsonData = file_get_contents("text.json");
    $dataList = json_decode($jsonData,true)['menu_items'];
    try{
        $myrestaurantdata = new restaurantdata($dataList);
    }
    catch(Exception $th){
        echo json_encode([$th->getMessage()]);
        return;
    }
}
switch($req){
    case "name_list":
        echo $myrestaurantdata->getMenuName();
    break;
    case "restaurant_data":
        $id = $_GET['id'] ?? null;
        echo $myrestaurantdata->getNameid($id);
    break;
    default:
        echo $jsonData;
        break;
}
    


?>