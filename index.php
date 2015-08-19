<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>基础课论坛</title>
    <link rel="shortcut icon" href="img/vkesign.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/formValidation.min.css">
    <style>body{font-size:16px}h2{text-align:center}table{width:100%}th{text-align:center;width:30%}td{width:70%}</style>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.min.js"></script>
    <script type="text/javascript" src="js/framework/bootstrap.min.js"></script>
    <script type="text/javascript">$(document).ready(function(){$('#signForm').formValidation({framework:'bootstrap',excluded:':disabled',fields:{studentNumber:{validators:{notEmpty:{message:'不能没有学号哦~'},stringLength:{max:8,utf8Bytes:true,trim:true,message:'学号是8位，你怎么输入这么多呀？'}}},studentName:{validators:{notEmpty:{message:'行不更名坐不改姓，填个姓名吧~'},stringLength:{max:20,trim:true,message:'你名字这么长，你家里知道咩？'}}}}})});$('input#studentNumber').on({change:function(){this.value=this.value.replace(/\s/g,"")}});$('input#studentName').on({change:function(){this.value=this.value.replace(/\s/g,"")}});</script>
</head>
<body>
    <?php require("weixin.php"); ?>
    <h2>基础课论坛 <small><?php echo $course_name ?></small></h2>
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
            <td><?php if ($total_capacity-$spare_capacity > 0) { echo $total_capacity-$spare_capacity; } else { echo 0; } ?>人</td>
        </tr>
        <tr>
            <th>内　容</th>
            <td><?php echo $content; ?></td>
        </tr>
    </table>
    <?php
        if ($total_capacity-$spare_capacity > 0) {
            echo '<div align="center"><button style="width: 50%;" id="signnow" class="btn btn-info btn-lg" role="button" data-toggle="modal" data-target="#signUpModal">立即报名</button></div>';
        }
        else {
            echo '<div align="center"><button style="width: 50%;" id="signnow" class="btn btn-info btn-lg" role="button" data-toggle="modal" data-target="#signUpModal" disabled="disabled">报名已满</button></div>';
        }
    ?>
    <p style="color:grey;text-align:center;font-size:12px;position:absolute;bottom:0;width:100%;padding:2px">由 SAE & CNVS 强力驱动</p>
    <!-- 报名申请模态框 -->
    <div class="modal fade" id="signUpModal" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form class="form-horizontal" id="signForm" style="width: 80%;margin:0 auto;" method="post" action="signed.php?openid=<?php echo $openid; ?>">
                    <div class="modal-header">
                        <div class="modal-title" id="signUpModalLabel">
                            <div style="text-align:center;font-size: 22px;font-weight: bold">报名申请</div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="studentNumber">学　号</label>
                            <input type="text" id="studentNumber" name="studentNumber" class="form-control" placeholder="输入你的学号" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="studentName">姓　名</label>
                            <input type="text" id="studentName" name="studentName" class="form-control" placeholder="输入你的姓名" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submit" id="confirm" class="btn btn-info">确认</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
