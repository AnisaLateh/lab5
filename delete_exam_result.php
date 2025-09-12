<?php

require("connect_db.php");
if (isset($_GET['student_code'])) {
    $student_code = $_GET['student_code'];
    $course_code = $_GET['course_code'];
    

    $stmt = $conn->prepare("DELETE FROM exam_result WHERE student_code = ? AND course_code= ?");
    $stmt->bind_param("ss", $student_code,$course_code);

    if ($stmt->execute()) {
        header("location: exam_result.php");
        exit();
    } else {
        echo "Error deleting exam result.";
    }

    $stmt->close();
} else {
    echo "Student code not provided.";
}
?>
