<?php
/**
 * Login
 * @Data-config-cabinet
 * @author Carlos Keijzers
 */
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}

include_once 'dbconnect.php';
require_once 'page_includes/data_config.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$result = mysqli_query($con, "SELECT * FROM md_users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		$_SESSION['usr_surname'] = $row['surname'];
		$_SESSION['usr_email'] = $row['email'];
		$role = $row['role'];
		
		$email = $row['email'];
		
		$name = $row['name'];
		$surname = $row['surname'];
		$email_token = $row['email_token'];
		$user_id = $row['id'];
		$account_confirmed = $row['account_confirmed'];
		
		$admin = "1";
	
	
		
		if ($role == $admin){ 
		
		header("Location: ad-dashboard.php");}
		
	else{ header("Location: log.php?name=&tel=");}
	
	} else {

		$error_message = ($error_notification['wrong_credentials']);
	}
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logboek Muizendokter B.V.</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
	
		<?php if (isset($error_message)) { echo " 
			<div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                      </button><i class='zmdi zmdi-alert-triangle zmdi-hc-fw'></i> $error_message
       		</div>";} ?>
		
		<?php if (isset($error_message_register)) { ?>
		
		<div class='alert alert-danger alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
                      </button><i class='zmdi zmdi-alert-triangle zmdi-hc-fw'></i> 
			<?php if (isset($name_error)) echo $name_error; ?> 
			<?php if (isset($surname_error)) echo $surname_error; ?>
			<?php if (isset($email_error)) echo $email_error; ?>
			<?php if (isset($password_error)) echo $password_error; ?>
			<?php if (isset($cpassword_error)) echo $cpassword_error; ?>
       	</div>
		
		
		
		<?php } ?>


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
						<h2>Muizendokter B.V. Logboek</h2>
 
                    </a>
                </div>
                <div class="login-form">
                    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control <?php if (isset($error_message)) { echo "is-invalid" ;} ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Wachtwoord</label>
                            <input type="password" name="password" class="form-control <?php if (isset($error_message)) { echo "is-invalid" ;} ?>" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
            

                        </div>
						<br />
						<br />
						
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Inloggen</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
