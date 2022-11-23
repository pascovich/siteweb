<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:59 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Admin|Offre</title>

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
			    <h2>Data OFFRE</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Data</a></li>
					<li class="breadcrumb-item active">Offre</li>		
				</ol>
			</div>
			 <div class="col-lg-6 align-self-center text-right">
				<!-- <a href="#" class="btn btn-success box-shadow btn-icon btn-rounded"><i class="fa fa-plus"></i> Create New</a> -->
				<button type="button" id="add_offre" data-toggle="modal" data-target="#offreModal" class="btn btn-success box-shadow btn-icon btn-rounded">Create New</button>
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
                            <table id="datatable2" class="offre_data table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date Debut</th>
                                                    <th>Date Fin</th>
                                                    <th>Domaine</th>
                                                    <th>Titre</th>
                                                    <th>Description</th>
                                                    <th>Fichier</th>
                                                    <th>Editer</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>

                                        </table>

                        </div>
                    </div>
                </div>
            </div>

            <?php include "../partials/foot.php" ;?>


        </section>
        <div class="modal fade bs-example-modal-sm" id="offreModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
                    <form action="" method="POST" id="offre_form" enctype="multipart/form-data" autocomplete="on">

						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel">Informations de l'offre</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
                            <div class="row">
                            	<div class="col-md-4">
                            		Domaine
                                    <input type="text" class="form-control" name="domaine" id="domaine" value="" placeholder="">
                            	</div>
                            	<div class="col-md-4">
                            		Titre
                                    <input type="text" class="form-control" name="titre" id="titre" value="" placeholder="">
                            	</div>
                            	<div class="col-md-4">
                            		Description
                                    <input type="text" class="form-control" name="description" id="description" value="" placeholder="">
                            	</div>
                                    
                               
                            </div>
                            <div class="row">
                            	<div class="col-md-4">
                            		Date debut
                                    <input type="date" class="form-control" name="date_debut" id="date_debut" value="" placeholder="">
                            	</div>
                            	<div class="col-md-4">
                            		Date Fin
                                    <input type="date" class="form-control" name="date_fin" id="date_fin" value="" placeholder="">
                            	</div>
                            	<div class="col-md-4">
                            		Upload file
                                    <input type="file" class="form-control" name="fichier" id="fichier" value="" placeholder="">
                            	</div>
                            </div>
                            

						</div>
						<div class="modal-footer">
                            <input type="hidden" name="id_offre" id="id_offre" />
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
        $('#add_offre').click(function(){
        $('#offreModal').modal('show');
		$('#offre_form')[0].reset();
		$('.modal-title').text("Info offre Blog");
		$('#action').val("Add");
		$('#operation').val("Add");
	});
    var dataTable = $('.offre_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"offre/fetch_offre.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 7, 8],
				// "targets":[0, 8, 9],
				"orderable":false,
			},
		],
        "bDestroy":true

	});
    $(document).on('submit', '#offre_form', function(event){
        event.preventDefault();
		var domaine = $('#domaine').val();
		var titre = $('#titre').val();
		var datedebut = $('#date_debut').val();
		var datefin = $('#date_fin').val();
		var description = $('#description').val();
		var extension = $('#fichier').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['pdf','xls','docs',]) == -1)
			{
				alert("Invalid Image File");
				$('#fichier').val('');
				return false;
			}
		}	
			
		if(domaine != '' && titre !='' && datedebut !='' && datefin !='' && description !='' )
		{
			$.ajax({
				url:"offre/insert_offre.php",
				method:'POST',
				data:new FormData(this),
                contentType:false,
				processData:false,
				success:function(data)
				{
                    
                        alert(data);
                        $('#offre_form')[0].reset();
                        $('#offreModal').modal('hide');
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
		var id_offre = $(this).attr("id");
		$.ajax({
			url:"offre/offre_fetch_single.php",
			method:"POST",
			data:{id_offre:id_offre},
			dataType:"json",
			success:function(data)
			{
				$('#offreModal').modal('show');
				$('#titre').val(data.titre);
				$('#description').val(data.description);
				$('#date_debut').val(data.datepub);
				$('#date_fin').val(data.datefin);
				$('#domaine').val(data.domaine);
				$('#titre').val(data.);
				$('.modal-title').text("Editer les infos concernant cet offre");
				$('#id_offre').val(id);
				$('#etudiant_uploaded_image').html(data.fichier);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
    $(document).on('click', '.delete', function(){
		var id_offre = $(this).attr("id");
		if(confirm("Es-tu sure de vouloir supprimer cette offre?"))
		{
			$.ajax({
				url:"offre/offre_delete.php",
				method:"POST",
				data:{id_offre:id_offre},
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