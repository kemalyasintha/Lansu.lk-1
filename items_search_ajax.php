<?php
	include 'database/dbconnect.php';
	$district = strval($_GET['district']);

	$sql = "SELECT * FROM additem WHERE district = '".$district."'";
	$result = mysqli_query($dbconnection, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $title=$row['title'];
	        $price=$row['price'];
	        ?>
	        <button class="btn btn-danger btn-lg btn-block" type="button"><?php echo $title."-->".$price;?></button>
	        <?php
	        echo "<br>";
	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($dbconnection);
	
?>