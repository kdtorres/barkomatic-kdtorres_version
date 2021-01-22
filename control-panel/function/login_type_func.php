<?php 
    include 'login_auth_func.php'; 
    // Check existence of get url parameter
    if(trim($_GET['url']) === 'admin') {
        include 'session/session_administrators.php';
        $back_link = '';
        $pldr_uname = 'Admin username:';
        $pldr_psswd = 'Admin password:';
        $login_type = 'Login as <a href="login.php?url=ticket-in-charge" style="color:#007bff;">Ticket-in-charge?</a>';
        $submit_type = 'admin';
    }else if(trim($_GET['url']) === 'ticket-in-charge') {
        include 'session/session_administrators.php';
        $pldr_uname = 'TIC username:';
        $pldr_psswd = 'TIC password:';
        $login_type = 'Login as <a href="login.php?url=admin" style="color:#007bff;">Admin?</a>';
        $submit_type = 'ticket-in-charge';
    }
?>