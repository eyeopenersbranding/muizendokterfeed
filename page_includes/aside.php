

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

				<h3 class="menu-title">Muizendokter B.V. </h3>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
				
				
                <ul class="nav navbar-nav">
					 <h3 class="menu-title"><?php echo $_SESSION['usr_name'];  ?> <?php echo $_SESSION['usr_surname'];  ?></h3><!-- /.menu-title -->
					
				
					<?php if ($user_role == $Admin) { ?>
					<li>
                        <a href="ad-log-results.php"> <i class="menu-icon fa fa-th"></i>KPI's Nederland</a>
                    </li>
					<li>
                        <a href="ad-log-results-be.php"> <i class="menu-icon fa fa-th"></i>KPI's Belgium</a>
                    </li>
					<li>
                        <a href="ad-log-results-ho.php"> <i class="menu-icon fa fa-th"></i>KPI's Houtworm</a>
                    </li>
				
					<?php } if ($user_role == $Planning) { ?>
				
					<li>
                        <a href="log.php?name=&tel="> <i class="menu-icon fa fa-th"></i>Logboek</a>
                    </li>
					<li>
                        <a href="logs.php"> <i class="menu-icon fa fa-search"></i>Logboek doorzoeken </a>
                    </li>
					<li>
                        <a href="important-data.php"> <i class="menu-icon fa fa-search"></i>Belangrijke gegevens</a>
                    </li>

					<?php }?>
					
            
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->