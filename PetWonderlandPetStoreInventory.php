<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<title>Pet Wonderland Pet Store Inventory</title>
	<link rel="stylesheet" href="PetWonderlandPetStoreInventory.css">
</head>
<body>
	<h2>
	Welcome to the Pet Wonderland Pet Store Inventory!
	</h2>
	<h3>
	Please click the button below to view the Pet Wonderland online pet inventory.
	</h3>
<form method="post">
	<input type="submit" name="button" id="button" value="Access database"><br/>
 </form>
	
	<?php
 function getCustomers() {
	$servername = "sql1.njit.edu";
$username = "rkl9";
$password = "teeing46";
$dbname = "rkl9";

// Create connection
$dbc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}

$sql = "SELECT `Animal`, `Specie`, `Name`, `AdoptedOrWild`, `Price` FROM `PetStore_Records` ";
$result = $dbc->query($sql);




if ($result->num_rows > 0) {
 echo "<table><th>Animal</th><th>Specie</th><th>Name</th><th>Adopted or Wild?</th><th>Price</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        echo "<tr><td>" .  $row["Animal"] . "</td>". "<td>" .  $row["Specie"] . "</td>" . "<td>" .  $row["Name"] . "</td>" . "<td>"  . $row["AdoptedOrWild"] . "</td>" . "<td>".  $row["Price"] . "</td>";

   
    }
    echo "</table>";
} else {
    echo "0 results";
}

$dbc->close();

}

if(array_key_exists('button',$_POST)){
   getCustomers();
}
	
	?> 
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		  
	
        
	 
</body>
</html>