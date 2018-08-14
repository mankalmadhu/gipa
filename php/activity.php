<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gokhale Institute of Public Affairs</title>
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/style.css?v=2.0" media="screen" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
<div class="page">
	<div class="header">
		<div class="logo"><img src="images/logo1.png" alt="Logo" title="Logo"/></div>
		<div class="title">Gokhale Institute of Public Affairs</div>
		<div class="subtitle">Public Life Must be spiritualized - G. K. Gokhale</div>
	</div>
	<div class="mainpage">
	<div class="left">
			<div class="submenu"></div>
			<div class="topictitle">Major Activities</div>
			<div class="data">
				<div class="limitdata1">
					The following have been the major activities of the G.I.P.A <br /><br />
					<ol>	
						<li>Library;</li>
						<li>Reading-Room;</li>
						<li>Lectures;</li>
						<li>Weekly study class in Kannada, English and Samskrita;</li>
						<li>Popular and Endowment lectures;</li>
						<li>Civic Surveys;</li>
						<li>Public opinion inquiries;</li>
						<li>Symposia and conferences;</li>
						<li>Committees for preparation of memoranda on legislation, fiscal matters and other public issues;</li>
						<li>Correspondence with government functionaries for redressal of public grievances;</li>
						<li>Cultural and literary programmes;</li>
						<li>Publication of books and pamphlets;</li>
						<li>Monthly journal <i>Public Affairs</i>;</li>
						<li>Presentations by all political parties prior to General Elections and public discussions thereon.</li>
					</ol>	
					<br />Having recently celebrated its Golden Jubilee (1945-2005), the Institute looks forward to strengthening and expanding its activities. 
				</div>
			</div>
			<div class="kagga1">
					<div class="kagga2">
						<?php
							include("getkagga.php");
						?>
					</div>
				</div>
	</div>
	<div class="right">
		<div class="gokale">
			<img src="images/gokhale1.gif" alt="Logo" title="GopalKrishna Gokhale"/>
		</div>
		<div class="tabs">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="background.php">Background</li></a>
				<li><a class="active" href="activity.php">Activities</li></a>
				<?php echo "<li><a href=\"prog.php#d".$_SESSION['next_date']."\">Programmes</a></li>" ?>
				<li><a href="journals.php">Monthly Journals</a></li>
<!--
				<li><a href="malike.php">Lectures</a></li>
-->
				<li><a href="gal.php">Gallery</a></li>
				<li><a href="donors.php">Sponsored Events</a></li>
				<li><a href="cus.php">Contact Us</a></li>
			</ul>		
		</div>
	</div>
	</div> <!-- end of mainpage -->
    <?php include("footer.php");?>
</div>
</body>
</html>

