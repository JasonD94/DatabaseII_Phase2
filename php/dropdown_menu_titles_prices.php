<?php
$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = "SELECT DISTINCT title as title, price as price from book";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, no titles were found! :'(<br>";
    return 0;
}

$menu=" ";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $menu .="<option>" . $row['title'] . " -- $" . $row['price'] . "</option>";
}
// Output dropdown menu
echo $menu;
?>
