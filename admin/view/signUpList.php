<?php
include_once '../../Controller/call.php';
$helper = new Helper();
if (!$helper->checkAdminLogin()) {
    $helper->redirect('login.php');
}
include_once 'layouts/header.php';
include_once 'layouts/sidebar.php';
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Sign Up</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-table"></i>Information</li>
                    <li><i class="fa fa-th-list"></i>Sign Up</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <?php
                    $usersList = new Account();
                    $allList = $usersList->viewAllUsers();
                    //print_r($allList);
                    ?>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="icon_ul"></i> S.N.</th>
                                <th><i class="icon_profile"></i> Full Name</th>
                                <th><i class="icon_mail_alt"></i> Address</th>
                                <th><i class="icon_pin_alt"></i> Contact</th>
                                <th><i class="icon_mail"></i> Email</th>
                                <th><i class="icon_mobile"></i> Username</th>
                                <th><i class="icon_mobile"></i> User Type</th>
                                <th><i class="icon_calendar"></i> Create Date</th>
                            </tr>
                            <?php $count = 1;
                            foreach ($allList as $key => $value):
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $value['full_name']; ?></td>
                                    <td><?php echo $value['address']; ?></td>
                                    <td><?php echo $value['contact']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td><?php echo $value['user_type']; ?></td>
                                    <td><?php echo $value['date']; ?></td>
                                </tr> 
<?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>
</html>