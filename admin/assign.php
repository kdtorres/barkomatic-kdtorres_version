<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>VG Shipping Lines</title>

        <!-- Favicon -->
        <link rel="icon" href="../img/core-img/favicon.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="../style.css">
    </head> 
    <body>
        <!-- Preloader Start-->
        <!-- <div id="preloader">
            <div class="loader"></div>
        </div> -->
        <!-- Preloader End-->
        
        <!-- Admin Dashboard Start-->
        <div id="viewport">
            <?php include 'inc/sidebar.php'; ?>
            <div id="content">
                <?php include 'inc/top-nav.php'; ?>
                <div class="_adm_content">
                    <div class="_loader">
                        <div class="_loader_gif text-center">
                            <img src="../img/core-img/loader.gif" alt="Loading..">
                        </div>
                    </div>
                    <!-- <div class="_wlcm">
                        <h1 class="text-center">Welcome, Admin.</h1>
                    </div> -->
                    <!-- <div class="_cus_ticket_dt">
                        <table class="table table-sm table-striped table-warning">
                            <thead>
                                <tr class="bg-info">
                                <th scope="col" class="text-white">CustomerID</th>
                                <th scope="col" class="text-white">Name</th>
                                <th scope="col" class="text-white">Age</th>
                                <th scope="col" class="text-white">Sex</th>
                                <th scope="col" class="text-white">Email</th>
                                <th scope="col" class="text-white">TicketNo.</th>
                                <th scope="col" class="text-white">Destination</th>
                                <th scope="col" class="text-white">Dep. Date</th>
                                <th scope="col" class="text-white">Accommodation</th>
                                <th scope="col" class="text-info">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Jocelyn Claricoats</td>
                                <td>20</td>
                                <td>Female</td>
                                <td>amilverton0@mysql.com</td>
                                <td>973809</td>
                                <td>Cherryville</td>
                                <td>12/23/2019</td>
                                <td>Etiam vel augue.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Ellis Holton</td>
                                <td>37</td>
                                <td>Male</td>
                                <td>jcamlin1@github.io</td>
                                <td>990706</td>
                                <td>Wieniawa</td>
                                <td>6/24/2020</td>
                                <td>Quisque porta volutpat erat.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Terence Fiddler</td>
                                <td>22</td>
                                <td>Male</td>
                                <td>jjeeks2@goodreads.com</td>
                                <td>328482</td>
                                <td>Aoqiao</td>
                                <td>4/10/2020</td>
                                <td>Etiam faucibus cursus urna.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">4</th>
                                <td>Ermin Done</td>
                                <td>33</td>
                                <td>Male</td>
                                <td>lganders3@seesaa.net</td>
                                <td>831357</td>
                                <td>Los Angeles</td>
                                <td>5/3/2020</td>
                                <td>Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">5</th>
                                <td>Rooney Shevell</td>
                                <td>49</td>
                                <td>Male</td>
                                <td>rdossetter4@nps.gov</td>
                                <td>381248</td>
                                <td>San Bernardino</td>
                                <td>9/7/2020</td>
                                <td>Maecenas ut massa quis augue luctus tincidunt.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">6</th>
                                <td>Reggis Sawyer</td>
                                <td>47</td>
                                <td>Male</td>
                                <td>jdickon5@reddit.com</td>
                                <td>776913</td>
                                <td>Malaga</td>
                                <td>6/11/2020</td>
                                <td>Praesent blandit.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">7</th>
                                <td>Jeni Crick</td>
                                <td>32</td>
                                <td>Female</td>
                                <td>ahedaux6@flickr.com</td>
                                <td>985134</td>
                                <td>Oepula</td>
                                <td>3/19/2020</td>
                                <td>Integer tincidunt ante vel ipsum.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">8</th>
                                <td>Lemmy Swyer-Sexey</td>
                                <td>24</td>
                                <td>Male</td>
                                <td>gmilan7@bravesites.com</td>
                                <td>857011</td>
                                <td>Sumurgeneng</td>
                                <td>1/17/2020</td>
                                <td>Morbi ut odio.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">9</th>
                                <td>Pincus Douris</td>
                                <td>29</td>
                                <td>Male</td>
                                <td>spley8@adobe.com</td>
                                <td>516009</td>
                                <td>Quetta</td>
                                <td>9/22/2020</td>
                                <td>Donec semper sapien a libero.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">10</th>
                                <td>Jerrold Alchin</td>
                                <td>25</td>
                                <td>Male</td>
                                <td>bantonijevic9@ameblo.jp</td>
                                <td>373195</td>
                                <td>Aguiar da Beira</td>
                                <td>9/17/2020</td>
                                <td>Duis aliquam convallis nunc.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">11</th>
                                <td>Mirna Faussett</td>
                                <td>46</td>
                                <td>Female</td>
                                <td>rthunderchiefa@japanpost.jp</td>
                                <td>597426</td>
                                <td>Biên Hòa</td>
                                <td>9/28/2020</td>
                                <td>Donec dapibus.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                <th scope="row">12</th>
                                <td>Dyna Housby</td>
                                <td>23</td>
                                <td>Female</td>
                                <td>cbamberyb@liveinternet.ru</td>
                                <td>175118</td>
                                <td>Beishan</td>
                                <td>8/12/2020</td>
                                <td>Nulla tellus.</td>
                                <td><a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    -->
                    <!-- <div class="__ticket">
                        <div class="_add_ticket">
                            <?php //include 'inc/add-ticket.php'; ?>
                        </div>
                    </div> -->
                    <?php include 'inc/assign-role.php'; ?>
                </div>
            </div>
        </div>  
        <!-- Admin Dashboard End -->

         <!-- jQuery 2.2.4 -->
         <script src="../js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="../js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="../js/roberto.bundle.js"></script>
        <!-- Active -->
        <script src="../js/default-assets/active.js"></script>
        <!-- Admin -->
        <script src="../js/default-assets/admin.js"></script>
    </body>
</html>