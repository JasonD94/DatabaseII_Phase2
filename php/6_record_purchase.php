<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/6/17
 * Time: 12:52 PM
 * Record the information that a customer has purchased a book.
 */

// Title with " -- $PRICE" added, e.g. "Murder on the Orient Express -- $9.87"
$title_price = ($_POST['titles']);

// Slice the string to get JUST the title e.g. "Murder on the Orient Express"
// https://stackoverflow.com/questions/14601364/php-cut-string-at-specific-character
$title = substr($title_price, 0, strpos($title_price, ' -- $'));

// Modified for Query 6 on the Android side of things
// If the title is empty, then we just gotta run this hack to fix it!
if(!$title) {
    $title = ($_POST['titles']);
}

// Customer name, e.g. "Cathy S. Castillo"
$name = ($_POST['names']);

echo "Book title: <b><u>$title</u></b> <br>";
echo "Customer name: <b><u>$name</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// Get the book's ISBN13 if it exists
$query = "SELECT ISBN13
          FROM book
          WHERE book.title = '" . $title . "' ";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find any books containing the words $title :'(<br>";
    return 0;
}

// Results table
echo "<table>";
echo "<tr> <td><b>ISBN13</b> for <b>$title</b></td>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["ISBN13"] . "</td></tr>";
    $ISBN13 = $row["ISBN13"];
}

echo '</table><br>';        // End of results table

// Get customer's CID
$query = "SELECT cid
          FROM customer
          WHERE customer.name = '". $name ."'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find any customers with the name: $name :'(<br>";
    return 0;
}

// Get the current time for recording the purchase datetime
$datetime = date_create()->format('Y-m-d H:i:s');

// Results table
echo "<table>";
echo "<tr> <td><b>CID</b> for <b>$name</b></td>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["cid"] . "</td></tr>";
    $cid = $row["cid"];
}

echo '</table><br>';        // End of results table

// Record that a customer has purchased a book.
// Need to record the Book's ISBN13, the customer ID (cid) and the datetime that the book was purchased at.
$query = "INSERT INTO purchase (ISBN13, cid, datetime) VALUES ('" . $ISBN13 . "', '" . $cid . "', '" . $datetime ."')";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// Check to see if the INSERT worked by doing a SELECT * on the purchase table
$query = "SELECT *
          FROM purchase
          ORDER BY datetime DESC";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I wasn't able to get the purchase history from the DB :'(<br>";
    return 0;
}

// Results table
echo "<table>";
echo "<tr> <td><b>ISBN13</b></td>
<td><b>cid</b></td>
<td><b>datetime</b></td>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["ISBN13"] . "</td>";
    echo "<td>" . $row["cid"] . "</td>";
    echo "<td>" . $row["datetime"] . "</td></tr>";
}

mysqli_free_result($result);
mysqli_close($my_conn);
