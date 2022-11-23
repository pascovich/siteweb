<?php

include('../../config/connect.php');
include('../../config/function.php');

if(isset($_POST['submit'])){
	$succes_msg="";$valid=1;
	$error_msg="";
	if(empty($_POST['titre'])){
		$valid=0;
		$error_msg .="le titre est vide";
	}
	if(empty($_POST['texte'])){
		$valid=0;
		$error_msg .="le texte est vide";
	}
	if(empty($_POST['ref_categorie'])){
		$valid=0;
		$error_msg .="le categorie est vide";
	}
	if(empty($_POST['ref_categorie'])){
		$valid=0;
		$error_msg .="le categorie est vide";
	}
	if($_FILES["image"]["name"] = ''){
			$valid=0;
			$error_msg .="selectionne image";
		}
	if($valid==1){
		
		$image = '';
		if($_FILES["image"]["name"] != '')
		{
			$image = upload_image();
		}
		
			$req = $db->prepare("INSERT INTO tblog(titre,texte,ref_categorie,ref_user,image) values(:titre,:texte,:ref_categorie,:ref_user,:image)");
			$req->execute([
				'titre' => $_POST['titre'],
				'texte' => $_POST['texte'],
				'ref_categorie' => $_POST['ref_categorie'],
				'ref_user' => 0,
				'image' => $image
			]);

			$success_msg="insert avec success"

		
		
		
	}
}else{
	
}


?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:28:59 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Admin|Blog</title>

        <!-- Common Plugins -->
        <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
        <!-- DataTables -->
        <link href="../assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
		 <link href="../assets/lib/datatables/buttons.dataTables.css" rel="stylesheet" type="text/css">
		 
        <!-- Custom Css-->
        <link href="../assets/scss/style.css" rel="stylesheet">
		
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
			<?php include "../partials/topbar.php" ?>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<?php include "../partials/rightside.php" ?>		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
      <?php include "../partials/navigation.php" ?>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>Data BLOG</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Data</a></li>
					<li class="breadcrumb-item active">Add-blog</li>		
				</ol>
			</div>
			
		</div>

        <section class="main-content">
			
			    <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-default">
                         	PUBLICATION DU BLOG
                        </div>
                       
                        <div class="card-body">
                        	<form method="post" action="AddBlog.php" enctype="multipart/form-data">
                            <div class="row">
                            	<div class="col-md-4">
                            		<label for="titre">Titre</label>
                            		<input type="text" class="form-control" name="titre">
                            	</div>
                            	<div class="col-md-4">
                            		<label for="titre">Categorie</label>
                            		<select class="form-control" name="ref_categorie">
                            			<option value=""></option>
                            		</select>
                            	</div>
                            	<div class="col-md-4">
                            		<label for="titre">Titre</label>
                            		<input type="file" class="form-control" name="image">
                            	</div>

                            </div>
                            <div class="row">
                            	<div class="col-sm-12">
                    				<div class="card">
				                        <div class="card-header card-default">
				                            Entrer le texte
				                        </div>
				                        <div class="card-body">
                            				<textarea name="texte" class="form-control"></textarea>

                        				</div>
                    				</div>
               					 </div>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit">
                            </form>
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
        <script src="../assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="../assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/lib/pace/pace.min.js"></script>
		<script src="../assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="../assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="../assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="../assets/js/custom.js"></script>

        <!-- Datatables-->
        <script src="../assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/lib/datatables/dataTables.responsive.min.js"></script>

		<script src="../assets/lib/datatables/dataTables.buttons.min.js"></script>
		<script src="../assets/lib/datatables/jszip.min.js"></script>
		<script src="../assets/lib/datatables/pdfmake.min.js"></script>
		<script src="../assets/lib/datatables/vfs_fonts.js"></script>
		<script src="../assets/lib/datatables/buttons.html5.min.js"></script>
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
        $('#add_blog').click(function(){
        $('#blogModal').modal('show');
		$('#blog_form')[0].reset();
		$('.modal-title').text("Info blog Blog");
		$('#action').val("Add");
		$('#operation').val("Add");
	});
    var dataTable = $('.blog_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"blog/fetch_blog.php",
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
    $(document).on('submit', '#blog_form', function(event){
        event.preventDefault();
		var designation = $('#designation').val();
			
		if(designation != '' )
		{
			$.ajax({
				url:"blog/insert_blog.php",
				method:'POST',
				data:new FormData(this),
                contentType:false,
				processData:false,
				success:function(data)
				{
                    
                        alert(data);
                        $('#blog_form')[0].reset();
                        $('#blogModal').modal('hide');
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
		var id_blog = $(this).attr("id");
		$.ajax({
			url:"blog/blog_fetch_single.php",
			method:"POST",
			data:{id_blog:id_blog},
			dataType:"json",
			success:function(data)
			{
				$('#blogModal').modal('show');
				$('#designation').val(data.designation);
				$('.modal-title').text("Editer les infos concernant ce vote");
				$('#id_blog').val(id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
    $(document).on('click', '.delete', function(){
		var id_blog = $(this).attr("id");
		if(confirm("Es-tu sure de vouloir supprimer cette blog?"))
		{
			$.ajax({
				url:"blog/blog_delete.php",
				method:"POST",
				data:{id_blog:id_blog},
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