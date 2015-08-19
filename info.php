<?php

		// 创建数据库连接
        $conn = new mysqli(SAE_MYSQL_HOST_M, SAE_MYSQL_USER, SAE_MYSQL_PASS, SAE_MYSQL_DB, SAE_MYSQL_PORT);
        $conn->query("SET NAMES UTF8");

        // 检查数据库连接
        if ($conn->connect_error) {
            echo '<script language="javascript">';
            echo 'document.location="404.html"';
            echo '</script>';
            die("连接数据库失败: " . $conn->connect_error);
        }
        else {

            $sql = "SELECT lecture_id, course_name, DATE_FORMAT(lecture_time, '%Y年%m月%d日 %H:%i') AS lecture_time, location, presenter, total_capacity, content FROM lecture WHERE lecture_id=3";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($col1, $col2, $col3, $col4, $col5, $col6, $col8);
                // 讲座信息
                if ($stmt->fetch()) {
                    $lecture_id = $col1;
                	$course_name = $col2;
                	$lecture_time = $col3;
                	$location = $col4;
                	$presenter = $col5;
                	$total_capacity = $col6;
                	$content = $col8;
                }
                $stmt->close();
                
                $spareSql = "SELECT COUNT(sign_id), COUNT(wx_openid) FROM signlist WHERE lecture_id=3";
                if ($stmt = $conn->prepare($spareSql)) {
                    $stmt->execute();
                	$stmt->bind_result($sign_id, $count);
                	if ($stmt->fetch()) {
                        $id = $sign_id;
                    	$spare_capacity = $count;
                    }
                }
                $stmt->close();
            }
            $conn->close();
        }
