<?php
    // Initialize the session
    session_start();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to login page
    echo '
        <script type="text/javascript">
            setTimeout(function() {
                location.reload();
                window.location.replace("http://localhost/vg-shipping-lines/control-panel/login.php?url=ticket-in-charge");
            }, 700);
        </script>
    ';
    exit;
?>