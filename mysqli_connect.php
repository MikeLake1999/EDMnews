
<?php 
// This creates a connection to the logindb database and to MySQL, 
// It also sets the encoding.
// Set the access details as constants:
      DEFINE ('DB_USER','2909424_studentdemo');
      DEFINE ('DB_PASSWORD','Hieu2951999');
      DEFINE ('DB_HOST','fdb23.runhosting.com');
      DEFINE ('DB_NAME','2909424_studentdemo');
      DEFINE ('DB_PORT','3306');

// Make the connection:
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
// Set the encoding...optional but recommended

?>
