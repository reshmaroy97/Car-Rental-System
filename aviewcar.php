

<!DOCTYPE html>
<html>
<head>
<title> CAR</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
<style>
	body {
		font-family: 'Roboto', sans-serif;
	}
	.row {
		display: flex;
		border: 2px solid rgba(0,0,0,0.5);
		justify-content: space-around;
	}
	.details {
		margin-left: 50px;
		text-transform: capitalize;
	}
	.car-image {
		height: 8rem;
		width: 12rem;
		align-self:center;
	    
	}
	.name {
		text-transform: uppercase;
		font-size: 1.3rem;
	}
	.date-check {
		align-self: center;
	}
</style>
</head>
<body>
<div>
             <?php
              


define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_query($con,"USE id3579286_carrental");
mysqli_set_charset($con, 'utf8');
$sql= "select * from car";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<div class="row">';
			echo '<img src="data:img/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="car-image" class="car-image"
			/>';
			echo '<div class="details">';
			echo '<p class="name">  Car id :'.$row['cid'].'</p>';
			echo '<p> Model Name :'.$row['modelname'].'</p>';
			echo  '<p> brand :' .$row['brand'].'</p>';
			echo '<p>  Color :' .$row['color'].'</p>';
			echo '<p> Passengers :' .$row['passengers'].'</p>';
			echo '<p>  Daily Rate :Rs.' .$row['car_rate'].'</p>';
            echo '</div><form class="date-check" method="POST" action="booking.php">';
			//echo '<input type="date" placeholder="Start date"/>';
			//echo '<input type="date" placeholder="End Date"/>';
			//echo '<button type="submit" name="submit" value="'.$row['cid'].'">book now</button> ';
			echo '</form></div>';
		}
		
		echo '</form></div>';

	}
	$con->close();
	?>
	</div>
</body>

</html>	
	


