<?php
session_start();
$operatorname=$_SESSION["operatorname"];
?>
<html>
<head>
<title>dealer</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div>
	<h1><center>Welcome <?php echo $operatorname; ?></center></h1>

</div>
<div>
	<center>
        <form action="calc_elec_bill.php" method="post">
        	<table>
        		<tr>
        			<th><b>Service no:</b></th>
        			<th><input type="text" name="servicenum" placeholder="enter Service number"></th>
        		</tr>
        		<tr>
        			<th><b>Units:</b></th>
        			<th><input type="text" name="units" placeholder="enter units"></th>
        		</tr>
        	</table>
       			
       			
       			<input class="button" type="submit" value="Submit">
        </form>	
	</center>
</div>
</body>
</html>
