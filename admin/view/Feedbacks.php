<?php 
include_once '../../Controller/call.php';
$helper = new Helper();
if (!$helper->checkAdminLogin()) {
    $helper->redirect('login.php');
}
include_once 'layouts/header.php';
include_once 'layouts/sidebar.php';?>

<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php.html">Home</a></li>
						<li><i class="fa fa-table"></i>Information</li>
						<li><i class="fa fa-th-list"></i>Feedbacks</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Advanced Table
                            </header>

                            <table class="table table-striped table-advance table-hover">
                             <tbody>
                                <tr>
                                   <th><i class="icon_profile"></i> Full Name</th>
                                   <th><i class="icon_calendar"></i> Date</th>
                                   <th><i class="icon_mail_alt"></i> Email</th>
                                   <th><i class="icon_pin_alt"></i> City</th>
                                   <th><i class="icon_mobile"></i> Mobile</th>
                                   <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                <tr>
                                   <td>Angeline Mcclain</td>
                                   <td>2004-07-06</td>
                                   <td>dale@chief.info</td>
                                   <td>Rosser</td>
                                   <td>176-026-5992</td>
                                   <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>                            
                             </tbody>
                          </table>
                        </section>
                    </div>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
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