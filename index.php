<?php

include_once ('./library/session.php');
include ('./env.php');


$mysession = new mySession();
$mysession->startSession();


// insert html header include doctype
include ("./head.php");
?>
<body>
	<div class="main_content">
		<div class="toprow">
			<p> Top row</p>
		</div>
		<div class="row">
			<div id="menu_panel" class="column side">
				<a href="index.php">Home</a>
				<p> Menu panel </p>
				<?php
				// left side panel contain the menu navigation
				// if display is too small change to roller menu 
				
				?>
			</div>
			<div class="column middle">
				<?php
					
					echo 'session - ';
					print_r($_SESSION);
					echo '<br>';
					print_r($_COOKIE);
					echo '<br>';
					
					//phpinfo();
				?>
			</div>
			<div class="column side">
				<p> right </p>
			</div>
			
		</div>
		
	</div>

</body>

<!--- // end html file from head --->
</html>
