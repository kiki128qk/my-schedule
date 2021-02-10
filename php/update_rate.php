<!-- 사이트에서 값을 수정하면 circle-graph easyPieChart 의 data-percent을 값을 변경하기 위해 만든 파일 -->

<?php

$sch_num =1;
$sch_db=$_REQUEST['sch_db_rate'];
$sch_api=$_REQUEST['sch_api_rate'];
$sch_ren=$_REQUEST['sch_ren_rate'];
$sch_pla=$_REQUEST['sch_pla_rate'];
// $_REQUEST  get, post 둘다 받을 수 있음

// echo $sch_db,$sch_api,$sch_ren,$sch_pla;

include $_SERVER['DOCUMENT_ROOT']."/my-schedule/include/db_conn.php";
// 하기 sql = 사이트에서 수정한 값을 데이터 베이스에 업데이트 한다는 명령문
$sql="update schedule_progress set 
sch_db=$sch_db,
sch_api=$sch_api,
sch_ren=$sch_ren,
sch_pla=$sch_pla 
where sch_num=$sch_num";

mysqli_query($dbConn, $sql);

$sql="select * from schedule_progress where sch_num=$sch_num";
$sch_result=mysqli_query($dbConn, $sql);


$arr=array();
while($sch_row=mysqli_fetch_array($sch_result)){
    array_push($arr, array(
        'db_rate' => $sch_row['sch_db'],
        'api_rate' => $sch_row['sch_api'],
        'ren_rate' => $sch_row['sch_ren'],
        'pla_rate' => $sch_row['sch_pla']
    ));
}
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/my-schedule/data/sch_rate.json', json_encode($arr,JSON_PRETTY_PRINT));

echo "
    <script>
    alert('수정이 완료 되었습니다.');
    location.href='/my-schedule/index.php';
    </script>
"

?>
