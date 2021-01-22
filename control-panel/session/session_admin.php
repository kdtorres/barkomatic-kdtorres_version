<?php
    // Initialize the session
    session_start();
    // Check if the admin is logged in
    if(!isset($_SESSION['logged_admin']) || $_SESSION['logged_admin'] != 'admin'){
        echo '
                <div style="font-family:sans-serif;width:100%;background:#fff;border-top:6px solid #dc3545;border-bottom:2px solid #dc3545;border-left:2px solid #dc3545;border-right:2px solid #dc3545;margin:0 auto;font-weight:normal;font-size:0.875rem"> 
                    <p style="padding:2px 3px;">Warning: Restricted area only allowed user can be able to access this page!</p>
                </div>
            ';
        exit;
    }
?>
