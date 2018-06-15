<?php


$page = $_SERVER['PHP_SELF'];
$sec = "10";


include_once 'dbconnect.php';




setlocale(LC_ALL, 'nl_NL');
$date_today = date("Y-m-d");


//======================================================================
// Nederland
//======================================================================



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'NL')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'NL')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'NL')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'NL')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'NL')";
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

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'NL')";
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



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'BE')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'BE')";
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

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'BE')";
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



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Groen') AND (log_land = 'Houtworm')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_greenred = 'Rood') AND (log_land = 'Houtworm')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_cancelled = '1') AND (log_land = 'Houtworm')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_continuation = '1') AND (log_land = 'Houtworm')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_question = '1') AND (log_land = 'Houtworm')";
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

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) = '$date_today') AND (log_colleague = '1') AND (log_land = 'Houtworm')";
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









































<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logboek Muizendokter B.V.</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/widgets.css">
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<?php date_default_timezone_set('Europe/Amsterdam'); ?>
</head>

 

<body>
	
	
	
        <!-- Left Panel -->

    


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

	


        <div class="content mt-3">
            <div class="animated fadeIn">
               
             					
         
		
			
		
	
				<br />
				<br />
				
				<div class="row">
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Nederland Ratio: <?php echo "$ratio_final_nl"; ?> %</strong>
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
				</div>
				
				
				
				
				
				
				
				
							<div class="row">
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Belgium Ratio: <?php echo "$ratio_final_be"; ?> %</strong>
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
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
							<div class="row">
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Houtworm Ratio: <?php echo "$ratio_final_ho"; ?> %</strong>
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
