<style>
    ._li_flex {display:flex;justify-content:space-between;}
    .dropdown-menu {left:auto;padding-left:12px;position:absolute;width:195px;background-color:#e1ecf4;border:1px solid #39739d !important;}
    .dropdown-menu p {font-size:0.675rem;color:#39739d;}
    #notif_btn {text-align:center;margin-right:45px;}
</style>
<nav class="navbar fixed-top bg-white">
    <div class="container-fluid">
    <a href="#"><img src="./img/logo.png" alt="VG Shipping Lines Company" style="margin-left:23px;margin-top:-23px;width:165px;position:absolute;"></a>
        <ul class="mr-auto">
            <li class="_menu_icon" style="margin-left:-7px;">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </li>
        </ul>
        <div id="notif_btn">
            <?php include 'function/notif_list_func.php'; ?>
            <div class="notif_icon">
                <span>
                    <i style="font-size: 1.085rem;" class="fa fa-bell"></i>
                    <p style="" class='badge text-white'><?php echo $count; ?></p>
                </span>
            </div>
        </div>
        <ul class="_li_flex">
            <li>
                <ul class="dropdown-menu" style="right: 100px;top: 1px;margin-top: 33px;">
                    <li>
                        <a href="inc/url/push_notif_read.php">
                            <?php include 'function/notif_read_func.php'; ?>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo htmlspecialchars($_SESSION["admin_username"]); ?></a>
            </li>
        </ul>
    </div>
</nav>