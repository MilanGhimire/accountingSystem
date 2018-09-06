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
                <h3 class="page-header"><i class="fa fa-table"></i> Appointment</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-table"></i>Information</li>
                    <li><i class="fa fa-th-list"></i>Appointments</li>
                </ol>
            </div>
        </div>


        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <?php
                                    $appointmentlist = new Appointment();
                                    $allList = $appointmentlist->viewAllAppointments();
                                    //print_r($allList); 
                                    ?>
                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                            <tr>
                                                <th><i class="icon_ul"></i> S.N.</th>
                                                <th><i class="icon_profile"></i> Full Name</th>
                                                <th><i class="icon_mail_alt"></i> Email</th>
                                                <th><i class="icon_calendar"></i> Date</th>
                                                <th><i class="icon_mobile"></i> Mobile</th>
                                                <th><i class="icon_calendar"></i> Created Date</th>
                                            </tr>
                                            <?php
                                            $count = 1;
                                            foreach ($allList as $key => $value):
                                                ?>
                                                <tr>
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $value['app_fullName']; ?></td>
                                                    <td><?php echo $value['app_email']; ?></td>
                                                    <td><?php echo $value['app_date']; ?></td>
                                                    <td><?php echo $value['app_phoneNumber']; ?></td>
                                                    <td><?php echo $value['app_date']; ?></td>
                                                </tr> 
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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