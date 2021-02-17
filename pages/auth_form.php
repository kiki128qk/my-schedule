<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <!-- reset css link -->
        <link rel="stylesheet" href="/my-schedule/css/reset.css" />
        <style>

            .authWrap{width:100%; height:100vh; background:#f8f8f8; display:flex; justify-content:center; align-items:center;}
            form input{width:200px; height:35px; border:1px solid #2a632b; outline:0; padding: 10px;}
            form button{width:100px; height: 35px; border: 1px solid #2a632b; background: #2a632b;color: #fff; text-align: center;display: block; float: right;}

        </style>
</head>
<body>
    <div class="authWrap">
        <form action="/my-schedule/php/auth.php" name="authForm">
            <input type="password" placeholder="인증코드를 입력해 주세요" name="authCode">
            <button type="submit">입장하기</button>
        </form>
    </div>
</body>

</html>