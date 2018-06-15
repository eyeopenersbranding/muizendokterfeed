<?php
$Page_id="log";
session_start();
include_once 'dbconnect.php';


if (isset($_SESSION['usr_id'])) {
    
} else {
    header('Location: login.php');

}

$prename = $_GET['name'];
$pretel = $_GET['tel'];

include 'page_includes/ikwil_redirect_core.php';

//Selecteer de role om vervolgens het account de categoriseren.
$sql = "SELECT land FROM md_users WHERE id = '$user_id'";
$result = mysqli_query($con, $sql);

while($row = $result->fetch_assoc()) {
	
//Het recht van de gebruiker
$land = $row['land'];
 
} 

//Script activeren wanneer de submit knop wordt geactiveerd
if(isset($_POST['startland'])&& (!empty($_POST)) && $_SERVER['REQUEST_METHOD'] == 'POST'){



	//Alle variable opsommen en ontrekken van het formulier
	$land_option = $_POST['land'];
	
	{
	
	$sql = "UPDATE md_users SET 

	land = '$land_option'

	WHERE id = '$user_id'";	
	$result = mysqli_query($con, $sql);
		
 header('Location: log.php?name=&tel=');

	}
}




//Script activeren wanneer de submit knop wordt geactiveerd
if(isset($_POST['presubmit'])&& (!empty($_POST)) && $_SERVER['REQUEST_METHOD'] == 'POST'){



	//Alle variable opsommen en ontrekken van het formulier
	$prename = $_POST['prename'];
	$pretel = $_POST['pretel'];
	
	{
	
 header("Location: log.php?name=$prename&tel=$pretel");

	}
}











date_default_timezone_set('Europe/Amsterdam');	
       	setlocale(LC_ALL, 'nl_NL');


$date_today = date("Y-m-d");


//======================================================================
// Nederland
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_green_nl = count($count);
			}
		} else{

	$total_green_nl = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_nl  = count($count);
			}
		} else{

	$total_red_nl = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancelled_nl  = count($count);
			}
		} else{

	$total_cancelled_nl = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_continuation_nl  = count($count);
			}
		} else{

	$total_continuation_nl = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_nl  = count($count);
			}
		} else{

	$total_question_nl = "0";
	}

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'NL') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_colleague_nl  = count($count);
			}
		} else{

	$total_colleague_nl = "0";
	}


$ratio_total_nl = $total_green_nl + $total_red_nl;
$ratio_calculated_nl = $total_green_nl / $ratio_total_nl;
$ratio_final_nl = $ratio_calculated_nl * 100;









//======================================================================
// Belgium
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_green_be = count($count);
			}
		} else{

	$total_green_be = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_be  = count($count);
			}
		} else{

	$total_red_be = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancelled_be  = count($count);
			}
		} else{

	$total_cancelled_be = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_continuation_be  = count($count);
			}
		} else{

	$total_continuation_be = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_be  = count($count);
			}
		} else{

	$total_question_be = "0";
	}

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'BE') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_colleague_be  = count($count);
			}
		} else{

	$total_colleague_be = "0";
	}



$ratio_total_be = $total_green_be + $total_red_be;
$ratio_calculated_be = $total_green_be / $ratio_total_be;
$ratio_final_be = $ratio_calculated_be * 100;
















//======================================================================
// Houworm
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_green_ho = count($count);
			}
		} else{

	$total_green_ho = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_ho  = count($count);
			}
		} else{

	$total_red_ho = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancelled_ho  = count($count);
			}
		} else{

	$total_cancelled_ho = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_continuation_ho  = count($count);
			}
		} else{

	$total_continuation_ho = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_ho  = count($count);
			}
		} else{

	$total_question_ho = "0";
	}

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'Houtworm') AND (log_user_id = '$user_id')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_colleague_ho  = count($count);
			}
		} else{

	$total_colleague_ho = "0";
	}



