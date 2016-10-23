<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>管理员 登录</title>
    <link href="/GitRepository/GitHub/SimpleBlog/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/GitRepository/GitHub/SimpleBlog/Public/Home/css/style.min.css" rel="stylesheet">
    <link href="/GitRepository/GitHub/SimpleBlog/Public/Home/css/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
    <style>
        .btn-success {
            background-color: #1c84c6;
            border-color: #1c84c6;
            color: #FFF
        }
        .btn-success:hover {
            background-color: #1a7bb9;
            border-color: #1a7bb9;
            color: #FFF
        }
        .signinpanel .forget {font-size: 12px;}
    </style>
</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">

        <div class="col-sm-6 col-sm-offset-3">
            <form method="post" action="">
                <h4 class="no-margins" style="font-weight:bold; font-size:24px;">管理员登录</h4>
                <input type="text" class="form-control uname" placeholder="用户名" />
                <input type="password" class="form-control pword m-b" placeholder="密码" />
                <p></p>
                <a href="#" class="forget">忘记密码了？</a>
                <button class="btn btn-success btn-block">登 录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="text-center">
            &copy; 2016 All Rights Reserved. Diamondwang
        </div>
    </div>
</div>
</body>


</html>