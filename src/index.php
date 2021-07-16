<!DOCTYPE html>
<html>
	<head>
		<title>Fizz Buzz</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<div class="container" style="padding: 30px">

			<?php require_once "FizzBuzz.php";?>
		    
		    <?php 
			
				$dataArray = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
	
				$nf = new FizzBuzz ($dataArray); 

				echo "Step 1<br>";

				$step1 = $nf->step1();

				echo "<br><br>Step 2<br>";

				$step2 = $nf->step2();

				echo "<br><br>Report<br>";

				$report = $nf->step3();
				
		    ?>

		</div>
	</body>
</html>