$ratio_total_ho = $total_green_ho + $total_red_ho;
$ratio_calculated_ho = $total_green_ho / $ratio_total_ho;
$ratio_final_ho = $ratio_calculated_ho * 100;



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
				
				<div class="col-sm-3">
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="card-header"><strong><h2>Divisie: <?php echo "$land"; ?></h2></strong></div>
					  <div class="card-body card-block">
						  
						   <div class="row form-group">
                            <div class="col-12 col-md-9">
                              <select name="land" id="select" class="form-control">
                                <option value="NL">NL</option>
                                <option value="BE">BE</option>
								<option value="Houtworm">Houtworm</option>
                              </select>
                            </div>
                          </div>

						  <button type="submit" name="startland" class="btn btn-outline-success">Land wijzigen</button>

					  </div>
					</form>  
                </div>
				<div class="col-sm-8">
				<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								  <div class="card-header"><strong>Telefoonnummer en klantnaam</strong><small></small></div>
								  <div class="card-body card-block">
									<div class="form-group"><label for="company" class=" form-control-label">Telefoonnummer</label>
									<input type="text" name="pretel" id="company" value="<?php echo "$pretel" ?>" class="form-control">
									</div>
									<div class="form-group"><label for="vat" class=" form-control-label">Klantnaam</label>
									<input type="text" name="prename" id="vat" value="<?php echo "$prename" ?>" class="form-control">
									</div>
						
									 
									  <button type="submit" name="presubmit" class="btn btn-outline-success">Alvast invoeren</button>
				
								  </div>
								</form>       
				</div>
			

            

                    <div class="col-sm-12 mb-4">
                        <div class="card-group">
							  <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-5">
                                    <div class="h1 text-right text-light mb-4">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
									<a href="new-prospect.php?name=<?php echo $prename ?>&tel=<?php echo $pretel ?>"><button type="button" class="btn btn-primary btn-lg">Nieuwe prospect</button></a><br /><br />
                                    <small class="text-uppercase font-weight-bold text-light">Nieuwe prospect</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
							  </div>
                            <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                                <div class="card-body">
                                    <div class="h1 text-muted text-right mb-4">
                                        <i class="fa fa-times text-light"></i>
                                    </div>
									<a href="cancelled.php?name=<?php echo $prename ?>&tel=<?php echo $pretel ?>"><button type="button" class="btn btn-primary btn-lg">Geannuleerd</button></a><br /><br />
                                    <small class="text-uppercase font-weight-bold text-light">Geannuleerd</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                       
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-3">
                                    <div class="h1 text-right mb-4">
                                        <i class="fa fa-external-link-square text-light"></i>
                                    </div>
  									<a href="continuation.php?name=<?php echo $prename ?>&tel=<?php echo $pretel ?>"><button type="button" class="btn btn-primary btn-lg">Vervolg</button></a><br /><br />
                                    <small class="text-light text-uppercase font-weight-bold">Vervolg</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                          
                          
                            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-1">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-info"></i>
                                    </div>
           							<a href="question.php?name=<?php echo $prename ?>&tel=<?php echo $pretel ?>"><button type="button" class="btn btn-primary btn-lg">Klantvraag</button></a><br /><br />
                                    <small class="text-light text-uppercase font-weight-bold">klantvraag</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
							 <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                                <div class="card-body bg-flat-color-1">
                                    <div class="h1 text-light text-right mb-4">
                                        <i class="fa fa-info"></i>
                                    </div>
           							<a href="colleague.php?name=<?php echo $prename ?>&tel=<?php echo $pretel ?>"><button type="button" class="btn btn-primary btn-lg">Spoedlijn /collega</button></a><br /><br />
                                    <small class="text-light text-uppercase font-weight-bold">Spoedlijn / collega</small>
                                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
				
				
				<?php if ($land == "NL") { ?>
				
						<br />
						<br />
						 <div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Mijn ratio Nederland: <?php echo "$ratio_final_nl"; ?> %</strong>
								</div>
								<div class="card-body">
									<table class="table table-bordered">

									  <tbody>
										<tr>
										  <th scope="row">Ingeplande leads</th>
										  <td><?php echo "$total_green_nl"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Niet ingeplande leads</th>
										  <td><?php echo "$total_red_nl"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Geannuleerd</th>
										  <td><?php echo "$total_cancelled_nl"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Vervolgafspraak ingepland</th>
										  <td><?php echo "$total_continuation_nl"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Klantvragen</th>
										  <td><?php echo "$total_question_nl"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Collega's / spoedlijnen</th>
										  <td><?php echo "$total_colleague_nl"; ?></td>
										</tr>
									  </tbody>
									</table>
								</div>
							</div>
						</div>

				
					<?php } if ($land == "BE") { ?>
				
				
						<br />
						<br />
						 <div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Mijn ratio Belgium: <?php echo "$ratio_final_be"; ?> %</strong>
								</div>
								<div class="card-body">
									<table class="table table-bordered">

									  <tbody>
										<tr>
										  <th scope="row">Ingeplande leads</th>
										  <td><?php echo "$total_green_be"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Niet ingeplande leads</th>
										  <td><?php echo "$total_red_be"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Geannuleerd</th>
										  <td><?php echo "$total_cancelled_be"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Vervolgafspraak ingepland</th>
										  <td><?php echo "$total_continuation_be"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Klantvragen</th>
										  <td><?php echo "$total_question_be"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Collega's / spoedlijnen</th>
										  <td><?php echo "$total_colleague_be"; ?></td>
										</tr>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
				
				
				<?php } if ($land == "Houtworm") { ?>
				
				
						<br />
						<br />
						 <div class="col-lg-6">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Mijn ratio Houtworm: <?php echo "$ratio_final_ho"; ?> %</strong>
								</div>
								<div class="card-body">
									<table class="table table-bordered">

									  <tbody>
										<tr>
										  <th scope="row">Ingeplande leads</th>
										  <td><?php echo "$total_green_ho"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Niet ingeplande leads</th>
										  <td><?php echo "$total_red_ho"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Geannuleerd</th>
										  <td><?php echo "$total_cancelled_ho"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Vervolgafspraak ingepland</th>
										  <td><?php echo "$total_continuation_ho"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Klantvragen</th>
										  <td><?php echo "$total_question_ho"; ?></td>
										</tr>
										<tr>
										  <th scope="row">Collega's / spoedlijnen</th>
										  <td><?php echo "$total_colleague_ho"; ?></td>
										</tr>
									  </tbody>
									</table>
								</div>
							</div>
						</div>
				
				
			

					<?php }?>
				
			

              

                  




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
