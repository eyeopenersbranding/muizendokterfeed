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

                  <form method="post" action="">
                  <input type="text" placeholder="Zoekopdracht" name="query" />
                  <input type="submit" value="Zoeken" name="completedsearch" />
                  </form>
                  <br /><br />


                  <table class="table table-striped table-bordered" style="width:100%">
                    <tr>
                      <th>Datum</th>
                      <th>Naam</th>
                      <th>Telefoonnummer</th>
                      <th>Notitie/reden</th>
                      <th>Behandelaar</th>
                    </tr>


                  <?php
                if(isset($_POST['completedsearch']))
                {
                        $term = $_POST['query'];

$qu = "SELECT * FROM md_log WHERE log_date LIKE '%{$term}%' OR log_name LIKE '%{$term}%' OR log_tel LIKE '%{$term}%' OR log_notes LIKE '%{$term}%' ";
$qu = mysqli_query($con, $qu);//selects the row that contains ANYTHING like the submitted string
                        echo "

                                        ";
                        while($row = mysqli_fetch_array($qu))
                                   {


                                        echo "<tr><td>";
                                        echo $row['log_date'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['log_name'];
                                        echo "</td>";
                                        echo "<td>";
                                        echo $row['log_tel'];
                                       echo "</td><td>";
                                       echo $row['log_notes'];
                                        echo "</td><td>";
                                          echo $row['log_user_id'];
                                                echo "</tr></td>";
                        }
                }
        ?>
        </tr>
  </table>







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
