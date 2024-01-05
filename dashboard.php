<?php
session_start();
if(isset($_SESSION['s_username'])){
    echo "welcome";
     $_SESSION['s_username'];
}else{
    header("Location:form.php");
}
?>
<a href="Logout.php">Logout</a>