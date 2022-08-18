<?php
    header('Content-Type: application/json');
 
    if (!isset($_POST['user']) || !isset($_POST['password'])){
        echo json_encode('User or password is not set.');
        exit;
    }
 
    $user = $_POST['user'];
    $password = $_POST['password'];
 
    $data_arr = array(
        'is_authorized'=>false,
        'other_data'=>array(
        'money'=>10000,
        'level'=>99,
        'bonus'=>false,
        'admin'=>true,
    ));
 
    if ($user == 'execoder' && $password == '123456789'){
        $data_arr['is_authorized']=true;
        $fp = fopen("name.txt", "w");
        fwrite($fp, "Hello guys");
        fclose($fp);
    }
 
    if ($data_arr['is_authorized']){
        echo json_encode($data_arr);
    }
?>