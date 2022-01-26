<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
        <div>
            <?php if(isset( $_SESSION['stff_ship_reside'])) { ?>
                <b class="font-black text-primary"><?php echo "". $_SESSION['stff_ship_reside']." (Staff)";?></b>
            <?php } ?>
        </div>
    </div>
    <div class="menu is-menu-main">
        <p class="menu-label mb-0">General</p>
        <ul class="menu-list mb-0">
            <?php if($_GET['page'] == 'dashboard') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=dashboard" class="p-0">
                    <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                    <span class="menu-item-la0bel">Dashboard</span>
                </a>
            </li>
        </ul>
        <p class="menu-label mb-0">Ship Management</p>
        <ul class="menu-list mb-0">
            <?php if($_GET['page'] == 'ports') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=ports" class="dropdown p-1">
                    <span class="icon"><i class="mdi mdi-anchor"></i></span>
                    <span class="menu-item-label">Add Port Location</span>
                </a>
            </li>
            <?php if($_GET['page'] == 'add-schedules') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=add-schedules" class="dropdown p-1">
                    <span class="icon"><i class="mdi mdi-calendar-multiple-check"></i></span>
                    <span class="menu-item-label">Add Schedules</span>
                </a>
            </li>
            <?php if($_GET['page'] == 'accomodation-type') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=accomodation-type" class="dropdown p-1">
                    <span class="icon"><i class="mdi mdi-pencil-box-multiple"></i></span>
                    <span class="menu-item-label">Accomodation Type</span>
                </a>
            </li>
        </ul>
        <p class="menu-label mb-0">Passengers</p>
        <ul class="menu-list mb-0">
            <?php if($_GET['page'] == 'reservation-list') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=reservation-list" class="dropdown p-0">
                    <span class="icon"><i class="mdi mdi-calendar"></i></span>
                    <span class="menu-item-label">Reservation</span>
                </a>
            </li>
        </ul>
        <p class="menu-label mb-0">Schedules</p>
        <ul class="menu-list mb-0">
            <?php if($_GET['page'] == 'ship-depart-details') { ?>
                    <li class="active">
               <?php } else { ?>
                   <li class="">
               <?php } ?>
                <a style="text-decoration:none;" href="index.php?page=ship-depart-details" class="dropdown p-0">
                    <span class="icon"><i class="mdi mdi-calendar-multiple-check"></i></span>
                    <span class="menu-item-label">Ship Schedule</span>
                </a>
            </li>
        </ul>
    </div>
</aside>