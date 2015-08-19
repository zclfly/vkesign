<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>基础课论坛</title>
    <link rel="shortcut icon" href="img/vkesign.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/formValidation.min.css">
    <style>
    body {
        font-size: 16px;
    }
    
    h2 {
        text-align: center;
    }
    
    table {
        width: 100%;
    }
    
    th {
        text-align: center;
        width: 30%;
    }
    
    td {
        width: 70%;
    }
    </style>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.min.js"></script>
    <script type="text/javascript" src="js/framework/bootstrap.min.js"></script>  
</head>
<body>
<?php require("info.php"); ?>
<?php
    echo '<div class="alert alert-info" role="alert" style="text-align:center"><strong>恭喜恭喜，你已经报名成功啦！</strong></div>';
?>
    <h2>基础课论坛
    <small><?php echo $course_name; ?></small>
</h2>
    <table class="table table-striped table-bordered">
        <tr>
            <th>课程名称</th>
            <td><?php echo $course_name; ?></td>
        </tr>
        <tr>
            <th>时　间</th>
            <td><?php echo $lecture_time; ?></td>
        </tr>
        <tr>
            <th>地　点</th>
            <td><?php echo $location; ?></td>
        </tr>
        <tr>
            <th>主讲人</th>
            <td><?php echo $presenter; ?></td>
        </tr>
        <tr>
            <th>课容量</th>
            <td><?php echo $total_capacity; ?>人</td>
        </tr>
        <tr>
            <th>课余量</th>
            <td><?php if ($total_capacity-$spare_capacity>0) { echo $total_capacity-$spare_capacity; } else { echo 0; }?>人</td>
        </tr>
        <tr>
            <th>内　容</th>
            <td><?php echo $content; ?></td>
        </tr>
    </table>
<?php
    echo '<div align="center"><button style="width: 50%;" id="signnow" class="btn btn-info btn-lg" role="button" data-toggle="modal" data-target="#signUpModal" disabled="disabled">已报名</button></div>';
?>
    <p style="color:grey;text-align:center;font-size:12px;position:absolute;bottom:0;width:100%;padding:2px">由 SAE & CNVS 强力驱动</p>
</body>
</html>
