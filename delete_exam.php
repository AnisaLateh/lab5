<?php
require("connect_db.php");
$course_code = $_GET["course_code"];

$sql ="DELETE FROM courses WHERE course_code='$course_code'";
mysqli_query($conn, $sql);
header("location: show_exam_result.php");
exit(0);
?>
