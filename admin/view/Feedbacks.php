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
                <h3 class="page-header"><i class="fa fa-table"></i> Feedback</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-table"></i>Information</li>
                    <li><i class="fa fa-th-list"></i>Feedbacks</li>
                </ol>
            </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <?php
                    $feedbackList = new Feedback();
                    $allList = $feedbackList->viewAllFeedback();
                    //print_r($allList);
                    ?>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="icon_ul"></i> S.N.</th>
                                <th><i class="icon_profile"></i> Full Name</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_pin_alt"></i> Message</th>
                                <th><i class="icon_calendar"></i> Date</th>
                            </tr>
                            <?php $count = 1;
                            foreach ($allList as $key => $value):
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $value['feed_name']; ?></td>
                                    <td><?php echo $value['feed_email']; ?></td>
                                    <td><?php echo $value['feed_message']; ?></td>
                                    <td><?php echo $value['feed_date']; ?></td>
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