<?php
$Page_id="Admin";
session_start();
include_once 'dbconnect.php';

$startdate = "0";
$enddate = "0";


if (isset($_SESSION['usr_id'])) {
    
} else {
    header('Location: login.php');

}

include 'page_includes/ikwil_redirect_core.php';

  //Script activeren wanneer de submit knop wordt geactiveerd
    if(isset($_POST['dates'])&& (!empty($_POST)) && $_SERVER['REQUEST_METHOD'] == 'POST'){
		
	
		
		//Alle variable opsommen en ontrekken van het formulier
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];

	}

//======================================================================
// Aantal verkochte MEDIUM producten
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_greenred = 'Groen') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_green = count($count);
			}
		} else{

	$total_green = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_greenred = 'Rood') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red  = count($count);
			}
		} else{

	$total_red = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_cancelled = '1') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancelled  = count($count);
			}
		} else{

	$total_cancelled = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_continuation = '1') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_continuation  = count($count);
			}
		} else{

	$total_continuation = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_question = '1') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question  = count($count);
			}
		} else{

	$total_question = "0";
	}

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_colleague = '1') AND (log_land = 'Houtworm')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_colleague  = count($count);
			}
		} else{

	$total_colleague = "0";
	}


$ratio_total_nl = $total_green + $total_red;
$ratio_calculated_nl = $total_green / $ratio_total_nl;
$ratio_final_nl = $ratio_calculated_nl * 100;





//======================================================================
// Fiches
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Muizen') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_muizen = count($count);
			}
		} else{

	$total_muizen = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND log_greenred IN ('Groen', 'Rood') AND (log_pest = 'Motten')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_motten  = count($count);
			}
		} else{

	$total_motten = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Mieren') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_mieren  = count($count);
			}
		} else{

	$total_mieren = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Ratten') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_ratten = count($count);
			}
		} else{

	$total_ratten = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Vliegen') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_vliegen  = count($count);
			}
		} else{

	$total_vliegen = "0";
	}

	
$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Wespen') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_wespen  = count($count);
			}
		} else{

	$total_wespen = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Spinnen') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_spinnen  = count($count);
			}
		} else{

	$total_spinnen = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Vlooien') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_vlooien  = count($count);
			}
		} else{

	$total_vlooien = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Bedwantsen') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_bedwantsen  = count($count);
			}
		} else{

	$total_bedwantsen = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Zilvervisjes') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_zilvervisjes  = count($count);
			}
		} else{

	$total_zilvervisjes = "0";
}
	
$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Tapijtkevers') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_tapijtkevers  = count($count);
			}
		} else{

	$total_tapijtkevers = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Vogels') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_vogels  = count($count);
			}
		} else{

	$total_vogels = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'Houtworm') AND (log_pest = 'Kakkerlakken') AND log_greenred IN ('Groen', 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_kakkerlakken  = count($count);
			}
		} else{

	$total_kakkerlakken = "0";

}

$total_calls = $total_green + $total_red + $total_cancelled + $total_continuation + $total_question + $total_colleague;
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
                        <h1>Resultaten Houtworm</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Resultaten</a></li>
                            <li class="active">Belgium</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
               
             						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								  <div class="card-header"><strong>Bereik selecteren</strong><small></small></div>
								  <div class="card-body card-block">
									<div class="form-group"><label for="company" class=" form-control-label">Startdatum</label>
									<input type="text" name="startdate" id="from" placeholder="Startdatum" class="form-control">
									</div>
									<div class="form-group"><label for="vat" class=" form-control-label">Einddatum</label>
									<input type="text" name="enddate" id="to" placeholder="Einddatum" class="form-control">
									</div>
						
									 
									  <button type="submit" name="dates" class="btn btn-outline-success">Verwerken</button>
				
								  </div>
								</form>  
         
		
			
		
				<br />
				<br />
				<h3>Start en einddatum:<br /> <?php echo "$startdate"; ?> | <?php echo "$enddate"; ?></h3>
				<br />
				<br />
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Houtworm | Ratio: <?php echo "$ratio_final_nl"; ?> %</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                      
                               <tbody>
								<tr>
									<th scope="row"><strong>Inkomende lijnen per categorie</strong></th>
									<td><strong>Aantallen</strong></td>
									<td><strong>%</strong></td>
                                </tr>
                                <tr>
                                  <th scope="row">Ingeplande leads</th>
                                  <td><?php echo "$total_green"; ?></td>
									<td><?php $percentage_green = $total_green / $total_calls*100; echo(round($percentage_green)); ?> %</td>
									
                                </tr>
								<tr>
                                  <th scope="row">Niet ingeplande leads</th>
                                  <td><?php echo "$total_red"; ?></td>
									<td><?php $percentage_red = $total_red / $total_calls*100; echo(round($percentage_red)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Geannuleerd</th>
                                  <td><?php echo "$total_cancelled"; ?></td>
									<td><?php $percentage_cancelled = $total_cancelled / $total_calls*100; echo(round($percentage_cancelled)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Vervolgafspraak ingepland</th>
                                  <td><?php echo "$total_continuation"; ?></td>
									<td><?php $percentage_continuation = $total_continuation / $total_calls*100; echo(round($percentage_continuation)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Klantvragen</th>
                                  <td><?php echo "$total_question"; ?></td>
									<td><?php $percentage_question = $total_question / $total_calls*100; echo(round($percentage_question));?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Collega's / spoedlijnen</th>
                                  <td><?php echo "$total_colleague"; ?></td>
									<td><?php $percentage_colleague = $total_colleague / $total_calls*100; echo(round($percentage_colleague)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row"><b>Totaal</b></th>
                                  <td> <b><?php
									  
									 
									  
									  echo "$total_calls"; ?></b></td>
									</tr>
                              </tbody>
                            </table>
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
