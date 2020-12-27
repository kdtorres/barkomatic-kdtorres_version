<?php 
    include 'inc/login_auth.php'; 
?>

<form method="post">
    <div class="logo_lgn text-center">
        <img src="./img/core-img/logo.png" alt="VG Shipping Lines">
    </div>
    <div class="form-group">
        <input type='text' id="u_name" name="u_name" class="form-control form-control-lg" placeholder="Username" />
        <small id="un_error" class="text-danger"><?php //echo $uname_err; ?></small>
    </div>
    <div class="form-group">
        <input type='password' id="p_wd" name="p_wd" class="form-control form-control-lg" placeholder="Password" />
        <small id="pw_error" class="text-danger"><?php // echo $psswd_err; ?></small>
    </div>
    <div class="form-group mb-4">
        <?php 
            $login_type = '';
            $back_link = '';
            $submit_type = '';
            // Check existence of url parameter
            if(trim($_GET['url']) === 'admin') {
                include 'inc/session_administrators.php';
                $back_link = '';
                $login_type = 'Login as <a href="login.php?url=ticket-in-charge" style="color:#007bff;">Ticket-in-charge?</a>';
                $submit_type = 'admin';
            }else if(trim($_GET['url']) === 'ticket-in-charge'){
                include 'inc/session_administrators.php';
                $login_type = '';
                $back_link = 'Login as <a href="login.php?url=admin" style="color:#007bff;">Admin?</a>';
                $submit_type = 'ticket-in-charge';
            }
        ?>
        <button type="submit" id="lgn_submit" name="submit" class="form-control form-control-lg btn btn-primary mt-3">Login</button>
    </div>
    <p style="font-size:0.775rem;" class="text-center"><?php echo $login_type; ?><?php echo $back_link; ?></p>
</form>
