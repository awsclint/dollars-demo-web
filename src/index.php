  
<!doctype html>
<html>
	<head>
		<title>Dollar$ Demo</title>
	</head>

	<body>
		<?php
       echo "<body style='background-color:black'>";
		   $image_url='https://static.awsclint.com/dollar.jpeg';
		   $curl = curl_init();

		   curl_setopt_array($curl, array(
			 CURLOPT_URL => "https://api.awsclint.com/",
			 CURLOPT_RETURNTRANSFER => true,
			 CURLOPT_ENCODING => "",
			 CURLOPT_MAXREDIRS => 10,
			 CURLOPT_TIMEOUT => 0,
			 CURLOPT_FOLLOWLOCATION => true,
			 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			 CURLOPT_CUSTOMREQUEST => "GET",
		   ));
		   
		   $response = curl_exec($curl);
		   
		   curl_close($curl);
		   //echo $response;
		?>
        <div style="display: flex; justify-content: center;">
		<img src="<?php echo $image_url;?>">
        </div>
       
		<h2 style="color: white"> <p style="font-family:'Courier New'">Dollar$ Demo built by cliwhite@</p></h2>
		<h2 style="color: white"> <p style="font-family:'Courier New'">API Check: <?php echo $response;?></p></h2>

	</body>
</html>
