<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:59 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Admin|Categorie</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- DataTables -->
        <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
		 <link href="assets/lib/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
		 
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		
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
		<?php include "partials/rightside.php" ?>		<!-- ============================================================== -->
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
			    <h2>Data Categorie</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Data</a></li>
					<li class="breadcrumb-item active">Categorie</li>		
				</ol>
			</div>
			 <div class="col-lg-6 align-self-center text-right">
				<!-- <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a> -->
				<button type="button" id="add_categorie" data-toggle="modal" data-target="#categorieModal" class="btn btn-success box-shadow btn-icon btn-rounded">Create New</button>
			</div>
		</div>

        <section class="main-content">
			
			    <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                          Data Export Tables
                        </div>
                       
                        <div class="card-body">
                            <table id="datatable2" class="categorie_data table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Categorie</th>
                                                    <th>Editer</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>

                                        </table>

                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <span>Copyright &copy; 2018 FixedPlus</span>
            </footer>


        </section>
        <div class="modal fade bs-example-modal-sm" id="categorieModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
                    <form action="" method="POST" id="categorie_form" enctype="multipart/form-data" autocomplete="on">

						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel">Informations de l'categorie</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
                            <div class="">
                                    Designation
                                    <input type="text" class="form-control" name="designation" id="designation" value="" placeholder="Entrer la designation du vote">
                               
                            </div>
                            

						</div>
						<div class="modal-footer">
                            <input type="hidden" name="id_categorie" id="id_categorie" />
                            <input type="hidden" name="operation" id="operation" />
                            <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </form>  
					</div>
				</div>
</div>


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

        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>

		<script src="assets/lib/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/lib/datatables/jszip.min.js"></script>
		<script src="assets/lib/datatables/pdfmake.min.js"></script>
		<script src="assets/lib/datatables/vfs_fonts.js"></script>
		<script src="assets/lib/datatables/buttons.html5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
				
				$('#datatable2').DataTable({
					 dom: 'Bfrtip',
					buttons: [
						'copyHtml5',
						'excelHtml5',
						'csvHtml5',
						'pdfHtml5'
					]
				});
				
				 $('#datatable3').DataTable( {
					"scrollY":        "400px",
					"scrollCollapse": true,
					"paging":         false
				} );
            });
			
        </script>
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:29:11 GMT -->
</html>

<script>
	
$(document).ready(function(){
        $('#add_categorie').click(function(){
        $('#CategorieModal').modal('show');
		$('#categorie_form')[0].reset();
		$('.modal-title').text("Info Categorie Blog");
		$('#action').val("Add");
		$('#operation').val("Add");
	});
    var dataTable = $('.categorie_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"CATEGORIE/fetch_categorie.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 2, 3],
				// "targets":[0, 8, 9],
				"orderable":false,
			},
		],
        "bDestroy":true

	});
    $(document).on('submit', '#categorie_form', function(event){
        event.preventDefault();
		var designation = $('#designation').val();
			
		if(designation != '' )
		{
			$.ajax({
				url:"CATEGORIE/insert_categorie.php",
				method:'POST',
				data:new FormData(this),
                contentType:false,
				processData:false,
				success:function(data)
				{
                    
                        alert(data);
                        $('#categorie_form')[0].reset();
                        $('#categorieModal').modal('hide');
					    dataTable.ajax.reload();
                    	
				}
			});
		}
		else
		{
                       
			alert("Both Fields are Required");
            // $('#VoteModal').modal('hide');
		}
	});
    $(document).on('click', '.update', function(){
		var id_categorie = $(this).attr("id");
		$.ajax({
			url:"CATEGORIE/categorie_fetch_single.php",
			method:"POST",
			data:{id_categorie:id_categorie},
			dataType:"json",
			success:function(data)
			{
				$('#categorieModal').modal('show');
				$('#designation').val(data.designation);
				$('.modal-title').text("Editer les infos concernant ce vote");
				$('#id_categorie').val(id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
    $(document).on('click', '.delete', function(){
		var id_categorie = $(this).attr("id");
		if(confirm("Es-tu sure de vouloir supprimer cette categorie?"))
		{
			$.ajax({
				url:"CATEGORIE/categorie_delete.php",
				method:"POST",
				data:{id_categorie:id_categorie},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
});
</script>