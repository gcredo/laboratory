<?php

$con=mysqli_connect("localhost","root","root","classicmodels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT customerNumber id,contactLastName lastName, contactFirstName firstName, addressLine1 address, postalCode zipCode, state FROM classicmodels.customers;";

$result = mysqli_query($con, $sql); // This line executes the MySQL query that you typed above

$yourArray = array(); // make a new array to hold all your data


$index = 0;
while($row = mysqli_fetch_all($result, MYSQLI_ASSOC)){ // loop to store the data in an associative array.
     $yourArray[$index] = $row;
     $index++;
}

echo "<pre>";
var_export($yourArray);
echo "</pre>";