<?php
include("config/db.php");
include("cmd/exec.php");

$db = new Database();
$str_conn = $db->Connectiondb();
$str_exe = new ExecSQL($str_conn);

$action = $_GET['amd'];

switch($action){
    case "selectall":
    $stmt=$str_exe->read("courses");
  
    $data_arr['rs']=array();
    foreach($stmt as $row){
        $item=array(
            'code'=>$row['code'],
            'name'=>$row['name'],
            'speaker_name'=>$row['speaker_name'],
             'img_path'=>$row['img_path'],
             /*'detail'=>$row['detail'],*/
            /* 'course_outline'=>$row['course_outline'],*/
             'date_open'=>$row['date_open'],
             'date_end'=>$row['date_end'],
             'place'=>$row['place'],
             'seat_num '=>$row['seat_num'],
             'cost'=>$row['cost'],
             'comment'=>$row['comment'],
             'count_view_page'=>$row['count_view_page'],
             'status'=>$row['status'],

                                    

        );                      
        array_push($data_arr['rs'],$item);
    }
    echo json_encode($data_arr);

    break;
}
?>