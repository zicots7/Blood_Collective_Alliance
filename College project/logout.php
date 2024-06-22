<?php
function End_session(){
    session_start();
    include("_DB.php");
    pg_close($db_connect);
    session_unset();
    session_destroy();
    header("location:Login.php");
    exit;
}
End_session();
?>