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



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_greenred = 'Groen') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_greenred = 'Rood') AND (log_land = 'BE')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_cancelled = '1') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_continuation = '1') AND (log_land = 'BE')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_question = '1') AND (log_land = 'BE')";
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

	
	$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_colleague = '1') AND (log_land = 'BE')";
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



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Muizen') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND log_greenred IN ('Groen', 'Rood') AND (log_pest = 'Motten')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Mieren') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Ratten') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Vliegen') AND log_greenred IN ('Groen', 'Rood')";
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

	
$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Wespen') AND log_greenred IN ('Groen', 'Rood')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Spinnen') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Vlooien') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Bedwantsen') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Zilvervisjes') AND log_greenred IN ('Groen', 'Rood')";
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
	
$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Tapijtkevers') AND log_greenred IN ('Groen', 'Rood')";
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


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Vogels') AND log_greenred IN ('Groen', 'Rood')";
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

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_pest = 'Kakkerlakken') AND log_greenred IN ('Groen', 'Rood')";
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
































//======================================================================
// Redenen verloren leads
//======================================================================

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '1') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_1  = count($count);
			}
		} else{

	$total_red_reason_1 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '2') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_2  = count($count);
			}
		} else{

	$total_red_reason_2 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '3') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_3  = count($count);
			}
		} else{

	$total_red_reason_3 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '4') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_4  = count($count);
			}
		} else{

	$total_red_reason_4 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '5') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_5  = count($count);
			}
		} else{

	$total_red_reason_5 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '6') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_6  = count($count);
			}
		} else{

	$total_red_reason_6 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '7') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_7  = count($count);
			}
		} else{

	$total_red_reason_7 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '8') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_8  = count($count);
			}
		} else{

	$total_red_reason_8 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '9') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_9  = count($count);
			}
		} else{

	$total_red_reason_9 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '10') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_10  = count($count);
			}
		} else{

	$total_red_reason_10 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '11') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_11  = count($count);
			}
		} else{

	$total_red_reason_11 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '12') AND (log_greenred = 'Rood')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_red_reason_12  = count($count);
			}
		} else{

	$total_red_reason_12 = "0";
	}

$total_red_reason = $total_red_reason_1 + $total_red_reason_2 + $total_red_reason_3 + $total_red_reason_4 + $total_red_reason_5 + $total_red_reason_6 + $total_red_reason_7 + $total_red_reason_8 + $total_red_reason_9 + $total_red_reason_10 + $total_red_reason_11 + $total_red_reason_12;

//======================================================================
// Redenen annuleringen
//======================================================================

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '1') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_1 = count($count);
			}
		} else{

	$total_cancel_reason_1 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '2') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_2 = count($count);
			}
		} else{

	$total_cancel_reason_2 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '3') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_3 = count($count);
			}
		} else{

	$total_cancel_reason_3 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '4') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_4 = count($count);
			}
		} else{

	$total_cancel_reason_4 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '5') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_5 = count($count);
			}
		} else{

	$total_cancel_reason_5 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '6') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_6 = count($count);
			}
		} else{

	$total_cancel_reason_6 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '7') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_7 = count($count);
			}
		} else{

	$total_cancel_reason_7 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '8') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_8 = count($count);
			}
		} else{

	$total_cancel_reason_8 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '9') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_9 = count($count);
			}
		} else{

	$total_cancel_reason_9 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '10') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_10 = count($count);
			}
		} else{

	$total_cancel_reason_10 = "0";
	}

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '11') AND (log_cancelled = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_cancel_reason_11 = count($count);
			}
		} else{

	$total_cancel_reason_11 = "0";
	}


$total_cancel_reason = $total_cancel_reason_1 + $total_cancel_reason_2 + $total_cancel_reason_3 + $total_cancel_reason_4 + $total_cancel_reason_5 + $total_cancel_reason_6 + $total_cancel_reason_7 + $total_cancel_reason_8 + $total_cancel_reason_9 + $total_cancel_reason_10 + $total_cancel_reason_11;

 $total_calls = $total_green + $total_red + $total_cancelled + $total_continuation + $total_question + $total_colleague;




//======================================================================
// Klantvragen
//======================================================================

$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '1') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_1 = count($count);
			}
		} else{

	$total_question_1 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '2') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_2 = count($count);
			}
		} else{

	$total_question_2 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '3') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_3 = count($count);
			}
		} else{

	$total_question_3 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '4') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_4 = count($count);
			}
		} else{

	$total_question_4 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '5') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_5 = count($count);
			}
		} else{

	$total_question_5 = "0";
	}



$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '6') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_6 = count($count);
			}
		} else{

	$total_question_6 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '7') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_7 = count($count);
			}
		} else{

	$total_question_7 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '8') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_8 = count($count);
			}
		} else{

	$total_question_8 = "0";
	}


