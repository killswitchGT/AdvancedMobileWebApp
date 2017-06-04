<html>
<head>
<meta charset="UTF-8">
<title>jQuery Mobile Web App</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link href="../Module 3/styles/custom.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>

</head> 


<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>What Brand of Glasses The Customer Has</h1>	
	</div>
		
<div data-role="content">


					<?php
					include '../Module 3/config.php';
					include '../Module 3/opendb.php';

					$sql= "SELECT customer_t.customerid, customer_t.fname, customer_t.lname, product_t.Product from customer_t JOIN product_t on customer_t.productid = product_t.productid ORDER BY customer_t.lname ASC";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
							echo "Customer: " . $row["lname, fname"]. "<br>";
					        echo "Product: " . $row["product"]. "<br>";
					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);

					?>

				<div data-role="footer" data-theme="b">
	  <h4>Doe Optometry &copy; 2017</h4>
	</div>
	</body>
</html>