<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Dashboard</title>

    <!-- awesome Font Link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- link reset css -->
    <link rel="stylesheet" href="/my-schedule/css/reset.css">
    <!-- main css link  -->
    <link rel="stylesheet" href="/my-schedule/css/style.css">
    <!-- main css link  -->
    <link rel="stylesheet" href="/my-schedule/css/media.css">

</head>
<body>
<!-- All contents are wrapped inside wrap class -->
<div class="wrap">
    <!-- header include-->
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/my-schedule/include/header.php"
    ?>
    
    <!-- schedule db  include-->
    <?php
    include $_SERVER['DOCUMENT_ROOT']."/my-schedule/include/db_conn.php";
    $sql="select * from schedule_progress";

    $sch_result=mysqli_query($dbConn, $sql);
    $sch_row=mysqli_fetch_array($sch_result);

    $sch_db=$sch_row['sch_db'];
    $sch_api=$sch_row['sch_api'];
    $sch_ren=$sch_row['sch_ren'];
    $sch_pla=$sch_row['sch_pla'];

    ?>

    <!-- container -->
    <div class="center">
        <form action="/my-schedule/php/update_rate.php" method="get" name="updateRate">
            <div class="inputContainer">
            <!-- start item no.1~5 grid_up include-->
                <?php
                    include $_SERVER["DOCUMENT_ROOT"]."/my-schedule/include/grid_up.php"
                ?>
                <div class="item"></div>
                <!--start item no.6  grid_down-->
                <div class="item btns">
                    <button type="submit">진행률 수정</button>
                    <button type="button" onclick="javascript:location.href='/my-schedule/pages/input_form.php'">진행 사항 작성</button>
                    <button type="button">진행 사항 확인</button>
                </div>
            </div>
         <!-- end of container -->
        </form>
    </div>
    <!-- end of center -->  
    <?php
    include $_SERVER["DOCUMENT_ROOT"]."/my-schedule/include/footer.php"
    ?>
</div>
<!-- end of warp -->


<!-- script files load -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
<script src="/my-schedule/js/piechart.js"></script>
<script src="/my-schedule/js/coustom.js"></script>
<script src="/my-schedule/js/total_avg.js"></script>
</body>
</html>