<?php
require('connection.inc.php');
$name=get_safe_value($con, $_POST['name']);
$email=get_safe_value($con, $_POST['email']);
$mobile=get_safe_value($con, $_POST['mobile']);
$comment=get_safe_value($con, $_POST['message']);
$add_on=date('Y-m-d h:i:s');
mysqli_query($con, "")
?>