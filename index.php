<?php

include 'db_connect.php';  //include the db_connect.php file

print "<HTML><BODY><IMG SRC='https://elasticbox.com/services/blobs/download/543498b916977e6c5de490b8/lampEstackEicon.jpg'/><H1>Showing the users of the sampledb</H1>\n";

//Create and set a new connection
$get = new Connection("db1"); //"db1" is user defined in db_connect.php

//Create a query: $var->query("SQL_STATEMENT"); $var is the variable you created a connection with.
$selectusers = $get->query("SELECT * FROM users");

//Do whatever you would like with the query
print "Total Number of user records: ";

print mysql_num_rows($selectusers);

print "\n\r";

//Use built in functions to make one line queries.
$rowarray = $get->fetch($selectusers);  //fetch() fetches the associated rows.

print "<table>\n\r";  
foreach ($rowarray as $row) {
    print "<tr>\n\r";  
    foreach ($row as $col) {
        print "\t<td>$col</td>\n\r";
    }
    print "</tr>\n\r";
}
print "</table></BODY></HTML>";

// test

?>
