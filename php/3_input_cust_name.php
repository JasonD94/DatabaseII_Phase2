<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * TiCategoryAM
 * User input one customer name, find purchase history of the customer(s).
 */

$name = ($_POST['customer']);
echo "The words the user entered is: <b><u>$name</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// this collects all of purchase history of the name provided
$query = "SELECT c.name, p.ISBN13, p.datetime, b.title, b.category, b.price
            FROM customer c
              JOIN purchase p
              ON c.cid = p.cid
              JOIN book b
              ON p.ISBN13 = b.ISBN13
            WHERE c.name = '" . $name . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry I couldn't find purchases for $name :'(<br>";
    return 0;
}

// Results table
echo "<br><table>";
echo "<tr> <td><b>name</b></td> 
<td><b>ISBN</b></td> 
<td><b>Date Purchased</b></td> 
<td><b>Book</b></td> 
<td><b>Category</b></td> 
<td><b>Price</b></td></tr>";

// If the query worked, return name, ISBN, book tile, Category, and price
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["name"] . "</td>";
    echo "<td>" . $row["ISBN13"] . "</td>";
    echo "<td>" . $row["datetime"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["category"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo '</tr>';
}

echo '</table>';        // End of results table

mysqli_free_result($result);
mysqli_close($my_conn);
