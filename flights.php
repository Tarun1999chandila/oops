<?php

 $servername = "localhost";
 $username = "root";
 $password = "Tarunc1210@";
 $dbname = "oops";
 
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


class FlightBooking {
  function checkFlightsAvailability($vendor) {
    $query = $conn->prepare("SELECT * from flight WHERE flightname=$vendor"); 
    $result = $conn->query($query)->fetchAll(PDO::FETCH_NUM);
    echo "($result[0])";
      
    
  }

  function bookFlights() {
    $query = $conn->prepare("UPDATE flight SET availability=booked WHERE flightname=$vendor");
      $result = $conn->query($query)->fetchAll(PDO::FETCH_NUM);
     echo "$result[0]";
}
}

$obj = new FlightBooking();
$obj.checkFlightsAvailability('Ethiad');
$obj.bookFlights('Air India');