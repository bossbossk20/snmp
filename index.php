<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css.css">
	<meta charset="UTF-8">
	<title>SNMP GET IP IN FITM</title>
</head>
<body>
	<div class="container">
		<div class="col-sm-4 r1" >
			<div>
				<h1>
					R124
				</h1>
			</div>
			<h3>
				<?php
					$r124 = snmpwalk('10.1.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c1 = count($r124);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c1;$i++){
								echo $r124[$i];
								echo '<br>';
							}
								
				?>
			</h3>
		</div>
		<div class="col-sm-4 r2">
			<div>
				<h1>
					R101C
				</h1>
			</div>
			<h3>
				<?php 

					$r101c = snmpwalk('10.12.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c2 = count($r101c);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c2;$i++){
								echo $r101c[$i];
								echo '<br>';
							}
								

				 ?>
			</h3>

		</div>
		<div class="col-sm-4 r3">
			<div>
				<h1>R330A</h1>
			</div>
			<h3>
				<?php
					 $r330A = snmpwalk('10.3.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c3 = count($r330A);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c3;$i++){
								echo $r330A[$i];
								echo '<br>';
							}
								
				 ?>
			</h3>
		</div>
		<div class="col-sm-4 r4">
			<div>
				<h1>SSRPoungsad</h1>
			</div>
			<h3>
				<?php
					$sad = snmpwalk('10.11.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c4 = count($sad);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c4;$i++){
								echo $sad[$i];
								echo '<br>';
							}
								 
				 ?>
			</h3>
		</div>
		<div class="col-sm-4 r5">
			<div>
				<h1>R401</h1>
			</div>
			<h3>
				<?php
					$r401 = snmpwalk('10.4.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c5 = count($r401);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c5;$i++){
								echo $r401[$i];
								echo '<br>';
							}
								 
				 ?>
			</h3>
		</div>
		<div class="col-sm-4 r6">
			<div>
				<h1>R415</h1>
			</div>
			<h3>
				<?php
					$r415 = snmpwalk('10.41.160.1', 'public', '.1.3.6.1.2.1.4.20.1.1');
						


						 $c6 = count($r415);			 
							//echo $c1;
						//echo $f1[0];
							for($i=0;$i<$c6;$i++){
								echo $r415[$i];
								echo '<br>';
							}
								 
				 ?>
			</h3>
		</div>
	</div>
</body>
</html>