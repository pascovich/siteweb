
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:26:21 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Admin|Dashboad</title>
		
        <?php include("partials/style.php"); ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<?php include "partials/topbar.php" ?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<?php include "partials/rightside.php" ?>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
		<?php include "partials/navigation.php" ?>
        
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->

			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				<!-- <div class="col-lg-6 align-self-center text-right">
					<a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a>
				</div> -->
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Message</h2>
								<p class="text-muted">Nombre message</p>
								<span class="float-right text-primary widget-r-m">37859</span>
							</div>
							<div class="progress margin-b-10  progress-mini">
								<div style="width:50%;" class="progress-bar bg-primary"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">50%</p>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Image</h2>
								<p class="text-muted">Total Image</p>
								<span class="float-right text-indigo widget-r-m">1758</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:45%;" class="progress-bar bg-indigo"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">450%</p>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Offres</h2>
								<p class="text-muted">Total Offres</p>
								<span class="float-right text-success widget-r-m">1385</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:85%;" class="progress-bar bg-success"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">85%</p>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">NewsLetter</h2>
								<p class="text-muted">Total NewsLetter</p>
								<span class="float-right text-warning widget-r-m">98421</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:38%;" class="progress-bar bg-warning"></div>
							</div>
							<p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">38%</p>
                        </div>
                    </div>
                </div>
            </div>
			
		
            <footer class="footer">
                <span>Copyright &copy; 2022 FixedPlus</span>
            </footer>

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

		
        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
		
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:14 GMT -->
</html>