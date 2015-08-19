<?php

    $studentNumber = $_POST['studentNumber'];
    $studentName = $_POST['studentName'];
    $openid = $_GET['openid'];

     // 创建数据库连接
    $conn = new mysqli(SAE_MYSQL_HOST_M, SAE_MYSQL_USER, SAE_MYSQL_PASS, SAE_MYSQL_DB, SAE_MYSQL_PORT);
    $conn->query("SET NAMES UTF8");

    if ($conn->connect_error) {
        echo '<script language="javascript">';
        echo 'document.location="404.html"';
        echo '</script>';
        die("连接数据库失败: " . $conn->connect_error);
    }
    else {
        $sql = 'INSERT INTO signlist(lecture_id,student_name,student_number,wx_openid) VALUES (3,?,?,?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $studentName, $studentNumber, $openid);
        $stmt->execute();
        $stmt->close();
    }
    $conn->close();

	echo '<script language="javascript">';
    echo 'document.location="success.php"';
    echo '</script>';
	exit;
