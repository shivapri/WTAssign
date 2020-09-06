<?php
class restaurantdata{
    private $restaurantdatalist;
function __construct(array $restaurantdata){
    if(sizeof($restaurantdata)>0){
    $this->restaurantdatalist = $restaurantdata;
    }
    else{
        throw new Exception("No such data exists");
    }
}
public function getMenuName(){
    $namelist = [];
    foreach ($this->restaurantdatalist as $menuname) {
        $namelist[]=array(
            "id"=>$menuname['id'],
            "name"=>$menuname['name']
        );
    }
    return json_encode($namelist);
}
public function getNameid($name){
    $response = ["In-Valid Item name"];
    if($name){
        foreach ($this->restaurantdata as $data) {
            if($name == $data['name']){
                $response = $data;
            break;
            }
        }
    }
    return json_encode($response);
}

}

?>