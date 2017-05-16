<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/4/17
 * Time: 12:32 AM
 * User input one or more words of a book title, find all information of the books whose titles contain those words.
 *
 * Use this command to copy to htdocs
 * sudo cp -r . /opt/lampp/htdocs/Books
 */

$title = ($_POST['title']);
echo "The words the user entered is: <b><u>$title</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// This will get all the information about books matching the words the user entered for the book's title.
$query = "SELECT *
          FROM book
          WHERE book.title LIKE '%" . $title . "%'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find any books containing the words $title :'(<br>";
    return 0;
}

// Results table
echo "<br><table>";
echo "<tr> <td><b>title</b></td> 
<td><b>year</b></td> 
<td><b>category</b></td> 
<td><b>publisher</b></td> 
<td><b>price</b></td></tr>";

// If the query worked, we can print out all the info for this book! Includes: title, year, category, pname, price
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["title"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    echo "<td>" . $row["category"] . "</td>";
    echo "<td>" . $row["pname"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo '</tr>';
}

echo '</table>';        // End of results table

mysqli_free_result($result);
mysqli_close($my_conn);
