<?php
$Page_id="log";
session_start();
include_once 'dbconnect.php';


if (isset($_SESSION['usr_id'])) {

} else {
    header('Location: login.php');

}

include 'page_includes/ikwil_redirect_core.php';
?>

<?php include 'page_includes/header.php';?>

<body>


	<?php include 'page_includes/aside.php';?>
        <!-- Left Panel -->




    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

		<?php include 'page_includes/menu.php';?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Logboek invoeren</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Logboek</a></li>
                            <li class="active">invoeren</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

   <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
						  <table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
							  <tr>
								<th>Datum</th>
								<th>Naam</th>
								<th>Telefoon</th>
								<th>Notities / reden</th>
							  </tr>
							</thead>
							<tbody>
							 <?php
						//selecteer alle gebruikers die toegang hebben tot de volledige website
						$sql = "SELECT * FROM md_log WHERE log_user_id = '$user_id'";
						$result = mysqli_query($con, $sql);

						if($result -> num_rows >0){

						while($row = $result->fetch_assoc()) {

							  $log_date = $row['log_date'];
							  $log_name = $row['log_name'];
							  $log_tel = $row['log_tel'];
							  $log_notes = $row['log_notes'];

					echo"
						<tr>
							<td>$log_date</td>
							<td>$log_name</td>
							<td>$log_tel</td>
							<td>$log_notes</td>

						</tr>
				   ";
								}
							}

							else {
							   echo "  <div class='alert alert-warning alert-dismissable' role='alert'>
										  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										  <i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Geen logboek gegevens gevonden
										</div>";
								}?>
							</tbody>
						  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->



    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>

	 <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

</body>
</html>
