<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/4/17
 * Time: 1:04 AM
 * User input one name and address, update the address in people, and author or customer table if applicable.
 *
 */

$name = ($_POST['name']);
$address = ($_POST['address']);
echo "The name the user entered is: <b><u>$name</u></b> <br>";
echo "The address the user entered is: <b><u>$address</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// This will get all of the person's current info.
$query = "SELECT *
          FROM people
          WHERE people.name = '" . $name . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find anyone in the DB with the name: $name :'(<br>";
    exit;
}

// Results table for the Person they want to change.
echo "BEFORE UPDATING THE PEOPLE TABLE: ";
echo "<br><table>";
echo "<tr> <td><b>name</b></td> <td><b>address</b></td> <td><b>telepone</b></td> <td><b>email</b></td> </tr>";

// Print out all of the person's info
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["name"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["telephone"] . "</td>";
    echo "<td>" . $row["email"] . "</td></tr>";
}
echo '</table><br>';        // End of results table

// Now we can update the People's table.
$update = "UPDATE people
           SET people.address = '$address'
           WHERE people.name = '$name'";
mysqli_query($my_conn, $update) or die (mysqli_error($my_conn) . 'Query failed: ');

// Show the updated people row
$query = "SELECT *
          FROM people
          WHERE people.name = '" . $name . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find anyone in the DB with the name: $name :'(<br>";
    exit;
}

// Results table for the Person after the database was updated
echo "**AFTER** UPDATING THE PEOPLE TABLE: ";
echo "<br><table>";
echo "<tr> <td><b>name</b></td> <td><b>address</b></td> <td><b>telepone</b></td> <td><b>email</b></td> </tr>";

// Print out all of the person's info
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["name"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["telephone"] . "</td>";
    echo "<td>" . $row["email"] . "</td></tr>";
}
echo '</table><br>';        // End of results table

// Now we need to update the Author or Customer tables if necessary. First we'll try to update the author table.
$update = "UPDATE author
           SET author.address = '$address'
           WHERE author.name = '$name'";
mysqli_query($my_conn, $update) or die (mysqli_error($my_conn) . 'Query failed: ');

// Run a SELECT query to see if the author table was updated or not.
$query = "SELECT *
          FROM author
          WHERE author.name = '" . $name . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "$name is **NOT** an author, so the author table was <b>**NOT**</b> updated.<br><br>";
}
else {
    // Results table for the author table
    echo "**AFTER** UPDATING THE AUTHOR TABLE: ";
    echo "<br><table>";
    echo "<tr> <td><b>aid</b></td> <td><b>name</b></td> <td><b>address</b></td> </tr>";

    // Print out all of the person's info
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr> <td>" . $row["aid"] . "</td> ";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td></tr>";
    }
    echo "</table><br>";        // End of results table
}

// Try to update the customer table
$update = "UPDATE customer
           SET customer.address = '$address'
           WHERE customer.name = '$name'";
mysqli_query($my_conn, $update) or die (mysqli_error($my_conn) . 'Query failed: ');

// Run a SELECT query to see if the author table was updated or not.
$query = "SELECT *
          FROM customer
          WHERE customer.name = '" . $name . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if this person is a Customer
if (mysqli_num_rows($result) == 0) {
    echo "$name is **NOT** a customer, so the customer table has <b>**NOT**</b> been updated.<br><br>";
}
else {
    // Results table for the customer table
    echo "**AFTER** UPDATING THE CUSTOMER TABLE: ";
    echo "<br><table>";
    echo "<tr> <td><b>cid</b></td> <td><b>name</b></td> <td><b>address</b></td> </tr>";

    // Print out all of the person's info
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr> <td>" . $row["cid"] . "</td> ";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td></tr>";
    }
    echo "</table><br>";        // End of results table
}

mysqli_free_result($result);
mysqli_close($my_conn);
