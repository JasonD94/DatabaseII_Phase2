<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Design a drop down menu so user can use it to select a year and find the title of the best selling book of that year.
 */

$year = $_POST["years"];
echo "The year the user selected is: <b><u>$year</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// this collects all of purchase history of the name provided
$query = "SELECT max(cnt) as bst, a.year, a.title
                  FROM (
                         SELECT count(purchase.ISBN13) as cnt, book.title, year(datetime) as year 
                         FROM purchase 
                         JOIN book ON book.ISBN13 = purchase.ISBN13 
                         GROUP BY purchase.ISBN13, book.title, year 
                         ORDER BY `cnt` DESC
                       ) a
                  WHERE a.year = '" . $year ."'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry I couldn't find anyone under $name :'(<br>";
    return 0;
}

// Results table
echo "<br><table>";
echo "<tr> <td><b>best seller</b></td> 
<td><b>title</b></td> 
<td><b>year</b></td> ";

// If the query worked, return name, ISBN, book tile, Category, and price
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["bst"] . "</td>";
    echo "<td>" . $row["title"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    echo '</tr>';
}

echo '</table>';        // End of results table

mysqli_free_result($result);
mysqli_close($my_conn);
