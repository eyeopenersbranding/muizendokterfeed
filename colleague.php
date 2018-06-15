<?php
$Page_id="log";
session_start();
include_once 'dbconnect.php';
require_once 'page_includes/data_config.php';


if (isset($_SESSION['usr_id'])) {
    
} else {
    header('Location: login.php');

}

include 'page_includes/ikwil_redirect_core.php';

	//Selecteer de role om vervolgens het account de categoriseren.
	$sql = "SELECT land FROM md_users WHERE id = '$user_id'";
	$result = mysqli_query($con, $sql);

	while($row = $result->fetch_assoc()) {

	//Het recht van de gebruiker
	$land = $row['land'];
	}



	//======================================================================
	// Engine voor het updaten van de profiel gegevens
	//======================================================================

    //Script activeren wanneer de submit knop wordt geactiveerd
    if(isset($_POST['submit_new_prospect'])&& (!empty($_POST)) && $_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$error = false;
		
		//Alle variable opsommen en ontrekken van het formulier
		$log_name = $_POST['log_name'];
		$log_notes = $_POST['log_notes'];

		
		//Check voor de klantnaam
		if (empty($log_name)) {
		$error = true;
		$log_name_error = ($error_notification['log_name_error']);
		$error_message = ($error_notification['log_name_error']);
		}
		
	
		
		//Als er geen error is ga dan door met het updaten van de gegevens
		if (!$error){
			
			date_default_timezone_set('Europe/Amsterdam');	
			setlocale(LC_ALL, 'nl_NL');
			
			
			$log_date = date('Y-m-d h:i:s a', time());
			
			$log_colleague = "1";
			
			$sql = "INSERT INTO md_log

			(
			log_date,
			log_name, 
			log_notes,
			log_colleague,
			log_user_id,
			log_land
			) 
			VALUES (
			'$log_date',
			'$log_name', 
			'$log_notes',
			'$log_colleague',
			'$user_id',
			'$land'
			)";	

			$result = mysqli_query($con, $sql);

			if ($result === TRUE) 
			{	
				//Succes melding printen
				$log_success = ($success_notification['log_success']);
				$success_message = ($success_notification['log_success']);
				
				//Ververs pagina om de foutmelding te dumpen
				header("Refresh:1; url=log.php");
			} 
			else 
				
			{
				//Wanneer de data niet verwerkt kan worden in de database printen we een fatale fout
    			echo "Er is een ernstige fout opgetreden";
			}
		}
	}
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
			
					<!-- Alle foutmeldingen worden geprint in de alert box -->
					<?php if (isset($error_message)) { ?>
						<div class="alert alert-danger">
						 <button type="button" aria-hidden="true" class="close"><i class="material-icons">close</i></button>
							 <span>
								<?php if (isset($log_name_error)) echo $log_name_error; ?> 
							</span></div>
					<?php } ?>

					<!-- Succes melding wordt geprint in de alert box -->
					<?php if (isset($success_message)) { ?>
						<div class="alert alert-success">
						 <button type="button" aria-hidden="true" class="close"><i class="material-icons">close</i></button>
							 <span>
								<?php if (isset($log_success)) echo $log_success; ?> 
							</span></div>
					<?php } ?>
               
                    

            

                    <div class="col-sm-12 mb-4">
                
						
						      <div class="col-lg-6">
								<div class="card">
								<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								  <div class="card-header"><strong>Collega</strong><small> geholpen</small></div>
								  <div class="card-body card-block">
									<div class="form-group"><label for="company" class=" form-control-label">Naam</label>
									<input type="text" name="log_name" id="company" placeholder="Naam collega" class="form-control">
									</div>
					
									 <div class="row form-group">
										<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Reden</label></div>
										<div class="col-12 col-md-9"><textarea name="log_notes" id="textarea-input" rows="9" placeholder="Typ hier.." class="form-control"></textarea></div>
									  </div>
									  
									
									  <button type="submit" name="submit_new_prospect" class="btn btn-outline-success">Verwerken</button>
				
								  </div>
								</form>
								</div>
							  </div>

					

                    </div>


               

                  




                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->





    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/widgets.js"></script>

</body>
</html>
