<?php
    
    if(trim($_GET['url']) === 'admin') {
        // Initialize the session
        session_start();
        // Check if the admin is already logged in
        if(isset($_SESSION['logged_admin']) == 'admin' && $_SESSION['logged_admin'] == 'admin') {
            header('location: admin/welcome.php');
        }
    }
    
    if(trim($_GET['url']) === 'ticket-in-charge') {
        // Initialize the session
        session_start();    
        // Check if the ticket-in-charge is already logged in
        if(isset($_SESSION['logged_tic']) == 'ticket-in-charge' && $_SESSION['logged_tic'] == 'ticket-in-charge') {
            header('location: ticket-in-charge/welcome.php');
        }
    }
?>