$sql = "SELECT * FROM md_log WHERE (cast(log_date as date) BETWEEN '$startdate' AND '$enddate') AND (log_land = 'BE') AND (log_notes = '9') AND (log_question = '1')";
$result = mysqli_query($con, $sql);

if ($result)
	{
	 $count = array();
	
		foreach($result as $row)
			
		$count[] = $row['log_id'];
			{
			$total_question_9 = count($count);
			}
		} else{

	$total_question_9 = "0";
	}


$total_questions = $total_question_1 + $total_question_2 + $total_question_3 + $total_question_4 + $total_question_5 + $total_question_6 + $total_question_7 + $total_question_8 + $total_question_9;
?>

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
                        <h1>Resultaten Belgium</h1>
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
						<div class="row">
				 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><h3>Nederland | Ratio: <?php echo(round($ratio_final_nl)); ?> %</h3></strong>
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
				
				
		
				
				<div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
							<strong class="card-title"><h3>Overzicht bestrijding</h3></strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                      
                              <tbody>
								<tr>
									<th scope="row"><strong>Soort ongedierte</strong></th>
									<td><strong>Aantallen</strong></td>
									<td><strong>%</strong></td>
                                </tr>
                                <tr>
                                  <th scope="row">Muizen</th>
                                  <td><?php echo "$total_muizen"; ?></td>
								  <td><?php $percentage_muizen = $total_muizen / $ratio_total_nl*100; echo(round($percentage_muizen)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Motten</th>
                                  <td><?php echo "$total_motten"; ?></td>
									<td><?php $percentage_motten = $total_motten / $ratio_total_nl*100; echo(round($percentage_motten)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Mieren</th>
                                  <td><?php echo "$total_mieren"; ?></td>
								<td><?php $percentage_mieren = $total_mieren / $ratio_total_nl*100; echo(round($percentage_mieren)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Ratten</th>
                                  <td><?php echo "$total_ratten"; ?></td>
									<td><?php $percentage_ratten = $total_ratten / $ratio_total_nl*100; echo(round($percentage_ratten)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Vliegen</th>
                                  <td><?php echo "$total_vliegen"; ?></td>
									<td><?php $percentage_vliegen = $total_vliegen / $ratio_total_nl*100; echo(round($percentage_vliegen)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Wespen</th>
                                  <td><?php echo "$total_wespen"; ?></td>
									<td><?php $percentage_wespen = $total_wespen / $ratio_total_nl*100; echo(round($percentage_wespen)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Spinnen</th>
                                  <td><?php echo "$total_spinnen"; ?></td>
									<td><?php $percentage_spinnen = $total_spinnen / $ratio_total_nl*100; echo(round($percentage_spinnen)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Vlooien</th>
                                  <td><?php echo "$total_vlooien"; ?></td>
									<td><?php $percentage_vlooien = $total_vlooien / $ratio_total_nl*100; echo(round($percentage_vlooien)); ?> %</td>
                                </tr>
								  
								<tr>
                                  <th scope="row">Bedwantsen</th>
                                  <td><?php echo "$total_bedwantsen"; ?></td>
									<td><?php $percentage_bedwantsen = $total_bedwantsen / $ratio_total_nl*100; echo(round($percentage_bedwantsen)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Zilvervisjes</th>
                                  <td><?php echo "$total_zilvervisjes"; ?></td>
									<td><?php $percentage_zilvervisjes = $total_zilvervisjes / $ratio_total_nl*100; echo(round($percentage_zilvervisjes)); ?> %</td>
                                </tr>
								  
								<tr>
                                  <th scope="row">Tapijtkevers</th>
                                  <td><?php echo "$total_tapijtkevers"; ?></td>
									<td><?php $percentage_tapijtkevers = $total_tapijtkevers / $ratio_total_nl*100; echo(round($percentage_tapijtkevers)); ?> %</td>
                                </tr>
								  <tr>
                                  <th scope="row">Vogels</th>
                                  <td><?php echo "$total_vogels"; ?></td>
									  <td><?php $percentage_vogels = $total_vogels / $ratio_total_nl*100; echo(round($percentage_vogels)); ?> %</td>
                                </tr>
								<tr>
                                  <th scope="row">Kakkerlakken</th>
                                  <td><?php echo "$total_kakkerlakken"; ?></td>
									<td><?php $percentage_kakkerlakken = $total_kakkerlakken / $ratio_total_nl*100; echo(round($percentage_kakkerlakken)); ?> %</td>
                                </tr>
								<tr>
									<th scope="row"><b>Totaal</b></th>
									<td><b><?php echo "$ratio_total_nl"; ?></b></td>
                                </tr>
								  
		
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
				
				</div>
				
				<hr>
				
				<div class="row">
				
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<strong class="card-title"><h3>Overzicht verloren leads</h3></strong>
							</div>
							<div class="card-body">
								<table class="table table-bordered">

								  <tbody>
									 <tr>
										<th scope="row"><strong>Reden</strong></th>
										<td><strong>Aantallen</strong></td>
										 <td><strong>%</strong></td>
									</tr>
									 <tr>
									  <th scope="row">Vindt het te lang duren</th>
									  <td><?php echo "$total_red_reason_1"; ?></td>
										 <td><?php $percentage_red_reason_1 = $total_red_reason_1 / $total_red_reason*100; echo(round($percentage_red_reason_1)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Te duur</th>
									  <td><?php echo "$total_red_reason_2"; ?></td>
										 <td><?php $percentage_red_reason_2 = $total_red_reason_2 / $total_red_reason*100; echo(round($percentage_red_reason_2)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Komt niet uit</th>
									  <td><?php echo "$total_red_reason_3"; ?></td>
										<td><?php $percentage_red_reason_3 = $total_red_reason_3 / $total_red_reason*100; echo(round($percentage_red_reason_3)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Geen geld</th>
									  <td><?php echo "$total_red_reason_4"; ?></td>
										<td><?php $percentage_red_reason_4 = $total_red_reason_4 / $total_red_reason*100; echo(round($percentage_red_reason_4)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Klant moet erover nadenken / overleggen</th>
									  <td><?php echo "$total_red_reason_5"; ?></td>
										<td><?php $percentage_red_reason_5 = $total_red_reason_5 / $total_red_reason*100; echo(round($percentage_red_reason_5)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Ziet geen wespennest</th>
									  <td><?php echo "$total_red_reason_6"; ?></td>
										<td><?php $percentage_red_reason_6 = $total_red_reason_6 / $total_red_reason*100; echo(round($percentage_red_reason_6)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Wespennest te hoog</th>
									  <td><?php echo "$total_red_reason_7"; ?></td>
										<td><?php $percentage_red_reason_7 = $total_red_reason_7 / $total_red_reason*100; echo(round($percentage_red_reason_7)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Bang voor schade</th>
									  <td><?php echo "$total_red_reason_8"; ?></td>
										<td><?php $percentage_red_reason_8 = $total_red_reason_8 / $total_red_reason*100; echo(round($percentage_red_reason_8)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">We rijden niet in de regio</th>
									  <td><?php echo "$total_red_reason_9"; ?></td>
										<td><?php $percentage_red_reason_9 = $total_red_reason_9 / $total_red_reason*100; echo(round($percentage_red_reason_9)); ?> %</td>
									</tr>

									<tr>
									  <th scope="row">Antiek / Meubel  (Houtworm)</th>
									  <td><?php echo "$total_red_reason_10"; ?></td>
										<td><?php $percentage_red_reason_10 = $total_red_reason_10 / $total_red_reason*100; echo(round($percentage_red_reason_10)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Veranderlijke Boktor (Houtworm)</th>
									  <td><?php echo "$total_red_reason_11"; ?></td>
										<td><?php $percentage_red_reason_11 = $total_red_reason_11 / $total_red_reason*100; echo(round($percentage_red_reason_10)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Klant wil alleen informatie</th>
									  <td><?php echo "$total_red_reason_12"; ?></td>
										<td><?php $percentage_red_reason_12 = $total_red_reason_12 / $total_red_reason*100; echo(round($percentage_red_reason_11)); ?> %</td>
									</tr>
									<tr>
										<th scope="row"><b>Totaal verloren leads</b></th>
										<td><b><?php echo "$total_red_reason"; ?></b></td>
									</tr>



								  </tbody>
								</table>
							</div>
						</div>
					</div>
					
				<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<strong class="card-title"><h3>Reden annuleringen</h3></strong>
							</div>
							<div class="card-body">
								<table class="table table-bordered">

								  <tbody>
									<tr>
										<th scope="row"><strong>Reden</strong></th>
										<td><strong>Aantallen</strong></td>
										<td><strong>%</strong></td>
									</tr>
									<tr>
									  <th scope="row">Vindt het te lang duren</th>
									  <td><?php echo "$total_cancel_reason_1"; ?></td>
										<td><?php $percentage_cancel_reason_1 = $total_cancel_reason_1 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_1)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Heeft geen overlast meer</th>
									  <td><?php echo "$total_cancel_reason_2"; ?></td>
										<td><?php $percentage_cancel_reason_2 = $total_cancel_reason_2 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_2)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Heeft de concurrent ingschakeld</th>
									  <td><?php echo "$total_cancel_reason_3"; ?></td>
										<td><?php $percentage_cancel_reason_3 = $total_cancel_reason_3 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_3)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Ontevreden</th>
									  <td><?php echo "$total_cancel_reason_4"; ?></td>
										<td><?php $percentage_cancel_reason_4 = $total_cancel_reason_4 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_4)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Ziek</th>
									  <td><?php echo "$total_cancel_reason_5"; ?></td>
										<td><?php $percentage_cancel_reason_5 = $total_cancel_reason_5 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_5)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Komt niet uit</th>
									  <td><?php echo "$total_cancel_reason_6"; ?></td>
										<td><?php $percentage_cancel_reason_6 = $total_cancel_reason_6 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_6)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Geen geld</th>
									  <td><?php echo "$total_cancel_reason_7"; ?></td>
										<td><?php $percentage_cancel_reason_7 = $total_cancel_reason_7 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_7)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Moet eerst overleggen</th>
									  <td><?php echo "$total_cancel_reason_8"; ?></td>
										<td><?php $percentage_cancel_reason_8 = $total_cancel_reason_8 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_8)); ?> %</td>
									</tr>

									<tr>
									  <th scope="row">Vanwege verzetten van afspraak</th>
									  <td><?php echo "$total_cancel_reason_9"; ?></td>
										<td><?php $percentage_cancel_reason_9 = $total_cancel_reason_9 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_9)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Vindt het te duur</th>
									  <td><?php echo "$total_cancel_reason_10"; ?></td>
										<td><?php $percentage_cancel_reason_10 = $total_cancel_reason_10 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_10)); ?> %</td>
									</tr>
										<tr>
									  <th scope="row">Zelf het probleem al opgelost</th>
									  <td><?php echo "$total_cancel_reason_11"; ?></td>
											<td><?php $percentage_cancel_reason_11 = $total_cancel_reason_11 / $total_cancel_reason*100; echo(round($percentage_cancel_reason_11)); ?> %</td>
									</tr>
									  
									<tr>
										<th scope="row"><b>Totaal annuleringen</b></th>
										<td><b><?php echo "$total_cancel_reason"; ?></b></td>
									</tr>


								  </tbody>
								</table>
							</div>
						</div>
					</div>
					
					
				</div>
				
				
				
				
				
				<hr>
				
				<div class="row">
				
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<strong class="card-title"><h3>Overzicht klantvragen</h3></strong>
							</div>
							<div class="card-body">
								<table class="table table-bordered">
									
									
								
												
										
												
										

								  <tbody>
									 <tr>
										<th scope="row"><strong>Reden</strong></th>
										<td><strong>Aantallen</strong></td>
										 <td><strong>%</strong></td>
									</tr>
									 <tr>
									  <th scope="row">Hoe laat komt de bestrijder precies?</th>
									  <td><?php echo "$total_question_1"; ?></td>
										 <td><?php $percentage_question_1 = $total_question_1 / $total_questions*100; echo(round($percentage_question_1)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Wanneer staat de afspraak ook alweer?</th>
									  <td><?php echo "$total_question_2"; ?></td>
										 <td><?php $percentage_question_2 = $total_question_2 / $total_questions*100; echo(round($percentage_question_2)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Is er al iets bekend over mijn klacht?</th>
									  <td><?php echo "$total_question_3"; ?></td>
										<td><?php $percentage_question_3 = $total_question_3 / $total_questions*100; echo(round($percentage_question_3)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Kunnen jullie mij voor vertrek bellen?</th>
									  <td><?php echo "$total_question_4"; ?></td>
										<td><?php $percentage_question_4 = $total_question_4 / $total_questions*100; echo(round($percentage_question_4)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Belt terug omdat wij de klant gebeld hebben</th>
									  <td><?php echo "$total_question_5"; ?></td>
										<td><?php $percentage_question_5 = $total_question_5 / $total_questions*100; echo(round($percentage_question_5)); ?> %</td>
									</tr>
									  
									 <tr>
									  <th scope="row">Vraag over factuur</th>
									  <td><?php echo "$total_question_6"; ?></td>
										<td><?php $percentage_question_6 = $total_question_6 / $total_questions*100; echo(round($percentage_question_6)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Geen afspraakbevestiging / instructiemail ontvangen</th>
									  <td><?php echo "$total_question_7"; ?></td>
										<td><?php $percentage_question_7 = $total_question_7 / $total_questions*100; echo(round($percentage_question_7)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Is het mogelijk om de afspraak te verzetten?</th>
									  <td><?php echo "$total_question_8"; ?></td>
										<td><?php $percentage_question_8 = $total_question_8 / $total_questions*100; echo(round($percentage_question_8)); ?> %</td>
									</tr>
									<tr>
									  <th scope="row">Overig</th>
									  <td><?php echo "$total_question_9"; ?></td>
										<td><?php $percentage_question_9 = $total_question_9 / $total_questions*100; echo(round($percentage_question_9)); ?> %</td>
									</tr>
		
									  
				
									<tr>
										<th scope="row"><b>Totaal klantvragen</b></th>
										<td><b><?php echo "$total_questions"; ?></b></td>
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
